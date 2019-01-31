<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InvoiceRepository")
 */
class Invoice
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @ORM\Column(type="integer", length=6)
     */
    private $invoiceNumber;

    /**
     * @ORM\Column(type="integer")
     */
    private $clientID;

    /**
     * @ORM\Column(type="integer")
     */
    private $courseID;

    /**
     * @ORM\Column(type="integer")
     */
    private $registrationID;

    /**
     * @ORM\Column(type="boolean")
     */
    private $invoicePayed;

    /**
     * @return mixed
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
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
    public function getCourseID()
    {
        return $this->courseID;
    }

    /**
     * @return mixed
     */
    public function getRegistrationID()
    {
        return $this->registrationID;
    }

    /**
     * @return mixed
     */
    public function getInvoicePayed()
    {
        return $this->invoicePayed;
    }
}
