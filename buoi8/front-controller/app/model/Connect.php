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
?>