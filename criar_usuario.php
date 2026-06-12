<?php
require("conexao.php");

if(isset($_POST)) {

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $nascimento = $_POST["nascimento"];
    $senha = $_POST["senha"];
    $genero = $_POST["genero"];
    $observacao = $_POST["observacao"];

    $query = "INSERT INTO usuarios (nome, email, senha, nascimento, genero, observacao
    VALUES ($nome, $email, $senha, $nascimento, $genero, $observacao";

    $stmt = $pdo->prepare($query);
    $stmt->execute();

    header("Location: sucessobd.php?criado=sucesso");
}