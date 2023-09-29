<?php

namespace App\Entity;

use App\Repository\RoleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RoleRepository::class)]
class Role
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $libelleRole = null;

    #[ORM\Column]
    private ?bool $privilegeRole = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleRole(): ?string
    {
        return $this->libelleRole;
    }

    public function setLibelleRole(string $libelleRole): static
    {
        $this->libelleRole = $libelleRole;

        return $this;
    }

    public function isPrivilegeRole(): ?bool
    {
        return $this->privilegeRole;
    }

    public function setPrivilegeRole(bool $privilegeRole): static
    {
        $this->privilegeRole = $privilegeRole;

        return $this;
    }
}
