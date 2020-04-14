<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BooksRepository")
 */
class Books
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
    private $id_book;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $author_name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $author_second_name;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $style_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $number_pages;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_publishing_house;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_publishing;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_type_cover;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $mark;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdBook(): ?int
    {
        return $this->id_book;
    }

    public function setIdBook(int $id_book): self
    {
        $this->id_book = $id_book;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAuthorName(): ?string
    {
        return $this->author_name;
    }

    public function setAuthorName(?string $author_name): self
    {
        $this->author_name = $author_name;

        return $this;
    }

    public function getAuthorSecondName(): ?string
    {
        return $this->author_second_name;
    }

    public function setAuthorSecondName(?string $author_second_name): self
    {
        $this->author_second_name = $author_second_name;

        return $this;
    }

    public function getStyleId(): ?int
    {
        return $this->style_id;
    }

    public function setStyleId(?int $style_id): self
    {
        $this->style_id = $style_id;

        return $this;
    }

    public function getNumberPages(): ?int
    {
        return $this->number_pages;
    }

    public function setNumberPages(?int $number_pages): self
    {
        $this->number_pages = $number_pages;

        return $this;
    }

    public function getIdPublishingHouse(): ?int
    {
        return $this->id_publishing_house;
    }

    public function setIdPublishingHouse(?int $id_publishing_house): self
    {
        $this->id_publishing_house = $id_publishing_house;

        return $this;
    }

    public function getDatePublishing(): ?\DateTimeInterface
    {
        return $this->date_publishing;
    }

    public function setDatePublishing(?\DateTimeInterface $date_publishing): self
    {
        $this->date_publishing = $date_publishing;

        return $this;
    }

    public function getIdTypeCover(): ?int
    {
        return $this->id_type_cover;
    }

    public function setIdTypeCover(?int $id_type_cover): self
    {
        $this->id_type_cover = $id_type_cover;

        return $this;
    }

    public function getMark(): ?int
    {
        return $this->mark;
    }

    public function setMark(?int $mark): self
    {
        $this->mark = $mark;

        return $this;
    }
}
