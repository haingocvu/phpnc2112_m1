<?php

class User{

    // function __construct(){
    //     echo __METHOD__;
    // }

    function indexAction(){
        echo __METHOD__;
    }

    function editAction($id){
        echo 232;
        print_r($id);
       // echo __METHOD__;
    }

    function deleteAction($id){
        print_r($id);
       // echo __METHOD__;
    }
}

?>