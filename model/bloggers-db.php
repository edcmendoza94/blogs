<?php
/**
 * Blogging Heroes class file that talks
 * with the database table "Bloggers"
 *
 * @author Edward Mendoza <edcmendoza94@gmail.com>
 * @copyright 2017
 */

 class BloggersDB
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
    
    function addBlogger($username, $email, $password,
                        $filePath, $bio)
    {
        $insert = "INSERT INTO Bloggers (username, email, password, file_path, bio)
                   VALUES (:username, :email, :password, :file_path, :bio)";
        
        $statement = $this->_pdo->prepare($insert);
        
        $statement->bindParam(':username', $username, PDO::PARAM_STR);
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->bindParam(':password', $password, PDO::PARAM_STR);
        $statement->bindParam(':file_path', $filePath, PDO::PARAM_STR);
        $statement->bindParam(':bio', $bio, PDO::PARAM_STR);
        
        $statement->execute();
    }
    
    function showAllBloggers()
    {
        $select = "SELECT username, email, password,
                   bio, num_of_blogs FROM Bloggers";
        
        $statement = $this->_pdo->prepare($select);
        
        $statement->execute();
        
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        return $result;
    }
 }
?>