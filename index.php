<?php
require 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
</head>
<body>
    <p id="text">
    <?php 
        get_post();
    ?>
    </p>
    <a href="admin.php">Войти(логин admin, пароль admin123)</a>
</body>
</html>