<?php

namespace App\Entity;

use App\Repository\PrestationsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PrestationsRepository::class)]
class Prestations
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idPrestation = null;

    #[ORM\Column(length: 255)]
    private ?string $libellePrestation = null;

    #[ORM\Column]
    private ?float $prixPrestation = null;

    #[ORM\ManyToOne(inversedBy: 'idPrestationOptions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Options $idPrestationsOptions = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdPrestation(): ?int
    {
        return $this->idPrestation;
    }

    public function setIdPrestation(int $idPrestation): static
    {
        $this->idPrestation = $idPrestation;

        return $this;
    }

    public function getLibellePrestation(): ?string
    {
        return $this->libellePrestation;
    }

    public function setLibellePrestation(string $libellePrestation): static
    {
        $this->libellePrestation = $libellePrestation;

        return $this;
    }

    public function getPrixPrestation(): ?float
    {
        return $this->prixPrestation;
    }

    public function setPrixPrestation(float $prixPrestation): static
    {
        $this->prixPrestation = $prixPrestation;

        return $this;
    }

    public function getIdPrestationsOptions(): ?Options
    {
        return $this->idPrestationsOptions;
    }

    public function setIdPrestationsOptions(?Options $idPrestationsOptions): static
    {
        $this->idPrestationsOptions = $idPrestationsOptions;

        return $this;
    }
}
