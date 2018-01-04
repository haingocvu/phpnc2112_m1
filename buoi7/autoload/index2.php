<?php
// spl_autoload_register(function($className){
//     require_once('libraries/'.$className.'.php');
// });

require_once('libraries/classA.php');
$a = new classA;
echo "<hr>";


$r = $a->getResult();

var_dump($r);



echo "<br>";
$b = new classB;
var_dump($b);