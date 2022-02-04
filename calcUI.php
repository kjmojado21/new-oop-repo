<?php 
include 'classes/Calc.php';
$calcObj = new Calc;
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
        <input type="number" name="fnumber" placeholder="first number" id=""> <br>
        <input type="number" name="snumber" placeholder="second number" id=""><br>
        <input type="radio" name="operation" value="add" id="">addition
        <input type="radio" name="operation" value="sub" id="">subtraction
        <input type="radio" name="operation" value="mult" id="">multiplcation
        <input type="radio" name="operation" value="div" id="">division
        <br>
        <button type="submit" name="calculate">Calculate</button>
    </form>
    <br>
    <?php 
        if(isset($_POST['calculate'])){
            $num1 = $_POST['fnumber'];
            $num2 = $_POST['snumber'];
            $operator = $_POST['operation'];

            $calcObj->setValues($num1,$num2,$operator);

            echo "result: ".$calcObj->get_calculation();

           
        }
    ?>
</body>
</html>