<?php

namespace AppBundle\Entity;

/**
 * Publication
 */
class Publication
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $author;
   

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $content;

    /**
     * @var \DateTime
     */
    private $publishedAt;

    /**
     * @var bool
     */
    private $validated;

    /**
     * @var Science
     */
    private $science;

    /**
     * @var Comment
     */
    private $comment;

    /**
     * Set comment
     *
     * @param Comment $comment
     *
     * @return Publication
     */
    public function setComment(Comment $comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return Comment
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set author
     *
     * @param Author $author
     *
     * @return string
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Publication
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set science
     *
     * @param string $science
     *
     * @return Publication
     */
    public function setScience($science)
    {
        $this->science = $science;

        return $this;
    }

    /**
     * Get acience
     *
     * @return string
     */
    public function getScience()
    {
        return $this->science;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Publication
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Publication
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set publishedAt
     *
     * @param \DateTime $publishedAt
     *
     * @return Publication
     */
    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;

        return $this;
    }

    /**
     * Get publishedAt
     *
     * @return \DateTime
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    /**
     * Set validated
     *
     * @param boolean $validated
     *
     * @return Publication
     */
    public function setValidated($validated)
    {
        $this->validated = $validated;

        return $this;
    }

    /**
     * Get validated
     *
     * @return bool
     */
    public function getValidated()
    {
        return $this->validated;
    }
}

