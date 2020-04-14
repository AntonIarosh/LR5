<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BascetsRepository")
 */
class Bascets
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
    private $id_payer;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_bascet;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_pay_book;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $coutaty_of_book;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $price;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdPayer(): ?int
    {
        return $this->id_payer;
    }

    public function setIdPayer(int $id_payer): self
    {
        $this->id_payer = $id_payer;

        return $this;
    }

    public function getIdBascet(): ?int
    {
        return $this->id_bascet;
    }

    public function setIdBascet(int $id_bascet): self
    {
        $this->id_bascet = $id_bascet;

        return $this;
    }

    public function getIdPayBook(): ?int
    {
        return $this->id_pay_book;
    }

    public function setIdPayBook(int $id_pay_book): self
    {
        $this->id_pay_book = $id_pay_book;

        return $this;
    }

    public function getCoutatyOfBook(): ?int
    {
        return $this->coutaty_of_book;
    }

    public function setCoutatyOfBook(?int $coutaty_of_book): self
    {
        $this->coutaty_of_book = $coutaty_of_book;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(?int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }
}
