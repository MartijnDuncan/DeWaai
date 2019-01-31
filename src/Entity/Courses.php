<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CoursesRepository")
 */
class Courses
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity="App\Entity\Invoice", mappedBy="Courses")
     */
    private $id;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @ORM\Column(type="string", length=80)
     */
    private $courseType;

    /**
     * @return mixed
     */
    public function getCourseType()
    {
        return $this->courseType;
    }
    /**
     * @ORM\Column(type="integer", length=20)
     * @ORM\OneToMany(targetEntity="App\Entity\Boats", mappedBy="Courses")
     */
    private $boatType;

    /**
     * @return mixed
     */
    public function getBoatType()
    {
        return $this->boatType;
    }
    /**
     * @ORM\Column(type="date")
     */
    private $startDate;

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }
    /**
     * @ORM\Column(type="date")
     */
    private $endDate;

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }
    /**
     * @ORM\Column(type="integer", length=20)
     */
    private $price;

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * @ORM\Column(type="integer", length=20)
     */
    private $participant;

    /**
     * @return mixed
     */
    public function getParticipant()
    {
        return $this->participant;
    }
    /**
     * @ORM\Column(type="integer", length=20)
     */
    private $maxparticipants;

    /**
     * @return mixed
     */
    public function getMaxparticipants()
    {
        return $this->maxparticipants;
    }

    /**
     * @param mixed $courseType
     */
    public function setCourseType($courseType): void
    {
        $this->courseType = $courseType;
    }

    /**
     * @param mixed $boatType
     */
    public function setBoatType($boatType): void
    {
        $this->boatType = $boatType;
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate($endDate): void
    {
        $this->endDate = $endDate;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @param mixed $participant
     */
    public function setParticipant($participant): void
    {
        $this->participant = $participant;
    }

    /**
     * @param mixed $maxparticipants
     */
    public function setMaxparticipants($maxparticipants): void
    {
        $this->maxparticipants = $maxparticipants;
    }



}
