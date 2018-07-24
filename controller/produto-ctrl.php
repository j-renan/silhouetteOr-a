<?php
include '../model/Produto.php';
include '../dao/ProdutoDAO.php';

$produto_nome = $_POST["produto"];
$produto_id =$_POST["produtoId"];

// tratando a variável ativo
$ativo = 0;

if (isset($_POST["ativo"])) {
    $ativo = 1;
}

// passar produto para dao inserir no banco de dados
$produtoDAO = new ProdutoDAO();

// vereficação se existe id, se existir é atualização, se não existir é inserção de novo produto
if (is_numeric($produto_id)) {
    $produto = new Produto($produto_id, $produto_nome, $ativo);
    $produtoDAO->atualizar($produto);
} else { 
    // criar um produto
    $produto = new Produto(null,$produto_nome, $ativo);
    $produtoDAO->cadastrar($produto);
}

header("Location: http://localhost/projeto-silhouette-orca/views/produto.php");



