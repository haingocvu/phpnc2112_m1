<?php
require_once('namespace1.php');
require_once('namespace2.php');
use folder1\folder2\folder3 as n2;

$a = new space1\A;

echo "<br>";
space1\getData();


echo "<br>";
$b = new n2\A(2);

echo "<br>";
n2\A1();

echo "<br>";
n2\A2();
?>