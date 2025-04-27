<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use App\Repository\VehiculeRepository;

#[ORM\Entity(repositoryClass: VehiculeRepository::class)]
class Vehicule
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $marque = null;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $modele = null;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $immatriculation = null;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $numserie = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'vehicules')]
    #[ORM\JoinColumn(name: 'id_user', referencedColumnName: 'id')]
    private ?User $user = null;

    #[ORM\OneToMany(targetEntity: ReservationTaxi::class, mappedBy: 'vehicule')]
    private Collection $reservations;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }

    // Getters and Setters
    public function getId(): ?int { return $this->id; }

    public function getMarque(): ?string { return $this->marque; }
    public function setMarque(string $marque): self { $this->marque = $marque; return $this; }

    public function getModele(): ?string { return $this->modele; }
    public function setModele(string $modele): self { $this->modele = $modele; return $this; }

    public function getImmatriculation(): ?string { return $this->immatriculation; }
    public function setImmatriculation(string $immatriculation): self { $this->immatriculation = $immatriculation; return $this; }

    public function getNumserie(): ?string { return $this->numserie; }
    public function setNumserie(string $numserie): self { $this->numserie = $numserie; return $this; }

    public function getUser(): ?User { return $this->user; }
    public function setUser(?User $user): self { $this->user = $user; return $this; }

    /** @return Collection<int, ReservationTaxi> */
    public function getReservations(): Collection { return $this->reservations; }
    public function addReservation(ReservationTaxi $reservation): self {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations[] = $reservation;
            $reservation->setVehicule($this);
        }
        return $this;
    }
    public function removeReservation(ReservationTaxi $reservation): self {
        if ($this->reservations->removeElement($reservation)) {
            if ($reservation->getVehicule() === $this) {
                $reservation->setVehicule(null);
            }
        }
        return $this;
    }

    public function __toString(): string
    {
        return $this->marque . ' ' . $this->modele . ' (' . $this->immatriculation . ')';
    }
}