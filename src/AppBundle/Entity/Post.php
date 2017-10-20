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
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\PostType
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\PostType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="post_type_id", referencedColumnName="id")
     * })
     */
    private $postType;

    /**
     * @var \AppBundle\Entity\Team
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Team")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="team_id", referencedColumnName="id")
     * })
     */
    private $team;

    /**
     * @var \AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\User", inversedBy="postShare")
     * @ORM\JoinTable(name="user_shares_post",
     *   joinColumns={
     *     @ORM\JoinColumn(name="post_share_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="user_share_id", referencedColumnName="id")
     *   }
     * )
     */
    private $userShare;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->userShare = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

