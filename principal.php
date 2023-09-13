<?php
require 'config.php';
require 'classLogin.php';

if(!isset($_SESSION['logado'])){
   header("Location:index.php");
}

$sql = $pdo->query("SELECT * FROM login");
if($sql->rowCount()>0){
$lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body id="bodyUsuario">

<nav id="menu">
    <ul>
        <li><a href="logout.php">Sair</a></li>
</ul>
</nav>

    <div class="principal">
        <table border="1" width="100%">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Senha</th>
</tr>
<?php foreach ($lista as $dado): ?>
    <tr>
        <td><?=$dado['id'];?></td>
        <td><?=$dado['nome'];?></td>
        <td><?=$dado['senha'];?></td>
</tr>
<?php endforeach; ?>



    </div>
</body>
</html>
