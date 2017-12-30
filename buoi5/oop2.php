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

    function setName($name,$id){
        self::$name = $name;
        $this->id = $id;
    }
}
class sv2 extends sv{
    
}

$sv = new  sv;
$sv->setName('Hoa',123456);
echo $sv::$name;
echo $sv->id;
?>