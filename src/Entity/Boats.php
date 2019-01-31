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
     * @ORM\ManyToOne(targetEntity="App\Entity\Courses")
     */
    private $id;

    public function getId()
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

    /**
     * @param mixed $boatName
     */
    public function setBoatName($boatName): void
    {
        $this->boatName = $boatName;
    }

    /**
     * @param mixed $boatDesc
     */
    public function setBoatDesc($boatDesc): void
    {
        $this->boatDesc = $boatDesc;
    }

    /**
     * @param mixed $boatImage
     */
    public function setBoatImage($boatImage): void
    {
        $this->boatImage = $boatImage;
    }

}
