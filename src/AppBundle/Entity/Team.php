<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Team
 *
 * @ORM\Table(name="team", indexes={@ORM\Index(name="fk_team_sexe1_idx", columns={"sexe_id"}), @ORM\Index(name="fk_team_category1_idx", columns={"category_id"}), @ORM\Index(name="fk_team_division1_idx", columns={"division_id"}), @ORM\Index(name="fk_team_season1_idx", columns={"season_id"}), @ORM\Index(name="fk_team_club1_idx", columns={"club_id"})})
 * @ORM\Entity
 */
class Team
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Category
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $category;

    /**
     * @var \AppBundle\Entity\Club
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Club")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="club_id", referencedColumnName="id")
     * })
     */
    private $club;

    /**
     * @var \AppBundle\Entity\Division
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Division")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="division_id", referencedColumnName="id")
     * })
     */
    private $division;

    /**
     * @var \AppBundle\Entity\Season
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Season")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="season_id", referencedColumnName="id")
     * })
     */
    private $season;

    /**
     * @var \AppBundle\Entity\Sexe
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Sexe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sexe_id", referencedColumnName="id")
     * })
     */
    private $sexe;


}

