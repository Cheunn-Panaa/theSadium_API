<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\User;

/**
 * Player
 *
 * @ORM\Table(name="player", indexes={@ORM\Index(name="fk_player_Position1_idx", columns={"position_id"}), @ORM\Index(name="fk_player_user1_idx", columns={"user_id"})})
 * @ORM\Entity
 */
class Player extends User
{
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
     * @var \AppBundle\Entity\User
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \AppBundle\Entity\Position
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Position")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="position_id", referencedColumnName="id")
     * })
     */
    private $position;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\User", mappedBy="playerFollow")
     */
    private $userFollow;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->userFollow = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
