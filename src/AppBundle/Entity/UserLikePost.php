<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserLikePost
 *
 * @ORM\Table(name="user_like_post", indexes={@ORM\Index(name="fk_user_like_has_post_post1_idx", columns={"post_id"}), @ORM\Index(name="fk_user_like_has_post_user_like1_idx", columns={"user_like_id"})})
 * @ORM\Entity
 */
class UserLikePost
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
     * @var \AppBundle\Entity\Post
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Post")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="post_id", referencedColumnName="id")
     * })
     */
    private $post;


}

