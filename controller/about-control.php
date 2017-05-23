<?php
class AboutControl
{
    private $_f3;
    private $_params;
    
    public function __construct($f3, $params)
    {
        $this->_f3 = $f3;
        $this->_params = $params;
    }
    
    public function viewAbout()
    {
        $view = new View;
        
        echo Template::instance()->render('view/include/side-nav.html');
        echo $view->render('view/blogs-about.html');
    }
}
?>