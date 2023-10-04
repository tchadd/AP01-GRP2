<?php

namespace App\Entity;

use App\Repository\PrestationsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\OneToMany(mappedBy: 'idPrestationsOptions', targetEntity: Options::class)]
    private Collection $idPrestationOption;

    #[ORM\ManyToOne(inversedBy: 'IdPrestaOptions')]
    private ?Options $idPrestaOption = null;

    public function __construct()
    {
        $this->idPrestationOption = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Options>
     */
    public function getIdPrestationOption(): Collection
    {
        return $this->idPrestationOption;
    }

    public function addIdPrestationOption(Options $idPrestationOption): static
    {
        if (!$this->idPrestationOption->contains($idPrestationOption)) {
            $this->idPrestationOption->add($idPrestationOption);
            $idPrestationOption->setIdPrestationsOptions($this);
        }

        return $this;
    }

    public function removeIdPrestationOption(Options $idPrestationOption): static
    {
        if ($this->idPrestationOption->removeElement($idPrestationOption)) {
            // set the owning side to null (unless already changed)
            if ($idPrestationOption->getIdPrestationsOptions() === $this) {
                $idPrestationOption->setIdPrestationsOptions(null);
            }
        }

        return $this;
    }

    public function getIdPrestaOption(): ?Options
    {
        return $this->idPrestaOption;
    }

    public function setIdPrestaOption(?Options $idPrestaOption): static
    {
        $this->idPrestaOption = $idPrestaOption;

        return $this;
    }
}
