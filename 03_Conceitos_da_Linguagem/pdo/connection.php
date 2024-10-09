<?php
/*$dsn      = 'mysql:host=127.0.0.1;dbname=meu_banco';
$user     = 'usuario';
$password = '123';

$pdo = new PDO($dsn, $user, $password);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*/
$dsn = 'mysql:host=mysql;dbname=meu_banco';
$user = 'usuario';
$password = '123';

try {
    $pdo = new PDO($dsn, $user, $password);
    echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
