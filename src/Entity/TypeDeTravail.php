<?php

namespace App\Entity;

use App\Repository\TypeDeTravailRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypeDeTravailRepository::class)]
class TypeDeTravail
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $descriptionDePoste = null;

    #[ORM\Column(length: 255)]
    private ?string $nomDuPoste = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescriptionDePoste(): ?string
    {
        return $this->descriptionDePoste;
    }

    public function setDescriptionDePoste(string $descriptionDePoste): static
    {
        $this->descriptionDePoste = $descriptionDePoste;

        return $this;
    }

    public function getNomDuPoste(): ?string
    {
        return $this->nomDuPoste;
    }

    public function setNomDuPoste(string $nomDuPoste): static
    {
        $this->nomDuPoste = $nomDuPoste;

        return $this;
    }
}
