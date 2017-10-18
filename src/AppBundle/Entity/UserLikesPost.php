<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserLikesPost
 *
 * @ORM\Table(name="user_likes_post", indexes={@ORM\Index(name="fk_user_has_post_post1_idx", columns={"post_id"}), @ORM\Index(name="fk_user_has_post_user1_idx", columns={"user_id"})})
 * @ORM\Entity
 */
class UserLikesPost
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
     * @ORM\Column(name="post_id", type="integer", nullable=false)
     */
    private $postId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_date", type="datetime", nullable=false)
     */
    private $creationDate;


}

