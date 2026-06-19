<?php

$usuario = 'root';
$senha = 'Kaio1412';
$dbname = 'gerartxt';
$host = 'localhost';
$port = 3306;

try {
    $pdo = new PDO("mysql:host={$host};port={$port};dbname={$dbname};charset=utf8mb4", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Erro ao conectar ao banco de dados: ' . htmlspecialchars($e->getMessage());
    exit;
}
