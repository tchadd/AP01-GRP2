<?php

namespace App\Entity;

use App\Repository\AvisRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AvisRepository::class)]
class Avis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $descriptionAvis = null;

    #[ORM\Column]
    private ?float $niveauAvis = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateAvis = null;

    #[ORM\Column(nullable: true)]
    private ?int $idUtilisateurAvis = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescriptionAvis(): ?string
    {
        return $this->descriptionAvis;
    }

    public function setDescriptionAvis(?string $descriptionAvis): static
    {
        $this->descriptionAvis = $descriptionAvis;

        return $this;
    }

    public function getNiveauAvis(): ?float
    {
        return $this->niveauAvis;
    }

    public function setNiveauAvis(float $niveauAvis): static
    {
        $this->niveauAvis = $niveauAvis;

        return $this;
    }

    public function getDateAvis(): ?\DateTimeInterface
    {
        return $this->dateAvis;
    }

    public function setDateAvis(\DateTimeInterface $dateAvis): static
    {
        $this->dateAvis = $dateAvis;

        return $this;
    }

    
}
