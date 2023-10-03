<?php

namespace App\Entity;

use App\Repository\OptionsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\OneToMany(mappedBy: 'idPrestationsOptions', targetEntity: Prestations::class)]
    private Collection $idPrestationOptions;

    public function __construct()
    {
        $this->idPrestationOptions = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Prestations>
     */
    public function getIdPrestationOptions(): Collection
    {
        return $this->idPrestationOptions;
    }

    public function addIdPrestationOption(Prestations $idPrestationOption): static
    {
        if (!$this->idPrestationOptions->contains($idPrestationOption)) {
            $this->idPrestationOptions->add($idPrestationOption);
            $idPrestationOption->setIdPrestationsOptions($this);
        }

        return $this;
    }

    public function removeIdPrestationOption(Prestations $idPrestationOption): static
    {
        if ($this->idPrestationOptions->removeElement($idPrestationOption)) {
            // set the owning side to null (unless already changed)
            if ($idPrestationOption->getIdPrestationsOptions() === $this) {
                $idPrestationOption->setIdPrestationsOptions(null);
            }
        }

        return $this;
    }
}
