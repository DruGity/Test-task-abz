<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Worker
 *
 * @ORM\Table(name="worker")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\WorkerRepository")
 */
class Worker
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
     * @var Director
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Director", inversedBy="worker", cascade={"persist"}) // указание связей: прямой и обратной
     * @ORM\JoinColumn(name="id_director", referencedColumnName="id") // указание доп id для связи таблиц
     */
    private $director;


    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     * @Assert\Image()
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

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

    public function __construct()
    {
        $this->setDateStartWork(new \DateTime("now"));

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
     * @return Worker
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
     * @return Worker
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
     * @return Worker
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
     * @return Worker
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
     * @return Worker
     */
    public function setDateStartWork(\DateTime $dateStartWork = null)
    {
        $this->dateStartWork = $dateStartWork;

        return $this;
    }



    /**
     * Get dateStartWork
     *
     * @return \Date
     */
    public function getDateStartWork()
    {
         return $this->dateStartWork;
    }
    public function getDateInString()
    {
        $dateStartWork = $this->dateStartWork;
        return date_format($dateStartWork,'Y-m-d');
    }

    /**
     * Set salary
     *
     * @param integer $salary
     *
     * @return Worker
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
     * Set director
     *
     * @param \AppBundle\Entity\Director $director
     *
     * @return Worker
     */
    public function setDirector(\AppBundle\Entity\Director $director = null)
    {
        $this->director = $director;

        return $this;
    }

    /**
     * @return Director
     */
    public function getDirector()
    {
        return $this->director;
    }


    /**
     * Set image
     *
     * @param string $image
     *
     * @return Worker
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
}
