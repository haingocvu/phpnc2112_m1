<?php
class Connect{

    private  $db = NULL;
    private $stmt ;

    function __construct(){
        try{
            $this->db = new PDO("mysql:host=localhost;dbname=phpnc2112", 'root','');
            //$this->db = exec("SET NAMES UTF8");
            return $this->db;
        }
        catch(PDOException $e){
            echo "Error!!";
            echo $e->getMessage();
            exit;
        }
    }
    function executeQuery($sql, $params = []){

            $this->stmt = $this->db->prepare($sql);

            //INSERT INTO users(`username`,`password`,address,phone,birthdate)
            //VALUES(?,?,?,?,?)

            if(!empty($params)){
                $count = count($params);
                for($i=1; $i<=$count; $i++){
                    $this->stmt->bindParam($i, $params[$i-1]);
                } 
            }
            return $this->stmt->execute();

        }
        function loadMoreRows($sql, $params = []){
            $this->executeQuery($sql, $params);
            return $this->stmt->fetchAll(PDO::FETCH_OBJ);
        }

        function loadRow($sql, $params = []){
            $this->executeQuery($sql, $params);
            return $this->stmt->fetch(PDO::FETCH_OBJ);
        }
        function rowCount(){
            //return $this->stmt->rowCount();
        }

        function getLastId(){
            return $this->db->lastInsertId();
        }
}

$c = new Connect;
// $sql = "INSERT INTO users(`username`,`password`,address,phone,birthdate)
//         VALUES('admin5','123456', '92 Le thi rieng', '2323232322','2018-1-11')";
// $sql = "INSERT INTO users(`username`,`password`,address,phone,birthdate)
//           VALUES(?,?,?,?,?)";

// $username = "admin6";
// $pw = "123";
// $address  = "123 Ab";
// $phone = '23456';
// $birthdate = "2012-4-2";
// $params = [$username,$pw,$address,$phone,$birthdate];
$sql = "SELECT * FROM users WHERE id=1";
//$c->executeQuery($sql);
$r = $c->loadRow($sql);
var_dump($r);
?>