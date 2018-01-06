<?php
/*
class A{
    static function getData(){
        static $a = NULL;
        if($a==NULL)
            $a = new A;
        return $a;
    }
}

$a = A::getData();
var_dump($a);

echo "<br>";
$b =A::getData();
var_dump($b);

echo "<br>";

$c = new A();
var_dump($c);
echo "<br>";

$d = $c->getData();
var_dump($d);

// if($a === $d){
//     echo "Bằng nhau";
// }
// else
//     echo "khác nhau";

*/

/*
class A{
    public static $name ;
    
    function __construct(){

        if(!self::$name){
            echo "class ".get_class().' vua khoi tao';
            self::$name = $this;
        }
        else{
            echo "class ".get_class().' da khoi tao';
        }
        return self::$name;
    }
}

$a = new A;
echo "<br>";
$b = new A;

*/

class A{
    public static $name ;
    private function __construct(){
        echo 'Class '.get_class().' duoc khoi tao';
    }

    static function getData(){
        if(!self::$name){
            echo "class ".get_class().' vua khoi tao';
            self::$name = new A;
        }
        else{
            echo "class ".get_class().' da khoi tao';
        }
        return self::$name;
    }
}

$a = A::getData();


?>