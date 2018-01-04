<?php
require_once('namespace1.php');
require_once('folder1/folder2/folder3/namespace2.php');
use folder1\folder2\folder3 as A;

$a = new space1\A;

echo "<br>";
space1\getData();


echo "<br>";
$b = new A\A(2);

echo "<br>";
A\A1();

// echo "<br>";
// n2\A2();
?>