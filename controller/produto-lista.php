<?php
include '../dao/ProdutoDAO.php';

$produtoDAO = new ProdutoDAO();

//buscar lista de produtos
$resultados = $produtoDAO->listar();

$numeroLinhas = $resultados->num_rows;
//echo "numero linhas ".$numeroLinhas;
$listaProdutos = [];

for ($i=0; $i < $numeroLinhas; $i++) {

    $linha = $resultados->fetch_assoc();
    array_push($listaProdutos, $linha);    
}

?>