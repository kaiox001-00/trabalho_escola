<?php

$usuario = 'root'; 
$senha = 'Kaio1412'; // Certifique-se de que esta é a senha correta do seu MySQL
$dbname = 'gerartxt'; 
$host = 'localhost';
$port = 3306; // Altere para 3307 se o seu MySQL Workbench usar essa porta

try {
    $pdo = new PDO("mysql:host={$host};port={$port};dbname={$dbname};charset=utf8mb4", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Erro ao conectar ao banco de dados: ' . htmlspecialchars($e->getMessage());
    exit;
}