<?php

class Usuario {

    public function login($nome, $senha){
        $pdo = new PDO('mysql:host=localhost;dbname=7k', 'root', '');
        $sql = "SELECT * FROM bd_registro WHERE nome = :nome AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("nome", $nome);
        $sql->bindValue("senha", $senha);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $dado = $sql->fetch();
        }
    }
}

?>