<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BoatsRepository")
 */
class Boats
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $boatName;

    /**
     * @return mixed
     */
    public function getBoatName()
    {
        return $this->boatName;
    }

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $boatDesc;

    /**
     * @return mixed
     */
    public function getBoatDesc()
    {
        return $this->boatDesc;
    }

    /**
     * @ORM\column(type="string", length=30)
     */
    private $boatImage;

    /**
     * @return mixed
     */
    public function getBoatImage()
    {
        return $this->boatImage;
    }
}
