<?php

namespace App\Entity;

use App\Repository\UtilisateursRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\ManyToOne(targetEntity: self::class, inversedBy: 'demande_de_contacts')]
    #[ORM\JoinColumn(nullable: false)]
    private ?self $idDemandeUtilisateurs = null;

    #[ORM\OneToMany(mappedBy: 'idDemandeUtilisateurs', targetEntity: self::class, orphanRemoval: true)]
    private Collection $demande_de_contacts;

    #[ORM\OneToMany(mappedBy: 'idUtilisateur', targetEntity: DemandeDeContacts::class)]
    private Collection $idDemandedeContacts;

    #[ORM\Column(length: 255)]
    private ?string $idUtilisateurRole = null;

    #[ORM\Column]
    private ?int $idRoleUtilisateur = null;

    #[ORM\OneToMany(mappedBy: 'id_Utilisateur_Avis', targetEntity: Avis::class)]
    private Collection $id_UtilisateurAvis;

    #[ORM\ManyToOne]
    private ?Role $idUtilisateurRoles = null;

    public function __construct()
    {
        $this->demande_de_contacts = new ArrayCollection();
        $this->idDemandedeContacts = new ArrayCollection();
        $this->id_UtilisateurAvis = new ArrayCollection();
    }

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

    public function getIdDemandeUtilisateurs(): ?self
    {
        return $this->idDemandeUtilisateurs;
    }

    public function setIdDemandeUtilisateurs(?self $idDemandeUtilisateurs): static
    {
        $this->idDemandeUtilisateurs = $idDemandeUtilisateurs;

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getDemandeDeContacts(): Collection
    {
        return $this->demande_de_contacts;
    }

    public function addDemandeDeContact(self $demandeDeContact): static
    {
        if (!$this->demande_de_contacts->contains($demandeDeContact)) {
            $this->demande_de_contacts->add($demandeDeContact);
            $demandeDeContact->setIdDemandeUtilisateurs($this);
        }

        return $this;
    }

    public function removeDemandeDeContact(self $demandeDeContact): static
    {
        if ($this->demande_de_contacts->removeElement($demandeDeContact)) {
            // set the owning side to null (unless already changed)
            if ($demandeDeContact->getIdDemandeUtilisateurs() === $this) {
                $demandeDeContact->setIdDemandeUtilisateurs(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, DemandeDeContacts>
     */
    public function getIdDemandedeContacts(): Collection
    {
        return $this->idDemandedeContacts;
    }

    public function addIdDemandedeContact(DemandeDeContacts $idDemandedeContact): static
    {
        if (!$this->idDemandedeContacts->contains($idDemandedeContact)) {
            $this->idDemandedeContacts->add($idDemandedeContact);
            $idDemandedeContact->setIdUtilisateur($this);
        }

        return $this;
    }

    public function removeIdDemandedeContact(DemandeDeContacts $idDemandedeContact): static
    {
        if ($this->idDemandedeContacts->removeElement($idDemandedeContact)) {
            // set the owning side to null (unless already changed)
            if ($idDemandedeContact->getIdUtilisateur() === $this) {
                $idDemandedeContact->setIdUtilisateur(null);
            }
        }

        return $this;
    }

    public function getIdUtilisateurRole(): ?string
    {
        return $this->idUtilisateurRole;
    }

    public function setIdUtilisateurRole(string $idUtilisateurRole): static
    {
        $this->idUtilisateurRole = $idUtilisateurRole;

        return $this;
    }

    public function getIdRoleUtilisateur(): ?int
    {
        return $this->idRoleUtilisateur;
    }

    public function setIdRoleUtilisateur(int $idRoleUtilisateur): static
    {
        $this->idRoleUtilisateur = $idRoleUtilisateur;

        return $this;
    }

    /**
     * @return Collection<int, Avis>
     */
    public function getIdUtilisateurAvis(): Collection
    {
        return $this->id_UtilisateurAvis;
    }

    public function addIdUtilisateurAvi(Avis $idUtilisateurAvi): static
    {
        if (!$this->id_UtilisateurAvis->contains($idUtilisateurAvi)) {
            $this->id_UtilisateurAvis->add($idUtilisateurAvi);
            $idUtilisateurAvi->setIdUtilisateurAvis($this);
        }

        return $this;
    }

    public function removeIdUtilisateurAvi(Avis $idUtilisateurAvi): static
    {
        if ($this->id_UtilisateurAvis->removeElement($idUtilisateurAvi)) {
            // set the owning side to null (unless already changed)
            if ($idUtilisateurAvi->getIdUtilisateurAvis() === $this) {
                $idUtilisateurAvi->setIdUtilisateurAvis(null);
            }
        }

        return $this;
    }

    public function getIdUtilisateurRoles(): ?Role
    {
        return $this->idUtilisateurRoles;
    }

    public function setIdUtilisateurRoles(?Role $idUtilisateurRoles): static
    {
        $this->idUtilisateurRoles = $idUtilisateurRoles;

        return $this;
    }
}
