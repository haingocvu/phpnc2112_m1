<?php

class Core{

    private $controller = "Page";
    private $method = "indexAction";
    private $params = [];

    function __construct(){
        $url = $this->getURL();
        $class = ucfirst($url[0]) ? $url[0] : $this->controller;
        if(file_exists("../app/controller/$class.php")){
            $this->controller = $class;
            unset($url[0]);
        }
        require_once("../app/controller/$this->controller.php");
        new $this->controller;

        if(isset($url[1]) && method_exists($this->controller,$url[1].'Action')){
            $this->method = $url[1].'Action';
            unset($url[1]);
        }
    
        $this->params = $url ? array_values($url) : [];
        //print_r($this->params);
        call_user_func_array([$this->controller,$this->method],[$this->params]);

    }


    function getURL(){
        $url = $_GET['url'];
        $url = rtrim($url,'/');
        
        $url = explode('/',$url);
        return $url;
    }

}


?>