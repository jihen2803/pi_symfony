<?php

namespace App\Controller;

use Knp\Snappy\Pdf;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use App\Entity\Reservationvelo;
use App\Entity\User;
use App\Entity\Velo;
use App\Form\ReservationveloType;
use App\Repository\ReservationveloRepository;
use App\Service\KonnectPaymentService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/reservationvelo')]
final class ReservationveloController extends AbstractController
{
    #[Route(name: 'app_reservationvelo_index', methods: ['GET'])]
    public function index(ReservationveloRepository $reservationveloRepository): Response
    {
        return $this->render('Front/reservationvelo/index.html.twig', [
            'reservationvelos' => $reservationveloRepository->findAll(),
        ]);
    }
    #[Route('/start', name: 'app_reservationvelo_start', methods: ['POST'])]
    public function startReservation(Request $request, EntityManagerInterface $entityManager, KonnectPaymentService $paymentService): Response
    {
        $veloId = $request->request->get('velo_id');
        $startDate = $request->request->get('start_date');
        $endDate = $request->request->get('end_date');
    
        if (!$veloId || !$startDate || !$endDate) {
            $this->addFlash('error', 'Missing reservation parameters');
            return $this->redirectToRoute('app_stations_search');
        }
    
        $user = $entityManager->getRepository(User::class)->find(1); // TODO: replace with current user
        if (!$user) {
            $this->addFlash('error', 'You must be logged in to make a reservation');
            return $this->redirectToRoute('app_login');
        }
    
        try {
            $startDateTime = new \DateTime($startDate);
            $endDateTime = new \DateTime($endDate);
            if ($endDateTime <= $startDateTime) {
                $this->addFlash('error', 'End date must be after start date');
                return $this->redirectToRoute('app_stations_search');
            }
        } catch (\Exception $e) {
            $this->addFlash('error', 'Invalid date format');
            return $this->redirectToRoute('app_stations_search');
        }
    
        $velo = $entityManager->getRepository(Velo::class)->find($veloId);
        if (!$velo) {
            $this->addFlash('error', 'Bike not found');
            return $this->redirectToRoute('app_stations_search');
        }
    
        // Check overlapping reservations
        $existingReservation = $entityManager->getRepository(Reservationvelo::class)
            ->findOverlappingReservation($velo, $startDateTime, $endDateTime);
        if ($existingReservation) {
            $this->addFlash('error', 'This bike is already reserved for the selected dates');
            return $this->redirectToRoute('app_stations_search');
        }
    
        $interval = $startDateTime->diff($endDateTime);
        $hours = $interval->h + ($interval->days * 24) + ($interval->i / 60);
        $price = $velo->getVeloType()->getPrice() * $hours;
    
        // 1. Call payment creation
        $paymentUrl = $paymentService->createPayment((int) ($price * 1000), '680e79d636eae5c3e033a84b');
    
        if (!$paymentUrl) {
            $this->addFlash('error', 'Failed to initiate payment');
            return $this->redirectToRoute('app_stations_search');
        }
    
        // 2. Save temporary reservation data in session (or you can pass them in URL params encrypted)
        $session = $request->getSession();
        $session->set('reservation_data', [
            'velo_id' => $velo->getId_Velo(),
            'id' => $user->getId(),
            'start' => $startDate,
            'end' => $endDate,
            'price' => $price,
        ]);
    
        // 3. Redirect user to payment page
        return $this->redirect($paymentUrl);
    }
    #[Route('/payment/success/{paymentId}', name: 'app_reservationvelo_payment_success')]
public function paymentSuccess(string $paymentId, Request $request, EntityManagerInterface $entityManager, KonnectPaymentService $paymentService, MailerInterface $mailer): Response
{
    $session = $request->getSession();
    $reservationData = $session->get('reservation_data');

    if (!$reservationData) {
        $this->addFlash('error', 'No reservation data found.');
        return $this->redirectToRoute('app_stations_search');
    }

    // Check payment status
    $status = $paymentService->checkPaymentStatus($paymentId);

    if ($status !== 'completed') {
        $this->addFlash('error', 'Payment was not successful.');
        return $this->redirectToRoute('app_stations_search');
    }

    // Create reservation after payment success
    $user = $entityManager->getRepository(User::class)->find($reservationData['user_id']);
    $velo = $entityManager->getRepository(Velo::class)->find($reservationData['velo_id']);

    if (!$user || !$velo) {
        $this->addFlash('error', 'Error creating reservation.');
        return $this->redirectToRoute('app_stations_search');
    }

    $reservation = new Reservationvelo();
    $reservation->setVelo($velo);
    $reservation->setUser($user);
    $reservation->setDateDebut(new \DateTime($reservationData['start']));
    $reservation->setDateFin(new \DateTime($reservationData['end']));
    $reservation->setStatut('booked');
    $reservation->setPrice($reservationData['price']);
    $reservation->setPaymentStatus('paid');

    $velo->setDispo(false);

    try {
        $entityManager->persist($reservation);
        $entityManager->persist($velo);
        $entityManager->flush();

        // Send email (same logic you already have)
        $email = (new TemplatedEmail())
            ->from('noreply@yourdomain.com')
            ->to($user->getEmail())
            ->subject('Bike Reservation Confirmation')
            ->htmlTemplate('emails/reservation_confirmation.html.twig')
            ->context([
                'user' => $user,
                'reservation' => $reservation,
            ]);
        $mailer->send($email);

        $session->remove('reservation_data'); // Clear session
        $this->addFlash('success', 'Reservation created successfully!');

        return $this->redirectToRoute('app_reservationvelo_show', [
            'id_reservation_velo' => $reservation->getIdReservationVelo(),
        ]);
    } catch (\Exception $e) {
        $this->addFlash('error', 'Failed to create reservation: '.$e->getMessage());
        return $this->redirectToRoute('app_stations_search');
    }
}

    #[Route('/new', name: 'app_reservationvelo_new', methods: ['POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $veloId = $request->request->get('velo_id');
        $startDate = $request->request->get('start_date');
        $endDate = $request->request->get('end_date');
    
        // Validate required parameters
        if (!$veloId || !$startDate || !$endDate) {
            $this->addFlash('error', 'Missing reservation parameters');
            return $this->redirectToRoute('app_stations_search');
        }
    
        // Get authenticated user
        $user = $entityManager->getRepository(User::class)->find(1); // Replace with current user
        if (!$user) {
            $this->addFlash('error', 'You must be logged in to make a reservation');
            return $this->redirectToRoute('app_login');
        }
    
        // Validate dates
        try {
            $startDateTime = new \DateTime($startDate);
            $endDateTime = new \DateTime($endDate);
            
            if ($endDateTime <= $startDateTime) {
                $this->addFlash('error', 'End date must be after start date');
                return $this->redirectToRoute('app_stations_search');
            }
        } catch (\Exception $e) {
            $this->addFlash('error', 'Invalid date format');
            return $this->redirectToRoute('app_stations_search');
        }
    
        $velo = $entityManager->getRepository(Velo::class)->find($veloId);
        
        if (!$velo) {
            $this->addFlash('error', 'Bike not found');
            return $this->redirectToRoute('app_stations_search');
        }
    
        // Check for existing reservations
        $existingReservation = $entityManager->getRepository(Reservationvelo::class)
            ->findOverlappingReservation($velo, $startDateTime, $endDateTime);
    
        if ($existingReservation) {
            $this->addFlash('error', 'This bike is already reserved for the selected dates');
            return $this->redirectToRoute('app_stations_search');
        }
    
        // Calculate duration and price
        $interval = $startDateTime->diff($endDateTime);
        $hours = $interval->h + ($interval->days * 24) + ($interval->i / 60);
        $price = $velo->getVeloType()->getPrice() * $hours;
    
        // Create reservation
        $reservation = new Reservationvelo();
        $reservation->setVelo($velo);
        $reservation->setUser($user);
        $reservation->setDateDebut($startDateTime);
        $reservation->setDateFin($endDateTime);
        $reservation->setStatut('booked');
        $reservation->setPrice($price);
        $reservation->setPaymentStatus('pending');
    
        // Update bike availability
        $velo->setDispo(false);
    
        try {
            $entityManager->persist($reservation);
            $entityManager->persist($velo);
            $entityManager->flush();
        } catch (\Exception $e) {
            $this->addFlash('error', 'Error saving reservation: ' . $e->getMessage());
            return $this->redirectToRoute('app_stations_search');
        }
    
        // Send confirmation email
        try {
            $email = (new TemplatedEmail())
                ->from('noreply@yourdomain.com')
                ->to($user->getEmail())
                ->subject('Bike Reservation Confirmation')
                ->htmlTemplate('emails/reservation_confirmation.html.twig')
                ->context([
                    'user' => $user,
                    'reservation' => $reservation,
                    'start_date' => $startDateTime->format('Y-m-d H:i'),
                    'end_date' => $endDateTime->format('Y-m-d H:i'),
                    'total_price' => $price
                ]);
    
            $mailer->send($email);
        } catch (\Exception $e) {
            // Log email error but don't fail the reservation
            $this->addFlash('warning', 'Reservation created but confirmation email failed to send');
        }
    
        $this->addFlash('success', 'Reservation created successfully!');
        return $this->redirectToRoute('app_reservationvelo_show', [
            'id_reservation_velo' => $reservation->getIdReservationVelo()
        ]);
    }
    

    #[Route('/{id_reservation_velo}', name: 'app_reservationvelo_show', methods: ['GET'])]
    public function show(Reservationvelo $reservationvelo): Response
    {
        return $this->render('Front/reservationvelo/show.html.twig', [
            'reservationvelo' => $reservationvelo,
        ]);
    }

    #[Route('/{id_reservation_velo}/edit', name: 'app_reservationvelo_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reservationvelo $reservationvelo, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReservationveloType::class, $reservationvelo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reservationvelo_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('Front/reservationvelo/edit.html.twig', [
            'reservationvelo' => $reservationvelo,
            'form' => $form,
        ]);
    }

    #[Route('/{id_reservation_velo}', name: 'app_reservationvelo_delete', methods: ['POST'])]
    public function delete(Request $request, Reservationvelo $reservationvelo, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservationvelo->getId_reservation_velo(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($reservationvelo);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reservationvelo_index', [], Response::HTTP_SEE_OTHER);
    }
  

    #[Route('/{id_reservation_velo}/download-pdf', name: 'app_reservationvelo_download_pdf')]
    public function downloadPdf(
        Reservationvelo $reservationvelo,
        Pdf $knpSnappyPdf
    ): Response {
        // Render a PDF-friendly Twig template
        $html = $this->renderView('pdf/reservation_detail.html.twig', [
            'reservation' => $reservationvelo,
        ]);
    
        $filename = sprintf('reservation_%d.pdf', $reservationvelo->getIdReservationVelo());
    
        $pdf = $knpSnappyPdf->getOutputFromHtml($html);
    
        return new Response($pdf, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"'
        ]);
    }
    

}
