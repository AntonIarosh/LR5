<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StylesRepository")
 */
class Styles
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_style;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $style_book;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdStyle(): ?int
    {
        return $this->id_style;
    }

    public function setIdStyle(int $id_style): self
    {
        $this->id_style = $id_style;

        return $this;
    }

    public function getStyleBook(): ?string
    {
        return $this->style_book;
    }

    public function setStyleBook(?string $style_book): self
    {
        $this->style_book = $style_book;

        return $this;
    }
}
