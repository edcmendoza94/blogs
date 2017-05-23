<?php
class SignupControl
{
    private $_f3;
    private $_params;
    
    public function __construct($f3, $params)
    {
        $this->_f3 = $f3;
        $this->_params = $params;
    }
    
    public function viewSignup()
    {
        echo Template::instance()->render('view/include/side-nav.html');
        echo Template::instance()->render('view/blogs-signup.html');
    }
}
?>