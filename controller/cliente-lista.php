<?php
include "../dao/ClienteDAO.php";

$clienteDAO = new ClienteDAO();

//buscar lista de cliente
$resultados  = $clienteDAO->listar();

$numeroLinhas = $resultados->num_rows;

$listaClientes = [];

for ($i=0; $i < $numeroLinhas; $i++) {

    $linha = $resultados->fetch_assoc();
    array_push($listaClientes, $linha);    
}

?>