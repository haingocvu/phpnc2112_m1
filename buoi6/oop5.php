<?php
// const pi = 3.14;
// const pi = 3.14;
// echo pi;

// echo "<hr>";

// define('__PI',3.14);
// define('__PI',3.14);
// echo __PI;


// if(1<2){
//     const pi = 3.14;
//     echo pi;
// }

// if(1<2){
//     define('__PI',3.14);
//     echo __PI;
// }

class SinhVien{
    const AGE = 18;
    public $id = 'DH132323';

    function getID($age){
        if($age < self::AGE){
            echo "you not yet anough age";
            return false;
        }
        else
            return $this->id;
    }

    // function resetAge(){ //sai
    //     self::AGE = 1323;
    // }
}

$sv = new SinhVien;
//echo $sv::AGE = 85;

echo $sv->getID(20);


?>