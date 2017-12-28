<?php
// $str = '{
//     "author": "To Huu",
//     "title": "Que Huong",
//     "year": 2000
// }';

// //print_r(json_decode($str,true));

// $arr = [
//     'key1'=>'HTML',
//     'key2'=>'CSS'
// ];
// echo json_encode($arr);


// $json = '["PHP","HTML","CSS",["2","4","6"]]';
// print_r(json_decode($json));
//printf(1232323);

class HS{
    public $name = "KPT";
    public $id;
    function getName(){
        return $this->name;
    }
}

$hs = new HS;
echo json_encode($hs);




?>