<?php
session_start();
require_once 'rbphp/rb.php';
R::setup( 'mysql:host=localhost;dbname=task','root', '', false);
if(!R::testConnection()) die('No DB connection!');

function login_in($login,$password){
    $user = R::load('user', 1);

    $auth_password = $password;
    $auth_login = $login;

    $bd_password = $user->password;
    $bd_login = $user->login;

    if(md5($auth_password) == $bd_password && $auth_login == $bd_login){
        $_SESSION['auth'] = true;
        header('Location:admin.php');
    }else{
        echo 'Неверный логин или пароль';
        
    }
}

function get_post(){
    $post = R::load('post', 1);

    $content = $post->content;

    echo $content;
}

function change_post($content){
    $post = R::load('post', 1);

    $post->content = $content;

    R::store($post);
}

if(!empty($_POST['login'])){
    login_in($_POST['login'], $_POST['password']);
}
if($_POST['action'] == 'close'){
    $_SESSION['auth'] = false;
    header('Location:auth.php'); 
}
if($_POST['action'] == 'ok'){
    $content =  $_POST['content'];

    change_post($content);

    header('Location:admin.php'); 
}
