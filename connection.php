<?php 

try{
    $conn = new PDO("mysql:host=localhost;dbname=employersDetails", "root", "welcome");
}catch(Exception $e){
    echo "connection error".$e.getmessage();
}

?>