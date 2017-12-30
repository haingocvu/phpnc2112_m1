<?php

class hocsinh{
    private $name;
    private $id;

    function __construct(){
        echo "class ".get_class($this). ' vừa khởi tạo<br>';
    }

    public function setName($ten){
        $this->name = $ten;
    }

    public function getName(){
        return $this->name;
    }

    public function __destruct(){
        echo "<br>class ".get_class(). ' vừa bị huỷ';
    }
}
class hs extends hocsinh{

    public function hs($gender){
        echo $this->gender = $gender;
        echo "<br>";
        echo "class ".get_class($this). ' vừa khởi tạo<br>';
    }
    public function setAge($age){
        $this->age = $age;
    }

    public function __destruct(){
        
        echo "<br>class ".get_class(). ' vừa bị huỷ';
    }

    function getGender(){
        return $this->gender;
    }
}

// $hs = new hocsinh();
// $hs->setName('Khoa Pham');
// //echo $hs->name;
// echo $hs->getName();

$hs = new hs('Nam');

$hs->setName('KPT');
//echo $hs->getName();

$hs->setAge(12);
echo $hs->age;
echo "<br>";
echo $hs->getGender();





?>