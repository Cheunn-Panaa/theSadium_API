<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TeamHasUser
 *
 * @ORM\Table(name="team_has_user", indexes={@ORM\Index(name="fk_team_has_user_user1_idx", columns={"user_id"}), @ORM\Index(name="fk_team_has_user_team1_idx", columns={"team_id"}), @ORM\Index(name="fk_team_has_user_status1_idx", columns={"status_id"})})
 * @ORM\Entity
 */
class TeamHasUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="team_id", type="integer", nullable=false)
     */
    private $teamId;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="date", nullable=false)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="date", nullable=true)
     */
    private $endDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="status_id", type="integer", nullable=false)
     */
    private $statusId;


}

