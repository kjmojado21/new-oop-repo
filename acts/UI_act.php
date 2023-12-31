<!doctype html>
<?php 
include 'Person_act.php';


?>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="card w-50 mx-auto">
            <div class="card-header">
                DETERMINE AGE APP v1.0
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <input type="text" name="fname" id="" placeholder="FIRSTNAME" class="form-control mt-3">
                    <input type="text" name="lname" id="" placeholder="LASTNAME" class="form-control mt-3">
                    <input type="number" name="birthyear" id="" placeholder="BIRTH YEAR" class="form-control mt-3">
                    <input type="number" name="current_year" id="" placeholder="CURRENT YEAR" class="form-control mt-3">

                    <button type="submit" name="submit" class="btn btn-outline-primary mt-3">submit</button>
                </form>


                <?php
                if (isset($_POST['submit'])) {
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $birthyear = $_POST['birthyear'];
                    $current_year = $_POST['current_year'];
                    $personObj = new Person($fname,$lname,$birthyear,$current_year);

                    echo "<div class='alert alert-success mt-3'>The name is: ".$personObj->getName()." </div>";
                    echo "<div class='alert alert-success mt-3'>The lastname is: ".$personObj->getLastName()." </div>";
                    echo "<div class='alert alert-success mt-3'>The age is: ".$personObj->calculateAge()." </div>";


                }

                ?>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>