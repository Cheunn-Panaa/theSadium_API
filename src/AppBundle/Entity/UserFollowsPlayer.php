<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserFollowsPlayer
 *
 * @ORM\Table(name="user_follows_player", indexes={@ORM\Index(name="fk_user_has_player_player1_idx", columns={"player_user_id"}), @ORM\Index(name="fk_user_has_player_user1_idx", columns={"user_id"})})
 * @ORM\Entity
 */
class UserFollowsPlayer
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
     * @ORM\Column(name="player_user_id", type="integer", nullable=false)
     */
    private $playerUserId;


}

