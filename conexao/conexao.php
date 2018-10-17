<?php

class Conexao {
    public function conectar() {
        // conexão com banco de dados
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $bancoDeDados = "silhouette";

        $conexao = new mysqli($servidor, $usuario, $senha, $bancoDeDados);
        return $conexao;
    }

}



?>