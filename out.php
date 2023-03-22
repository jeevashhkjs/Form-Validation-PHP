<?php 
    require 'connection.php';
    $targetId = $_POST['siId'];
try{
    $delte = $conn->prepare("DELETE FROM employees WHERE id = '$targetId'");
    $delte->execute();
}
catch(PDOException $e){
    echo "delete error sign out error".$e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log Out Page</title>
    <link rel="stylesheet" href="./edit.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to my website </h1>
    </div>
</body>
</html>