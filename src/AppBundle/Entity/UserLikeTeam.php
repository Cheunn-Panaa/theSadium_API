<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserLikeTeam
 *
 * @ORM\Table(name="user_like_team", indexes={@ORM\Index(name="fk_user_like_has_team_team1_idx", columns={"team_id"}), @ORM\Index(name="fk_user_like_has_team_user_like1_idx", columns={"user_like_id"})})
 * @ORM\Entity
 */
class UserLikeTeam
{
    /**
     * @var \AppBundle\Entity\UserLike
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\UserLike")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_like_id", referencedColumnName="id")
     * })
     */
    private $userLike;

    /**
     * @var \AppBundle\Entity\Team
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Team")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="team_id", referencedColumnName="id")
     * })
     */
    private $team;


}

