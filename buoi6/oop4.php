<?php
class SinhVien{
    //same name, function a($a,$b) , function a($a)

    function __call(string $methodName, array $aguments){
        if($methodName == 'a'){
            if(count($aguments) == 1){
                echo "you have an agument<br>";
                return $aguments[0]; //string value 
            }
            else{
                echo "you have more than an agument<br>";
                return $aguments; //array
            }
        }
        return 1213;
    }
}

$sv = new SinhVien;
//$result = $sv->a('1123456');
$result = $sv->a();
var_dump($result);
?>