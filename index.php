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
 
 $f3->route('GET /', function($f3, $params) { 
    $control = new HomeControl($f3, $params);
    $control->viewHome();
 });
 
 $f3->route('GET /about', function($f3, $params) {
    $control = new AboutControl($f3, $params);
    $control->viewAbout();
 });
 
 $f3->run();
?>