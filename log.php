<?php
    require 'connection.php';
 $user = $_POST['userInput'];
 echo $user;
 $pasd = $_POST['pasd'];
 echo  $pasd;

 try{
    $check = $conn -> prepare("SELECT * FROM employees where username =  $user and passwod = $pasd ");
    $check -> execute();

    $fetchAllDatas = $check -> fetchAll(PDO :: FETCH_OBJ);

    print_r($fetchAllDatas);
    // if($check){
    //     echo "You have id";
    // }else{
    //     echo "Sryy you have no id";
    // }
 }
 catch(Exception $e){
    echo "no user".$e->getMessage();
 }




?>