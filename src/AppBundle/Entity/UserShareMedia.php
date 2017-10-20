<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserShareMedia
 *
 * @ORM\Table(name="user_share_media", indexes={@ORM\Index(name="fk_user_share_has_media_media1_idx", columns={"media_id"}), @ORM\Index(name="fk_user_share_has_media_user_share1_idx", columns={"user_share_id"})})
 * @ORM\Entity
 */
class UserShareMedia
{
    /**
     * @var \AppBundle\Entity\UserShare
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\UserShare")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_share_id", referencedColumnName="id")
     * })
     */
    private $userShare;

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

