<?php
abstract class SinhVien{
    protected $name;

    abstract function setName($name);

    function getName(){
        return $this->name;
    }
}

class HocSinh extends SinhVien{
    function setName($name){
        $this->name = $name;
    }
}


$sv = new HocSinh;
$sv->setName('KPT');
echo $sv->getName();
//var_dump($sv);

?>