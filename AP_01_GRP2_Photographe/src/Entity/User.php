<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom_user = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prenom_user = null;

    #[ORM\Column(nullable: true)]
    private ?int $cp_user = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ville_user = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $adresse_user = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $telephone_user = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $genre_user = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $mdp_user = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $email = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomUser(): ?string
    {
        return $this->nom_user;
    }

    public function setNomUser(?string $nom_user): static
    {
        $this->nom_user = $nom_user;

        return $this;
    }

    public function getPrenomUser(): ?string
    {
        return $this->prenom_user;
    }

    public function setPrenomUser(?string $prenom_user): static
    {
        $this->prenom_user = $prenom_user;

        return $this;
    }

    public function getCpUser(): ?int
    {
        return $this->cp_user;
    }

    public function setCpUser(?int $cp_user): static
    {
        $this->cp_user = $cp_user;

        return $this;
    }

    public function getVilleUser(): ?string
    {
        return $this->ville_user;
    }

    public function setVilleUser(?string $ville_user): static
    {
        $this->ville_user = $ville_user;

        return $this;
    }

    public function getAdresseUser(): ?string
    {
        return $this->adresse_user;
    }

    public function setAdresseUser(?string $adresse_user): static
    {
        $this->adresse_user = $adresse_user;

        return $this;
    }

    public function getTelephoneUser(): ?string
    {
        return $this->telephone_user;
    }

    public function setTelephoneUser(?string $telephone_user): static
    {
        $this->telephone_user = $telephone_user;

        return $this;
    }

    public function getGenreUser(): ?string
    {
        return $this->genre_user;
    }

    public function setGenreUser(?string $genre_user): static
    {
        $this->genre_user = $genre_user;

        return $this;
    }

    public function getMdpUser(): ?string
    {
        return $this->mdp_user;
    }

    public function setMdpUser(?string $mdp_user): static
    {
        $this->mdp_user = $mdp_user;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }
}
