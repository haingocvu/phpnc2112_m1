<?php

// namespace index;

// echo __DIR__;
// echo "<br>";
// echo __FILE__;

// echo "<br>";
// echo __NAMESPACE__;

// require_once('libraries/classA.php');
// require_once('libraries/classB.php');

spl_autoload_register(function($className){
    require_once('libraries/'.$className.'.php');
});

$a = new classA;
echo "<br>";
$b = new classB;

echo "<br>";
$c = new classC;

