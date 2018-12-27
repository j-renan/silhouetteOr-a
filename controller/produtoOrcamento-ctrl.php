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

for ($i=0; $i<count($json_decode); $i++) {
    $linha = $json_decode[$i];

    $produto_id = $linha->produtoId;
    $precoUnitario = $linha->preco;
    $qtde = $linha->qtde;
    $percentual = $linha->percentual;
    $total = $linha->total;
    $orcamentoId = $linha->orcamentoId;

    $produtoOrcamentoDAO = new ProdutoOrcamentoDAO();

    $produtoOrcamento = new ProdutoOrcamento(null,$produto_id,$precoUnitario,$qtde,$percentual,$total,$orcamentoId);
    $produtoOrcamentoDAO->cadastrar($produtoOrcamento);

}
