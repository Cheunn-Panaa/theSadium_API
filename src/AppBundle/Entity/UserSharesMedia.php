<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserSharesMedia
 *
 * @ORM\Table(name="user_shares_media", indexes={@ORM\Index(name="fk_user_has_media_media2_idx", columns={"media_id"}), @ORM\Index(name="fk_user_has_media_user2_idx", columns={"user_id"})})
 * @ORM\Entity
 */
class UserSharesMedia
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
     * @ORM\Column(name="media_id", type="integer", nullable=false)
     */
    private $mediaId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_date", type="datetime", nullable=false)
     */
    private $creationDate;


}

