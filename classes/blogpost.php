<?php
/**
 * Representation of a post on Blogging
 * Heroes. Simply has a title and body
 * content.
 *
 * @author Edward Mendoza <edcmendoza94@gmail.com>
 * @copyright 2017
 */
class BlogPost
{
    //Class fields
    protected $title;
    protected $content;
    protected $author;
    
    /**
     * Class constructor
     *
     * @param string $title - A post's name
     * @param string $content - The main part
     * of a post
     */
    function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }
    
    /**
     * Assign the name of a post
     *
     * @param string $title
     */
    function setTitle($title)
    {
        $this->title = $title;
    }
    
    /**
     * Assign the text of a post
     *
     * @param string $content
     */
    function setContent($content)
    {
        $this->content = $content;
    }
    
    /**
     * Assign an author to a post
     *
     * @param int $author - A blogger's
     * ID
     */
    function setAuthor($author)
    {
        $this->author = $author;
    }
    
    /**
     * Retrieve the name of a post
     *
     * @return string
     */
    function getTitle()
    {
        return $this->title;
    }
    
    /**
     * Retrieve the text of a post
     *
     * @return string
     */
    function getContent()
    {
        return $this->content;
    }
    
    /**
     * Retrieve the author of a post
     *
     * @return int
     */
    
    function getAuthor()
    {
        return $this->author;
    }
}
?>