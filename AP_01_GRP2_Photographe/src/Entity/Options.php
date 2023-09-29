<?php

namespace App\Entity;

use App\Repository\OptionsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OptionsRepository::class)]
class Options
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idOption = null;

    #[ORM\Column(length: 255)]
    private ?string $libelleOption = null;

    #[ORM\Column]
    private ?float $prixOption = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdOption(): ?int
    {
        return $this->idOption;
    }

    public function setIdOption(int $idOption): static
    {
        $this->idOption = $idOption;

        return $this;
    }

    public function getLibelleOption(): ?string
    {
        return $this->libelleOption;
    }

    public function setLibelleOption(string $libelleOption): static
    {
        $this->libelleOption = $libelleOption;

        return $this;
    }

    public function getPrixOption(): ?float
    {
        return $this->prixOption;
    }

    public function setPrixOption(float $prixOption): static
    {
        $this->prixOption = $prixOption;

        return $this;
    }
}
