<?php

namespace App\Entity;

use App\Repository\DemandeDeContactsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DemandeDeContactsRepository::class)]
class DemandeDeContacts
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $descriptionDemande = null;

    #[ORM\Column(length: 255)]
    private ?string $objetDemande = null;

    #[ORM\Column(length: 255)]
    private ?string $dateDemande = null;

    #[ORM\ManyToOne(inversedBy: 'idDemandedeContacts')]
    private ?Utilisateurs $idUtilisateur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescriptionDemande(): ?string
    {
        return $this->descriptionDemande;
    }

    public function setDescriptionDemande(string $descriptionDemande): static
    {
        $this->descriptionDemande = $descriptionDemande;

        return $this;
    }

    public function getObjetDemande(): ?string
    {
        return $this->objetDemande;
    }

    public function setObjetDemande(string $objetDemande): static
    {
        $this->objetDemande = $objetDemande;

        return $this;
    }

    public function getDateDemande(): ?string
    {
        return $this->dateDemande;
    }

    public function setDateDemande(string $dateDemande): static
    {
        $this->dateDemande = $dateDemande;

        return $this;
    }

    public function getIdUtilisateur(): ?Utilisateurs
    {
        return $this->idUtilisateur;
    }

    public function setIdUtilisateur(?Utilisateurs $idUtilisateur): static
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }
}
