<?php
//https://github.com/huongnguyen08/php2/blob/master/B%C3%A0i%2017%20-%20K%E1%BA%BFt%20h%E1%BB%A3p%20PDO%20v%C3%A0%20MySQL.pdf

//https://www.w3resource.com/mysql/mysql-tutorials.php

try{
    $db = new PDO("mysql:host=localhost;dbname=phpnc2112", 'root','');
}
catch(PDOException $e){
    echo "Error!!";
    echo $e->getMessage();
    exit;
}
//INSERT
//
// $sql = "INSERT INTO users(`username`,`password`,address,phone,birthdate)
//         VALUES('admin','123456', '92 Le thi rieng', '2323232322','2018-1-11')";
//$check = $db->exec($sql);

// $sql = "INSERT INTO users(`username`,`password`,address,phone,birthdate)
//          VALUES(?,?,?,?,?)";

// $stmt  = $db->prepare($sql);

// $username = "admin2";
// $pw = "123";
// $address  = "123 Ab";
// $phone = '23456';
// $birthdate = "2012-4-2";

// $stmt->bindValue(1,"admin3");
// $stmt->bindParam(2,$pw);
// $stmt->bindParam(3,$address);
// $stmt->bindParam(4,$phone);
// $stmt->bindParam(5,$birthdate);

// $sql = "UPDATE users 
//         SET password = :pw, address=:add
//         WHERE username=:un";

// $stmt = $db->prepare($sql);
// $stmt->bindValue(':pw','0000');
// $stmt->bindValue(':add','123 Le Thanh Ton');
// $stmt->bindValue(':un',"admin");

// $check = $stmt->execute();

// var_dump($check);

$sql = "SELECT * FROM users";
$stmt = $db->prepare($sql);
$check = $stmt->execute();

if($check){
    //$datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //$datas = $stmt->fetchAll(PDO::FETCH_NUM);
    //$datas = $stmt->fetchAll(PDO::FETCH_BOTH);
    $datas = $stmt->fetchAll(PDO::FETCH_OBJ);
    // echo "<pre>";
    // print_r($datas);
    // echo "</pre>";
    // die;
    foreach($datas as $user){
        echo $user->username;
        echo "<br>";
    }
}
else{
    echo "Error!";
}



?>