<?php

$errors = array();

if (isset($_POST['reg_user'])) {

    $pdo = new PDO('mysql:host=localhost;dbname=deliciasbraga;charset=utf8' , 'lyon' , '300418');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $username = $_POST['username'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];

    if (empty($username)) {
        array_push($errors, "Digite um nome usuário!");
    }
    if (empty($password_1)) {
        array_push($errors, "Digite uma senha!");
    }
    if (empty($password_2)) {
        array_push($errors, "Confirme sua senha!");
    }
    if ($password_1 != $password_2) {
        array_push($errors, "As duas senhas não coincidem!");
    }

    $usercheck = "SELECT username FROM user WHERE username = '$username' LIMIT 1";
    $result = $pdo->query($usercheck);
    $user = $result->fetch(PDO::FETCH_ASSOC);

    if ($user['username'] === $username) {
        array_push($errors, "Usuário já cadastrado.");
    }

    if (count($errors) == 0) {
        $sql = "INSERT INTO user SET
                username = :username,
                password = :password";
        
        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':username' , $_POST['username']);
        $stmt->bindValue(':password' , $_POST['password_1']);
        $stmt->execute();

        header('location: login.php');
    } 
}  

include __DIR__ . '/templates/registro.html.php';