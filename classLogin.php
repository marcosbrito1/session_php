<?php

class userLogin{

    public function logar($nome, $senha){
        global $pdo;

        $sql = "SELECT * FROM login WHERE nome = :nome AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("nome", $nome);
        $sql->bindValue("senha", $senha);
        $sql->execute();

        if($sql->rowCount() > 0){
$info = $sql->fetch();
$_SESSION['logado'] = $info['nome'];
return true;
        }else{
            return false;
        }
    }

    public function sair(){
        session_destroy();
        header("Location:index.php");
        exit;
    }
}

?>