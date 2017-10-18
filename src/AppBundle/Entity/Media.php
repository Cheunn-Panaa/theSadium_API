<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Media
 *
 * @ORM\Table(name="media", indexes={@ORM\Index(name="fk_media_post1_idx", columns={"post_id"})})
 * @ORM\Entity
 */
class Media
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=false)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var boolean
     *
     * @ORM\Column(name="main_media", type="boolean", nullable=false)
     */
    private $mainMedia;

    /**
     * @var integer
     *
     * @ORM\Column(name="post_id", type="integer", nullable=false)
     */
    private $postId;



    /**
     * Get the value of Id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param integer id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set the value of Path
     *
     * @param string path
     *
     * @return self
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get the value of Title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of Title
     *
     * @param string title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of Main Media
     *
     * @return boolean
     */
    public function getMainMedia()
    {
        return $this->mainMedia;
    }

    /**
     * Set the value of Main Media
     *
     * @param boolean mainMedia
     *
     * @return self
     */
    public function setMainMedia($mainMedia)
    {
        $this->mainMedia = $mainMedia;

        return $this;
    }

    /**
     * Get the value of Post Id
     *
     * @return integer
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * Set the value of Post Id
     *
     * @param integer postId
     *
     * @return self
     */
    public function setPostId($postId)
    {
        $this->postId = $postId;

        return $this;
    }

}
