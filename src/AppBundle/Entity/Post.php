<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="post", indexes={@ORM\Index(name="fk_post_post_type1_idx", columns={"post_type_id"}), @ORM\Index(name="fk_post_user1_idx", columns={"user_id"}), @ORM\Index(name="fk_post_team1_idx", columns={"team_id"})})
 * @ORM\Entity
 */
class Post
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_date", type="datetime", nullable=true)
     */
    private $creationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", length=65535, nullable=false)
     */
    private $content;

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
     * @var integer
     *
     * @ORM\Column(name="post_type_id", type="integer", nullable=true)
     */
    private $postTypeId;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="team_id", type="integer", nullable=true)
     */
    private $teamId;



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
     * Get the value of Title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of Title
     *
     * @param string title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of Creation Date
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set the value of Creation Date
     *
     * @param \DateTime creationDate
     *
     * @return self
     */
    public function setCreationDate(\DateTime $creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get the value of Content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of Content
     *
     * @param string content
     *
     * @return self
     */
    public function setContent($content)
    {
        $this->content = $content;

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
     * Get the value of Post Type Id
     *
     * @return integer
     */
    public function getPostTypeId()
    {
        return $this->postTypeId;
    }

    /**
     * Set the value of Post Type Id
     *
     * @param integer postTypeId
     *
     * @return self
     */
    public function setPostTypeId($postTypeId)
    {
        $this->postTypeId = $postTypeId;

        return $this;
    }

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
     * Get the value of Team Id
     *
     * @return integer
     */
    public function getTeamId()
    {
        return $this->teamId;
    }

    /**
     * Set the value of Team Id
     *
     * @param integer teamId
     *
     * @return self
     */
    public function setTeamId($teamId)
    {
        $this->teamId = $teamId;

        return $this;
    }

}
