<?php
require 'connection.php';

$ids = $_POST['ids'];
echo $ids;

try{
    $delte = $conn->prepare("DELETE FROM employees WHERE id = $ids");
    $delte->execute();
    header("location:./fetch.php");
}catch(Exception $e){
    echo "delete error";
}

?>