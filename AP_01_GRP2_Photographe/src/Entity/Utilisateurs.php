<?php

namespace App\Entity;

use App\Repository\UtilisateursRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UtilisateursRepository::class)]
class Utilisateurs
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomUtilisateur = null;

    #[ORM\Column(length: 255)]
    private ?string $prenomUtilisateur = null;

    #[ORM\Column]
    private ?int $cpUtilisateur = null;

    #[ORM\Column(length: 255)]
    private ?string $villeUtilisateur = null;

    #[ORM\Column(length: 255)]
    private ?string $adresseUtilisateur = null;

    #[ORM\Column]
    private ?int $telephoneUtilisateur = null;

    #[ORM\Column(length: 255)]
    private ?string $mailUtilisateur = null;

    #[ORM\Column(length: 255)]
    private ?string $motdepasseUtilisateur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomUtilisateur(): ?string
    {
        return $this->nomUtilisateur;
    }

    public function setNomUtilisateur(string $nomUtilisateur): static
    {
        $this->nomUtilisateur = $nomUtilisateur;

        return $this;
    }

    public function getPrenomUtilisateur(): ?string
    {
        return $this->prenomUtilisateur;
    }

    public function setPrenomUtilisateur(string $prenomUtilisateur): static
    {
        $this->prenomUtilisateur = $prenomUtilisateur;

        return $this;
    }

    public function getCpUtilisateur(): ?int
    {
        return $this->cpUtilisateur;
    }

    public function setCpUtilisateur(int $cpUtilisateur): static
    {
        $this->cpUtilisateur = $cpUtilisateur;

        return $this;
    }

    public function getVilleUtilisateur(): ?string
    {
        return $this->villeUtilisateur;
    }

    public function setVilleUtilisateur(string $villeUtilisateur): static
    {
        $this->villeUtilisateur = $villeUtilisateur;

        return $this;
    }

    public function getAdresseUtilisateur(): ?string
    {
        return $this->adresseUtilisateur;
    }

    public function setAdresseUtilisateur(string $adresseUtilisateur): static
    {
        $this->adresseUtilisateur = $adresseUtilisateur;

        return $this;
    }

    public function getTelephoneUtilisateur(): ?int
    {
        return $this->telephoneUtilisateur;
    }

    public function setTelephoneUtilisateur(int $telephoneUtilisateur): static
    {
        $this->telephoneUtilisateur = $telephoneUtilisateur;

        return $this;
    }

    public function getMailUtilisateur(): ?string
    {
        return $this->mailUtilisateur;
    }

    public function setMailUtilisateur(string $mailUtilisateur): static
    {
        $this->mailUtilisateur = $mailUtilisateur;

        return $this;
    }

    public function getMotdepasseUtilisateur(): ?string
    {
        return $this->motdepasseUtilisateur;
    }

    public function setMotdepasseUtilisateur(string $motdepasseUtilisateur): static
    {
        $this->motdepasseUtilisateur = $motdepasseUtilisateur;

        return $this;
    }
}
