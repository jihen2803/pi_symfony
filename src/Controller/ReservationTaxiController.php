<?php

namespace App\Controller;

use App\Entity\ReservationTaxi;
use App\Form\ReservationTaxiType;
use App\Repository\ReservationTaxiRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/reservation/taxi')]
final class ReservationTaxiController extends AbstractController
{
    #[Route(name: 'app_reservation_taxi_index', methods: ['GET'])]
    public function index(ReservationTaxiRepository $reservationTaxiRepository): Response
    {
        return $this->render('Admin/reservation_taxi/index.html.twig', [
            'reservation_taxis' => $reservationTaxiRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_reservation_taxi_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reservationTaxi = new ReservationTaxi();
        $form = $this->createForm(ReservationTaxiType::class, $reservationTaxi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reservationTaxi);
            $entityManager->flush();

            return $this->redirectToRoute('app_reservation_taxi_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('Admin/reservation_taxi/new.html.twig', [
            'reservation_taxi' => $reservationTaxi,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reservation_taxi_show', methods: ['GET'])]
    public function show(ReservationTaxi $reservationTaxi): Response
    {
        return $this->render('Admin/reservation_taxi/show.html.twig', [
            'reservation_taxi' => $reservationTaxi,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reservation_taxi_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ReservationTaxi $reservationTaxi, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReservationTaxiType::class, $reservationTaxi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reservation_taxi_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('Admin/reservation_taxi/edit.html.twig', [
            'reservation_taxi' => $reservationTaxi,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reservation_taxi_delete', methods: ['POST'])]
    public function delete(Request $request, ReservationTaxi $reservationTaxi, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservationTaxi->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($reservationTaxi);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reservation_taxi_index', [], Response::HTTP_SEE_OTHER);
    }
}
