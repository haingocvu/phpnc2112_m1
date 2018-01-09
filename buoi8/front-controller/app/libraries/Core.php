<?php

class Core{
    function __construct(){
        $this->getURL();
    }

    private $controller = "Page";
    private $method = "indexAction";
    private $params = [];

    function getURL(){
        $url = $_GET['url'];
        echo $url;
    }

}


?>