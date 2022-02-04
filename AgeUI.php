<?php 
include 'classes/Age.php';
$ageObj = new Age;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="fname" id=""> <br>
        <input type="text" name="lname" id=""> <br>
        <input type="text" name="byear" id=""> <br>
        <input type="text" name="cyear" id=""> <br>
        <button type="submit" name="generate_age">Submit</button>
    </form>
    <?php 
        if(isset($_POST['generate_age'])){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $byear = $_POST['byear'];
            $cyear = $_POST['cyear'];

            $ageObj->giveValues($fname,$lname,$byear,$cyear);

            echo "name: ".$ageObj->getFirstname();
            echo "<br>";
            echo "lastname: ".$ageObj->getLastName();
            echo "<br>";
            echo "age: ".$ageObj->getAge();
        }
    
    ?>
</body>
</html>