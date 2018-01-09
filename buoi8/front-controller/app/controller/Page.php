<?php

class Page {
    

    function __construct(){
        
    }
    function indexAction(){
        $v = new View;
        return $v->loadView('index', 'KPT');
       
    }

    function editAction($data){
        $v = new View;
        return $v->loadView('edit', $data);
    }
}