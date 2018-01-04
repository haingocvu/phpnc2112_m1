<?php

class classA{
    function __construct(){
        echo get_class().' called!';
    }

    static function getData(){
        //return "text";
        require_once('libraries/classB.php');
        // $rs = new classB;
        // return $rs;
    }

    static function getResult(){
        spl_autoload_register(['classA','getData']);
    }
}
?>