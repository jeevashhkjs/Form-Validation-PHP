<?php
require 'connection.php';

$targetId = $_POST['ids'];

try{
    $Datafull = $conn->prepare("SELECT * FROM employees WHERE id = $targetId");
    $Datafull->execute();

    $fetchDatas = $Datafull -> fetchAll(PDO :: FETCH_OBJ);
}catch(Exception $e){
    echo "edit error";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Page</title>
    <link rel="stylesheet" href="./edit.css">
</head>
<body>
    <div class="container">
        <form action="update.php" method="post">
        <?php foreach($fetchDatas as $fetchAll): ?>
            <label>Name</label>
            <input type="text" name="fname" id="fname" class="fname" value = "<?php echo $fetchAll -> name ?>">
            <label>Last Name</label>
            <input type="text" name="lname" id="lname" class="lname" value = "<?php echo $fetchAll -> lastName ?>">
            <label>Email</label>
            <input type="email" name="mail" id="mail" class="mail" value = "<?php echo $fetchAll -> mail ?>">
            <label>Website</label>
            <input type="website" name="web" id="web" class="web" value = "<?php echo $fetchAll -> website ?>">
            <label>Address</label>
            <input name="address" value = "<?php echo $fetchAll -> address ?>">
            <label>Gender</label>
            <input type="radio" name="gender" id="gender" class="gender" value="male">Male
            <input type="radio" name="gender" id="gender" class="gender" value="female">Female
            <input type="radio" name="gender" id="gender" class="gender" value="transgender">Transgender
            <button>Submit</button>
            <input type="text" hidden name="tdid" id="fname" class="fname" value = "<?php echo $fetchAll -> id ?>">

            <?php endforeach; ?>
        </form>
    </div>
    <!-- <script src = "./jas.js"></script> -->
</body>
</html>


