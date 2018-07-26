<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=idk;charset=utf8' ,
        'usuário', 'senha');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $output = 'Conectado a base de dados.';
} catch (PDOException $e) {
    $output = 'Não foi possível conectar a base de dados.';
}

include  __DIR__ . '/../templates/output.html.php';