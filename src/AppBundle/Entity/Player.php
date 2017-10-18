<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Player
 *
 * @ORM\Table(name="player", indexes={@ORM\Index(name="fk_player_Position1_idx", columns={"position_id"}), @ORM\Index(name="fk_player_user1_idx", columns={"user_id"})})
 * @ORM\Entity
 */
class Player
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="height", type="decimal", precision=3, scale=2, nullable=true)
     */
    private $height;

    /**
     * @var string
     *
     * @ORM\Column(name="weight", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $weight;

    /**
     * @var integer
     *
     * @ORM\Column(name="goals_nbr", type="integer", nullable=true)
     */
    private $goalsNbr;

    /**
     * @var integer
     *
     * @ORM\Column(name="pass_nbr", type="integer", nullable=true)
     */
    private $passNbr;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthdate", type="date", nullable=false)
     */
    private $birthdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="position_id", type="integer", nullable=false)
     */
    private $positionId;



    /**
     * Get the value of User Id
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set the value of User Id
     *
     * @param integer userId
     *
     * @return self
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get the value of Height
     *
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set the value of Height
     *
     * @param string height
     *
     * @return self
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get the value of Weight
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of Weight
     *
     * @param string weight
     *
     * @return self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get the value of Goals Nbr
     *
     * @return integer
     */
    public function getGoalsNbr()
    {
        return $this->goalsNbr;
    }

    /**
     * Set the value of Goals Nbr
     *
     * @param integer goalsNbr
     *
     * @return self
     */
    public function setGoalsNbr($goalsNbr)
    {
        $this->goalsNbr = $goalsNbr;

        return $this;
    }

    /**
     * Get the value of Pass Nbr
     *
     * @return integer
     */
    public function getPassNbr()
    {
        return $this->passNbr;
    }

    /**
     * Set the value of Pass Nbr
     *
     * @param integer passNbr
     *
     * @return self
     */
    public function setPassNbr($passNbr)
    {
        $this->passNbr = $passNbr;

        return $this;
    }

    /**
     * Get the value of Birthdate
     *
     * @return \DateTime
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set the value of Birthdate
     *
     * @param \DateTime birthdate
     *
     * @return self
     */
    public function setBirthdate(\DateTime $birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get the value of Position Id
     *
     * @return integer
     */
    public function getPositionId()
    {
        return $this->positionId;
    }

    /**
     * Set the value of Position Id
     *
     * @param integer positionId
     *
     * @return self
     */
    public function setPositionId($positionId)
    {
        $this->positionId = $positionId;

        return $this;
    }

}
