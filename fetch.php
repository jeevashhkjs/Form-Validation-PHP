<?php
require 'connection.php';

try{
    $allDatas = $conn -> prepare("SELECT * FROM employees");
    $allDatas -> execute();

    $fetchAllDatas = $allDatas -> fetchAll(PDO :: FETCH_OBJ);

}catch(Exception $e){
    echo "insert error";
}


require 'show.html';
