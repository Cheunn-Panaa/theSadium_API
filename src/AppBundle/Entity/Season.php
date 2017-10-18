<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Season
 *
 * @ORM\Table(name="season")
 * @ORM\Entity
 */
class Season
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_year", type="date", nullable=false)
     */
    private $startYear;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_year", type="date", nullable=false)
     */
    private $endYear;



    /**
     * Get the value of Id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param integer id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Start Year
     *
     * @return \DateTime
     */
    public function getStartYear()
    {
        return $this->startYear;
    }

    /**
     * Set the value of Start Year
     *
     * @param \DateTime startYear
     *
     * @return self
     */
    public function setStartYear(\DateTime $startYear)
    {
        $this->startYear = $startYear;

        return $this;
    }

    /**
     * Get the value of End Year
     *
     * @return \DateTime
     */
    public function getEndYear()
    {
        return $this->endYear;
    }

    /**
     * Set the value of End Year
     *
     * @param \DateTime endYear
     *
     * @return self
     */
    public function setEndYear(\DateTime $endYear)
    {
        $this->endYear = $endYear;

        return $this;
    }

}
