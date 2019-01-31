<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReservationsRepository")
 */
class Reservations
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity="App\Entity\Invoice", mappedBy="Reservations")
     */
    private $id;

    public function getId()
    {
        return $this->id;
    }

    /** @ORM\Column(type="integer")
    * @ORM\ManyToOne(targetEntity="App\Entity\Courses")
     */
    private $courseID;

    /**
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity="App\Entity\Customer")
     */
    private $clientID;

    /**
     * @ORM\Column(type="integer")
     */
    private $reservedSpots;

    /**
     * @ORM\Column(type="date")
     */
    private $reservedDate;

    /**
     * @ORM\Column(type="boolean")
     */
    private $completed;

    /**
     * @return mixed
     */
    public function getCourseID()
    {
        return $this->courseID;
    }

    /**
     * @return mixed
     */
    public function getClientID()
    {
        return $this->clientID;
    }

    /**
     * @return mixed
     */
    public function getReservedSpots()
    {
        return $this->reservedSpots;
    }

    /**
     * @return mixed
     */
    public function getReservedDate()
    {
        return $this->reservedDate;
    }

    /**
     * @return mixed
     */
    public function getCompleted()
    {
        return $this->completed;
    }

    /**
     * @param mixed $courseID
     */
    public function setCourseID($courseID): void
    {
        $this->courseID = $courseID;
    }

    /**
     * @param mixed $clientID
     */
    public function setClientID($clientID): void
    {
        $this->clientID = $clientID;
    }

    /**
     * @param mixed $reservedSpots
     */
    public function setReservedSpots($reservedSpots): void
    {
        $this->reservedSpots = $reservedSpots;
    }

    /**
     * @param mixed $reservedDate
     */
    public function setReservedDate($reservedDate): void
    {
        $this->reservedDate = $reservedDate;
    }

    /**
     * @param mixed $completed
     */
    public function setCompleted($completed): void
    {
        $this->completed = $completed;
    }


}
