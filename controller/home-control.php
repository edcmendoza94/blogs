<?php
class HomeControl
{
    private $_f3;
    
    public function __construct($_f3)
    {
        $this->_f3 = $f3;
    }
    
    public function viewHome()
    {
        $db = new BloggersDB();
        
        $bloggers = $db->getAllBloggers();
        $bloggersArr = array();
        $i = 0;
        
        foreach($bloggers as $blogger) {
            $currentBlogger = new Blogger($blogger['username'], $blogger['email'],
                                          $blogger['password'], $blogger['bio'],
                                          $blogger['num_of_blogs']);
            $bloggersArr[$i] = $currentBlogger;
            
           $i += 1; 
        }
        
        var_dump($bloggersArr);
        
        $this->_f3->set('bloggers', $bloggersArr);
        
        echo Template::instance()->render('view/include/side-nav.html');
        echo Template::instance()->render('view/blogs-home.html');
    }
}
?>