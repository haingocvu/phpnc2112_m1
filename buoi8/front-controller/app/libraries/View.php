<?php
class View{
    function loadView($view,$data = []){
        require_once('../app/views/layout.php');
    }
}