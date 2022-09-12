<?php
require 'functions.php';
if($_SESSION['auth'] != true){
    header('Location:auth.php');
}
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
    <form action="functions.php" method="post">
        <textarea name="content" id="" cols="30" rows="10" contenteditable>
            <?php 
            get_post();
            ?>
        </textarea>
        <div class="btns">
            <input type="submit" value="ok" name="action">
            <input type="submit" value="close" name="action">
        </div>
    </form>
</body>
</html>