<?php
session_start();
if($_SESSION['auth'] == true){
    header('Location:admin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
</head>
<body>
    <form action="functions.php" method="POST">
        <input type="text" name="login" id="" placeholder="Логин">
        <input type="text" name="password" id="" placeholder="Пароль">
        <input type="submit" value="Отправить">
    </form>
</body>
</html>