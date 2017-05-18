<?php
/**
 * Routing file for Blogging Heroes.
 *
 * @author Edward Mendoza <edcmendoza94@gmail.com>
 * @copyright 2017
 */

 require_once('vendor/autoload.php');
 
 $f3 = Base::instance();
 
 $f3->set('DEBUG', 3);
 $f3->set('loggedIn', false);
 
 $bloggers = new BloggersDB();
 
 $f3->route('GET /', function($f3) {
    $bloggingHeroes = $GLOBALS['bloggers']->showAllBloggers();
    $bloggerNum = 0;
    
    $f3->set('bloggers', $bloggingHeroes);
    $f3->set('bloggerNum', $bloggerNum);
    
    var_dump($bloggingHeroes);
    
    $view = new View;
    echo Template::instance()->render('pages/blogs-home.html');
 });
 
 $f3->run();
?>