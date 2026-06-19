<?php

$usuario = 'root'; // Ajuste o usuário se necessário
$senha = 'Kaio1412';       // Deixe vazio '' se for XAMPP, ou coloque a senha do Workbench
$dbname = 'gerartxt';
$host = 'localhost';

// Mude aqui se o seu Workbench estiver mostrando 3307 por exemplo:
$port = 3306;

try {
    $pdo = new PDO("mysql:host={$host};port={$port};dbname={$dbname};charset=utf8mb4", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Erro ao conectar ao banco de dados: ' . htmlspecialchars($e->getMessage());
    exit;
}
