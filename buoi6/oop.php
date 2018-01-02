<?php
abstract class SinhVien{
    protected $name;

    abstract function setName($name);
    abstract function setAge();

    function getName(){
        return $this->name;
    }
}
class HocSinh extends SinhVien{
    function setName($name){
        $this->name = $name;
    }
    function setAge($age = 12){
        return $this->age = $age;
    }

    
}


$sv = new HocSinh;
//$sv->age = 12;
$sv->setAge(765);
echo $sv->age;
$sv->setName('KPT');
echo $sv->getName();
//var_dump($sv);

?>