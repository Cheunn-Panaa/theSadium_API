<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserSharePost
 *
 * @ORM\Table(name="user_share_post", indexes={@ORM\Index(name="fk_user_share_has_post_post1_idx", columns={"post_id"}), @ORM\Index(name="fk_user_share_has_post_user_share1_idx", columns={"user_share_id"})})
 * @ORM\Entity
 */
class UserSharePost
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
     * @var \AppBundle\Entity\Post
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Post")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="post_id", referencedColumnName="id")
     * })
     */
    private $post;


}

