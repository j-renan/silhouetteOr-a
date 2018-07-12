<?php
include '../model/Produto.php';

$produto_nome = $_POST["produto"];

// tratando a variável ativo
$ativo = false;

if (isset($_POST["ativo"])) {
    $ativo = $_POST["ativo"];
}

// criar um produto
$produto = new Produto($produto_nome, $ativo);

// passar produto para dao inserir no banco de dados

// retornar para página de produtos com mensagem de sucesso no cadastro

// colocar a tabela com os produtos cadastrados




