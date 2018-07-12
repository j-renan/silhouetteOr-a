<?php

// conexão com banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancoDeDados = "silhouette";

$conexao = new mysqli($servidor, $usuario, $senha, $bancoDeDados);

if ($conexao->connect_error) {
    //echo "Conexão Falhou!";
} else {
    //  echo "Conectado com o banco de dados.";
}

?>