<?php 
include 'classes/Person.php';

$object = new Person;


// $object->setValues('Kyrson','22','USA');

// echo $object->getName();
// // echo $object->age; not working since its private
//     echo "<br>";
// echo $object->getAge();
// echo "<br>";
// echo $object->getlocation();

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
            <input type="text" name="person_name" placeholder="Fullname" id="">
            <br>
            <input type="text" name="person_age" placeholder="Age" id="">
            <br>
            <input type="text" name="person_location" placeholder="Location" id="">

            <br>
            <button type="submit" name="submit">Submit</button>
    </form>
    <?php 
        if(isset($_POST['submit'])){
            $person_name = $_POST['person_name'];
            $person_age = $_POST['person_age'];
            $person_loc = $_POST['person_location'];

            $object->setValues($person_name,$person_age,$person_loc);

            echo "Name: ".$object->getName();
            echo "<br>";
            echo "Age: ".$object->getAge();
            echo "<br>";
            echo "Location: ".$object->getlocation();


        }
    
    
    ?>
</body>
</html>