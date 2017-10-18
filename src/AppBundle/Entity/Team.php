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
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="sexe_id", type="integer", nullable=true)
     */
    private $sexeId;

    /**
     * @var integer
     *
     * @ORM\Column(name="category_id", type="integer", nullable=false)
     */
    private $categoryId;

    /**
     * @var integer
     *
     * @ORM\Column(name="division_id", type="integer", nullable=false)
     */
    private $divisionId;

    /**
     * @var integer
     *
     * @ORM\Column(name="season_id", type="integer", nullable=false)
     */
    private $seasonId;

    /**
     * @var integer
     *
     * @ORM\Column(name="club_id", type="integer", nullable=false)
     */
    private $clubId;



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
     * Get the value of Sexe Id
     *
     * @return integer
     */
    public function getSexeId()
    {
        return $this->sexeId;
    }

    /**
     * Set the value of Sexe Id
     *
     * @param integer sexeId
     *
     * @return self
     */
    public function setSexeId($sexeId)
    {
        $this->sexeId = $sexeId;

        return $this;
    }

    /**
     * Get the value of Category Id
     *
     * @return integer
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set the value of Category Id
     *
     * @param integer categoryId
     *
     * @return self
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get the value of Division Id
     *
     * @return integer
     */
    public function getDivisionId()
    {
        return $this->divisionId;
    }

    /**
     * Set the value of Division Id
     *
     * @param integer divisionId
     *
     * @return self
     */
    public function setDivisionId($divisionId)
    {
        $this->divisionId = $divisionId;

        return $this;
    }

    /**
     * Get the value of Season Id
     *
     * @return integer
     */
    public function getSeasonId()
    {
        return $this->seasonId;
    }

    /**
     * Set the value of Season Id
     *
     * @param integer seasonId
     *
     * @return self
     */
    public function setSeasonId($seasonId)
    {
        $this->seasonId = $seasonId;

        return $this;
    }

    /**
     * Get the value of Club Id
     *
     * @return integer
     */
    public function getClubId()
    {
        return $this->clubId;
    }

    /**
     * Set the value of Club Id
     *
     * @param integer clubId
     *
     * @return self
     */
    public function setClubId($clubId)
    {
        $this->clubId = $clubId;

        return $this;
    }

}
