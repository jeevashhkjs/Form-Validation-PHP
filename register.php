<?php

require 'connection.php';

$name = $_POST['fname'];
$lname = $_POST['lname'];
$mail = $_POST['mail'];
$web = $_POST['web'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$UserName = $_POST['UserName'];
echo $UserName;
$Password = $_POST['Password'];

$fnameeror = $_POST['fnameerr'];
$lnameerr = $_POST['lnameerr'];
$mailerr = $_POST['mailerr'];
$weberr = $_POST['weberr'];
$adderr = $_POST['adderr'];

try{
    if($lname == ""){
        $fnameeror = "Please enter your Name";
    }
}catch(PDOException $e){
    echo "error".$e->getMeaasge();
}
try{

    if($name !="" && $lname !="" && $mail !="" && $web !="" && $address !="" && $gender !=""){
        $sql = $conn -> prepare("INSERT INTO employees (name,lastName,mail,website,address,gender,username,passwod) value ('$name','$lname','$mail','$web','$address','$gender','$UserName','$Password')");
        $sql -> execute();
    }
    else{
        echo "Please enter value";
    }
    

}catch(Exception $e){
    echo "Recorded not ok".$e->getMessage();
}

try{

    $fetch = $conn -> prepare("SELECT * FROM employees");
    $fetch -> execute();

    $values = $fetch -> fetchAll(PDO::FETCH_OBJ);
    // header("location:./register.html");

}catch(Exception $e){
    echo "no record found error";
}


// header("location:./fetch.php");
?>