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
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

