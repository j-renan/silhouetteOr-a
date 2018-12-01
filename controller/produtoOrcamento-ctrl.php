<?php
/**
 * Created by PhpStorm.
 * User: Família
 * Date: 28/11/2018
 * Time: 21:51
 */

include '../model/ProdutoOrcamento.php';
include '../dao/ProdutoOrcamentoDAO.php';

$dados = file_get_contents("php://input");
$json_decode = json_decode($dados);

//variaveis do orcamento para salvar

$produto_id = $json_decode->produtoId;
$precoUnitario = $json_decode->precoUnitario;
$qtde = $json_decode->qtde;
$percentual = $json_decode->percentual;
$total = $json_decode->total;
$orcamentoId = $json_decode->orcamentoId;

$produtoOrcamentoDAO = new ProdutoOrcamentoDAO();

$produtoOrcamento = new ProdutoOrcamento(null,$produto_id,$precoUnitario,$qtde,$percentual,$total,$orcamentoId);
$produtoOrcamentoDAO->cadastrar($produtoOrcamento);

