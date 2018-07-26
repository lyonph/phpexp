<?php
session_start();

$error = '';

if (isset($_POST['username'])) {
    $pdo = new PDO('mysql:host=localhost;dbname=deliciasbraga;charset=utf8' , 'lyon' , '300418');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $username = $_POST['username'];
    $password = $_POST['password'];

    $verif = "SELECT username , password FROM user WHERE username = '$username' AND password = '$password'";
    $login = $pdo->query($verif);
    if ($login->fetch() == false) {
        $error = 'Usuário ou senha inválidos';
    }
    else {
        $_SESSION['username'] = $username;
        header('location: admin.php');
    }
}

include __DIR__ . '/templates/login.html.php';