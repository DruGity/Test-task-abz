<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Date;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Director
 *
 * @ORM\Table(name="director")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DirectorRepository")
 */
class Director
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="secondName", type="string", length=255)
     */
    private $secondName;

    /**
     * @var string
     *
     * @ORM\Column(name="thirdName", type="string", length=255)
     */
    private $thirdName;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=255)
     */
    private $position;

    /**
     * @var \Date
     *
     * @ORM\Column(name="date_start_work", type="date")
     */
    private $dateStartWork;

    /**
     * @var int
     *
     * @ORM\Column(name="salary", type="integer")
     */
    private $salary;

    /**
     * @var ArrayCollection // тип массива
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Worker", mappedBy="director")
     */
    private $worker;

    public function __construct()
    {
        $this->setDateStartWork(new \DateTime("now"));
        $this->worker = new ArrayCollection(); // конструктор для свойства $productList
    }



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Director
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set secondName
     *
     * @param string $secondName
     *
     * @return Director
     */
    public function setSecondName($secondName)
    {
        $this->secondName = $secondName;

        return $this;
    }

    /**
     * Get secondName
     *
     * @return string
     */
    public function getSecondName()
    {
        return $this->secondName;
    }

    /**
     * Set thirdName
     *
     * @param string $thirdName
     *
     * @return Director
     */
    public function setThirdName($thirdName)
    {
        $this->thirdName = $thirdName;

        return $this;
    }

    /**
     * Get thirdName
     *
     * @return string
     */
    public function getThirdName()
    {
        return $this->thirdName;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return Director
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set dateStartWork
     *
     * @param \Date $dateStartWork
     *
     * @return Director
     */
    public function setDateStartWork($dateStartWork)
    {
        $this->dateStartWork = $dateStartWork;

        return $this;
    }

    /**
     * Get dateStartWork
     *
     * @return string
     */
    public function getDateStartWork()
    {
        return $this->dateStartWork;
    }

    /**
     * Set salary
     *
     * @param integer $salary
     *
     * @return Director
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Get salary
     *
     * @return int
     */
    public function getSalary()
    {
        return $this->salary;
    }




    /**
     * Set worker
     *
     * @param \AppBundle\Entity\Worker $worker
     *
     * @return Director
     */
    public function setWorker(\AppBundle\Entity\Worker $worker = null)
    {
        $this->worker = $worker;

        return $this;
    }

    /**
     * Get worker
     *
     * @return \AppBundle\Entity\Worker
     */
    public function getWorker()
    {
        return $this->worker;
    }
}
