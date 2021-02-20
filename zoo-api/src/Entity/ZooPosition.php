<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ZooPositionRepository;
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
* @ORM\Entity(repositoryClass=ZooPositionRepository::class)
*/
class ZooPosition
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $longitude;

    /**
     * @ORM\Column(type="integer")
     */
    private $lagitude;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLongitude(): ?int
    {
        return $this->longitude;
    }

    public function setLongitude(int $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getLagitude(): ?int
    {
        return $this->lagitude;
    }

    public function setLagitude(int $lagitude): self
    {
        $this->lagitude = $lagitude;

        return $this;
    }
}
