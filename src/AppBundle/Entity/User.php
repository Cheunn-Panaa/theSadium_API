<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", indexes={@ORM\Index(name="fk_user_sexe_idx", columns={"sexe_id"})})
 * @ORM\Entity
 */
class User
{
    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255, nullable=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255, nullable=false)
     */
    private $lastname;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthdate", type="date", nullable=true)
     */
    private $birthdate;

    /**
     * @var string
     *
     * @ORM\Column(name="profile_picture", type="string", length=255, nullable=true)
     */
    private $profilePicture;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_date", type="datetime", nullable=false)
     */
    private $creationDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="login_provider", type="string", length=255, nullable=true)
     */
    private $loginProvider;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255, nullable=true)
     */
    private $token;

    /**
     * @var string
     *
     * @ORM\Column(name="private_token", type="string", length=255, nullable=true)
     */
    private $privateToken;

    /**
     * @var string
     *
     * @ORM\Column(name="unique_id", type="string", length=255, nullable=true)
     */
    private $uniqueId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_login", type="datetime", nullable=false)
     */
    private $lastLogin;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Sexe
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Sexe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sexe_id", referencedColumnName="id")
     * })
     */
    private $sexe;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Player", inversedBy="userFollow")
     * @ORM\JoinTable(name="user_follows_player",
     *   joinColumns={
     *     @ORM\JoinColumn(name="user_follow_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="player_follow_id", referencedColumnName="user_id")
     *   }
     * )
     */
    private $playerFollow;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Post", mappedBy="userShare")
     */
    private $postShare;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->playerFollow = new \Doctrine\Common\Collections\ArrayCollection();
        $this->postShare = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

