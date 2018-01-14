<?php


try{
    $db = new PDO("mysql:host=localhost;dbname=phpnc2112", 'root','');
}
catch(PDOException $e){
    echo "Error!!";
    echo $e->getMessage();
    exit;
}

$sql = "CALL getAllUser()";

$stmt = $db->prepare($sql);
$result = $stmt->execute();
if($result){
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
else{
    echo "err";
}

?>