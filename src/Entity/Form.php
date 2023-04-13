<?php

namespace App\Entity;

use App\Repository\FormRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FormRepository::class)]
class Form
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $accion = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $valorAnterior = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $valorNuevo = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $created = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAccion(): ?string
    {
        return $this->accion;
    }

    public function setAccion(string $accion): self
    {
        $this->accion = $accion;

        return $this;
    }

    public function getValorAnterior(): ?string
    {
        return $this->valorAnterior;
    }

    public function setValorAnterior(?string $valorAnterior): self
    {
        $this->valorAnterior = $valorAnterior;

        return $this;
    }

    public function getValorNuevo(): ?string
    {
        return $this->valorNuevo;
    }

    public function setValorNuevo(?string $valorNuevo): self
    {
        $this->valorNuevo = $valorNuevo;

        return $this;
    }

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
    }

    public function setCreated(\DateTimeInterface $created): self
    {
        $this->created = $created;

        return $this;
    }
}
