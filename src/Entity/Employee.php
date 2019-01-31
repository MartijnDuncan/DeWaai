<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EmployeeRepository")
 */
class Employee
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
     * @ORM\Column(type="integer", length=10)
     */
    private $employeeID;

    /**
     * @return mixed
     */
    public function getEmployeeID()
    {
        return $this->employeeID;
    }
    /**
     * @ORM\Column(type="string", length=80)
     */
    private $firstName;

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    /**
     * @ORM\Column(type="string", length=80)
     */
    private $lastName;

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    /**
     * @ORM\Column(type="string", length=80)
     */
    private $password;

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * @ORM\Column(type="integer", length=20)
     */
    private $authLevel;

    /**
     * @return mixed
     */
    public function getAuthLevel()
    {
        return $this->authLevel;
    }

    /**
     * @param mixed $employeeID
     */
    public function setEmployeeID($employeeID): void
    {
        $this->employeeID = $employeeID;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @param mixed $authLevel
     */
    public function setAuthLevel($authLevel): void
    {
        $this->authLevel = $authLevel;
    }

}
