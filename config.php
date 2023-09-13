<?php
session_start();

$db_name = ''; //Coloque entre aspas o nome do banco de dados
$db_host = ''; //Coloque entre aspas o ip do servidor
$db_user = ''; //Coloque entre aspas o usuario do banco de dados
$db_pass = ''; //Coloque entre aspas a senha do banco de dados

global $pdo;

try{
    $pdo = NEW PDO("mysql:dbname=".$db_name.";user = ".$db_host, $db_user, $db_pass);
}catch(Exception $e){
die("Erro: ".$e->getMessage());
}
?>
