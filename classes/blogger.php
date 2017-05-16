<?php
/**
 * Representation of a Blogging Heroes
 * user.Users will have a username, e-mail
 * address, password, biography, and number
 * of blogs posted.
 *
 * @author Edward Mendoza <edcmendoza94@gmail.com>
 * @copyright 2017
 */
class Blogger
{
    //Class fields
    protected $username;
    protected $email;
    private $_password;
    protected $bio;
    protected $numOfBlogs;
    
    /**
     * Class constructor
     *
     * @param string $username - Handle a user
     * will be identified as on the site.
     * @param string $email - User's e-mail
     * address.
     * @param string $password - User's password.
     * Should only be known by the user themselves
     * and the website administrator(s).
     * @param string bio - User's self description.
     * @param int numOfBlogs - Number of blogs
     * user has posted. This will default to 0 for
     * new users.
     */
    function __construct($username, $email,
                         $_password, $bio,
                         $numOfBlogs)
    {
        $this->username = $username;
        $this->email = $email;
        $this->_password = $password;
        $this->bio = $bio;
        $this->numOfBlogs = 0;
    }
    
    /**
     * Assign the user's username.
     *
     * @param string $username
     */
    function setUsername($username)
    {
        $this->username = $username;
    }
    
    /**
     * Assign the user's e-mail address.
     *
     * @param string $email
     */
    function setEmail($email)
    {
        $this->email = $email;
    }
    
    /**
     * Assign the user's password.
     *
     * @param string $password
     */
    function setPassword($password)
    {
        $this->_password = $password;
    }
    
    /**
     * Assign the user's biography.
     *
     * @param string $bio
     */
    function setBio($bio)
    {
        $this->bio = $bio;
    }
    
    
    /**
     * Retrieve the user's username.
     *
     * @return string
     */
    function getUsername()
    {
        return $this->username;
    }
    
    /**
     * Retrieve the user's e-mail
     * address.
     *
     * @return string
     */
    function getEmail()
    {
        return $this->email;
    }
    
    /**
     * Return the user's password.
     */
    function getPassword()
    {
        return $this->_password;
    }
    
    /**
     * Return the user's biography.
     *
     * @return string
     */
    function getBio()
    {
        return $this->bio;
    }
    
    /**
     * Return the number of blogs
     * the user has posted.
     */
    function getNumOfBlogs()
    {
        return $this->numOfBlogs;
    }
}
?>