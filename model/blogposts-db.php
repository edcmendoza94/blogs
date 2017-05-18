<?php
/**
 * Blogging Heroes class file that talks
 * with the database table "BlogPosts"
 *
 * @author Edward Mendoza <edcmendoza94@gmail.com>
 * @copyright 2017
 */

class BlogPosts
{
    private $_pdo;
    
    function __construct()
    {
        require_once("/home/emendoza5/config.php");
        
        try {
            //Open a connection to the database
            $this->_pdo = new PDO(DB_DSN, DB_USER, DB_PASS);
            
            //Keep the connection open
            $this->_pdo->setAttribute( PDO::ATTR_PERSISTENT, true);
                
            //Throw an exception whenever a database error occurs
            $this->_pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
              die( "Error!: " . $e->getMessage());
        }
    }
    
    function addPost($title, $content)
    {
        $insert = "INSERT INTO BlogPosts (title, content)
                   VALUES (:title, :content)";
                   
        $statement = $this->_pdo->prepare($insert);
        
        $statement->bindParam(':title', $title, PDO::PARAM_STR);
        $statement->bindParam(':content', $content, PDO::PARAM_STR);
        
        $statement->execute();
    }
}
?>