<?php 
 include 'Bookarray.php';

 $obj = new Book;
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
        <input type="text" name="len" id="" class="form-control">
        <button type="submit" name="submit">Save</button>
    </form>
    <?php if (isset($_POST['submit'])) :  ?>
        <?php $len = $_POST['len']  ?>

        <form action="" method="post">
            <?php for ($x = 1; $x <= $len; $x++) :  ?>
                Author name: 
                <input type="text" name="author[]" id="">
                Book Title: 
                <input type="text" name="title[]" id="">
                <br>
            <?php endfor;  ?>
            <br>
            <button type="submit" name="save">Save</button>
        </form>
    <?php endif; ?>

    <?php if(isset($_POST['save'])):  ?>
            <?php 
                $author = $_POST['author'];
                $title = $_POST['title'];
                $obj->setData($author,$title)  ;
                
                
                $obj->generateResult();
            ?>
    <?php endif;  ?>

    



</body>

</html>