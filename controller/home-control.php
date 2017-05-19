<?php
class HomeControl
{
    private $_f3;
    private $_params;
    
    public function __construct($f3, $params)
    {
        $this->_f3 = $f3;
        $this->_params = $params;
    }
    
    public function viewHome()
    {
        $db = new BloggersDB();
        
        $bloggers = $db->showAllBloggers();
        $bloggersArr = array();
        
        foreach($bloggers as $blogger) {
            $currentBlogger = new Blogger($blogger['username'], $blogger['email'],
                                          $blogger['password'], $blogger['bio'],
                                          $blogger['num_of_blogs']);
            $bloggersArr[] = $currentBlogger;
        }
        
        //var_dump($bloggersArr);
        
        $numOfBloggers = sizeof($bloggersArr);
        
        $this->_f3->set('bloggers', $bloggersArr);
        $this->_f3->set('numOfBloggers', $numOfBloggers);
        
        echo Template::instance()->render('view/include/side-nav.html');
        echo Template::instance()->render('view/blogs-home.html');
    }
}
?>