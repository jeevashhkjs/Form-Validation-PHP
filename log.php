<?php
    require 'connection.php';
 $user = $_POST['userInput'];
 echo $user;
 $pasd = $_POST['pasd'];
 echo  $pasd;

 try{
    $check = $conn -> prepare("SELECT * FROM employees where username =  '$user' and passwod = '$pasd' ");
    $check -> execute();

    $fetchAllDatas = $check -> fetchAll(PDO :: FETCH_OBJ);

   if($fetchAllDatas == []){
      echo "you have no account";
   }
   else{
      echo "you have a account";
   }
 }
 catch(Exception $e){
    echo "no user".$e->getMessage();
 }




?>