<?php
require 'config.php';

$nome = filter_input(INPUT_POST, 'nome');
$senha = filter_input(INPUT_POST, 'senha');

if($nome && $senha){
    $sql = "INSERT INTO login(nome, senha) VALUES(:nome, :senha)";
    $sql = $pdo->prepare($sql);
    $sql->bindValue("nome", $nome);
    $sql->bindValue("senha", md5($senha));
    $sql->execute();

    header("Location: index.php");
}else{
    header("Location: adicionar.php");
}
?>
