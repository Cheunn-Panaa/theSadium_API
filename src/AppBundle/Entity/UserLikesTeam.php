<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserLikesTeam
 *
 * @ORM\Table(name="user_likes_team", indexes={@ORM\Index(name="fk_user_has_team_team1_idx", columns={"team_id"}), @ORM\Index(name="fk_user_has_team_user1_idx", columns={"user_id"})})
 * @ORM\Entity
 */
class UserLikesTeam
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="team_id", type="integer", nullable=false)
     */
    private $teamId;


}

