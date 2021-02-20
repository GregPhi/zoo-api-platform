<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\AnimalRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(
*       itemOperations={
*       "get"={
*          "normalization_context"={"groups"="product:item"}
*       },
*       "delete",
*       "put",
*       "patch"}
*    )
 * @ORM\Entity(repositoryClass=AnimalRepository::class)
 */
class Animal
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $animal_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $animal_description;

    /**
     * @ORM\OneToOne(targetEntity=ZooPosition::class)
     */
    public $animal_position;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAnimalName(): ?string
    {
        return $this->animal_name;
    }

    public function setAnimalName(string $animal_name): self
    {
        $this->animal_name = $animal_name;

        return $this;
    }

    public function getAnimalDescription(): ?string
    {
        return $this->animal_description;
    }

    public function setAnimalDescription(string $animal_description): self
    {
        $this->animal_description = $animal_description;

        return $this;
    }

    public function getAnimalPosition(): ?ZooPosition
    {
        return $this->animal_position;
    }

    public function setAnimalPosition(?ZooPosition $animal_position): self
    {
        $this->animal_position = $animal_position;

        return $this;
    }
}
