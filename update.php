<?php

require 'connection.php';

$name = $_POST['fname'];
$lname = $_POST['lname'];
$mail = $_POST['mail'];
$web = $_POST['web'];
$address = $_POST['address'];
$gender = $_POST['gender'];

$tgid = $_POST['tdid'];

try{
    if($name !="" && $lname !="" && $mail !="" && $web !="" && $address !="" && $gender !=""){
        $sql = $conn -> prepare("UPDATE `employees` SET `name` = '$name', `lastName` = '$lname', `mail` = '$mail', `website` = '$web', `address` = '$address', `gender` = '$gender' WHERE `employees`.`id` = $tgid;");
        $sql -> execute();
        header("location:./fetch.php");
    }
}catch(Exception $e){
    echo "Recorded not ok";
}