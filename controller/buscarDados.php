<?php
/**
 * Created by PhpStorm.
 * User: Família
 * Date: 15/10/2018
 * Time: 21:09
 */
include "../dao/ClienteDAO.php";
include "../dao/ProdutoDAO.php";

$clienteDAO = new ClienteDAO();
$resultados = $clienteDAO->buscarNomeId();
$numeroLinha = $resultados->num_rows;

$listaClientes = [];

for ($i=0; $i < $numeroLinha; $i++) {
    $linha = $resultados->fetch_assoc();
    array_push($listaClientes, $linha);
}

$produtoDao = new ProdutoDAO();
$resultados = $produtoDao->buscarNomeId();
$numeroLinha = $resultados->num_rows;

$listaProdutos = [];

for ($i=0; $i < $numeroLinha; $i++) {
    $linha = $resultados->fetch_assoc();
    array_push($listaProdutos, $linha);
}



?>