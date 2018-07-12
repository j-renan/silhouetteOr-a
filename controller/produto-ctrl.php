<?php
include '../model/Produto.php';

$produto_nome = $_POST["produto"];

// tratando a variável ativo
$ativo = false;

if (isset($_POST["ativo"])) {
    $ativo = $_POST["ativo"];
}

// criar um produto
$produto = new Produto();
$produto->setProduto = $produto_nome;
$produto->setAtivo = $ativo;

echo "PRODUTO ".$produto;


