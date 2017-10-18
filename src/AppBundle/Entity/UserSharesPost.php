<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserSharesPost
 *
 * @ORM\Table(name="user_shares_post", indexes={@ORM\Index(name="fk_post_has_user_user1_idx", columns={"user_id"}), @ORM\Index(name="fk_post_has_user_post1_idx", columns={"post_id"})})
 * @ORM\Entity
 */
class UserSharesPost
{
    /**
     * @var integer
     *
     * @ORM\Column(name="post_id", type="integer", nullable=false)
     */
    private $postId;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_date", type="datetime", nullable=false)
     */
    private $creationDate;


}

