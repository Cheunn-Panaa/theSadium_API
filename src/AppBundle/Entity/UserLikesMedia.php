<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserLikesMedia
 *
 * @ORM\Table(name="user_likes_media", indexes={@ORM\Index(name="fk_user_has_media_media1_idx", columns={"media_id"}), @ORM\Index(name="fk_user_has_media_user1_idx", columns={"user_id"})})
 * @ORM\Entity
 */
class UserLikesMedia
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

