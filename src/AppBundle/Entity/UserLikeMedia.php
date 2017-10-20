<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserLikeMedia
 *
 * @ORM\Table(name="user_like_media", indexes={@ORM\Index(name="fk_user_like_has_media_media1_idx", columns={"media_id"}), @ORM\Index(name="fk_user_like_has_media_user_like1_idx", columns={"user_like_id"})})
 * @ORM\Entity
 */
class UserLikeMedia
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
     * @var \AppBundle\Entity\Media
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Media")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="media_id", referencedColumnName="id")
     * })
     */
    private $media;


}

