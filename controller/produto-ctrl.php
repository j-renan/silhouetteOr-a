<?php
include '../model/Produto.php';
include '../dao/ProdutoDAO.php';
include '../helper/Helper.php';

$produto_nome = $_POST["produto"];

// tratando a variável ativo
$ativo = 0;

if (isset($_POST["ativo"])) {
    $ativo = 1;
}

// criar um produto
$produto = new Produto($produto_nome, $ativo);

// passar produto para dao inserir no banco de dados
$produtoDAO = new ProdutoDAO();
$produtoDAO->cadastrar($produto);

header("Location: http://localhost/projeto-silhouette-orca/views/produto.php");

//imprimir mensagem de produto cadastrado

