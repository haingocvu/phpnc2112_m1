<?php

class SinhVien{
    public static $name = "Tèo";

    function setName($name){
        SinhVien::$name = $name;
    }
}

// //$sv1 = new SinhVien;
// SinhVien::setName('Tí');
// echo SinhVien::$name;

// echo "<br>";


// $sv2 = new SinhVien;
// //$sv2->setName('Hoa');
// echo $sv2::$name;



class sv{
    public static $name = "Tèo";
    public  $id = 19876543;
    

    function setData($name,$id){
        self::$name = $name;
        $this->id = $id;
    }
}
class sv2 extends sv{
    public static $name;
    function setName($ten){
        sv2::$name = $ten;
    }
}

$sv2 = new  sv2;
$sv2->setData('Hoa',123456);
$sv2::setName('Lan');

echo $sv2::$name;
echo $sv2->id;

echo "<hr>";

$sv = new sv;
echo $sv::$name;
echo $sv->id;

?>