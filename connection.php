<?php 

try{
    $conn = new PDO("mysql:host=localhost;dbname=employersDetails", "root", "jeeva143");
}catch(Exception $e){
    echo "connection error".$e.getmessage();
}

?>