<?php
/**
 * Created by PhpStorm.
 * User: Família
 * Date: 28/11/2018
 * Time: 21:51
 */

include '../model/MaterialOrcamento.php';
include '../dao/MaterialOrcamentoDAO.php';

$dados = file_get_contents("php://input");
$json_decode = json_decode($dados);

//variaveis do orcamento para salvar

for ($i=0; $i<count($json_decode);$i++){
    $linha = $json_decode[$i];
    $produto_id = $linha->produtoId;
    $material_id = $linha->materialId;
    $preco_unitario = $linha->preco;

    $materialOrcamento = new MaterialOrcamento(null,$produto_id,$material_id,$preco_unitario);
    $materialOcamentoDao = new MaterialOrcamentoDAO();
    $materialOcamentoDao->cadastrar($materialOrcamento);
}
