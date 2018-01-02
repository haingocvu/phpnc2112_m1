<?php
interface SinhVien{

    //public $age = 2121;
    function setName();
    function getName();
}

interface SinhVienDH{
    function setName($name);
    function getName();
    function getValue();
}

class HocSinh implements SinhVienDH,SinhVien{
    function setName($name='KPT'){
        return $this->name = $name;
    }

    function getName(){
        return $this->name;
    }
    

    function getValue(){
        echo "234567";
    }

}

$hs = new HocSinh;
$hs->setName('Ti');
var_dump($hs);

?>