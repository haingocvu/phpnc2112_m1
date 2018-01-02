<?php
//overriding ghi đè

class SinhVien{
    function getData(){
        return 'Hello world';
    }
}

class sv extends SinhVien{
    function getData(){
        return 2323;
    }

    // function getData($name){
    //     return $name;
    // }

}
$sv = new sv;
echo $sv->getData(); //2323




?>