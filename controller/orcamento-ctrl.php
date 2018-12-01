<?php
/**
 * Created by PhpStorm.
 * User: Família
 * Date: 28/11/2018
 * Time: 21:51
 */

include '../model/Orcamento.php';
include '../dao/OrcamentoDAO.php';

$dados = file_get_contents("php://input");
$json_decode = json_decode($dados);

//variaveis do orcamento para salvar
//print_r($json_decode);
$cliente_id = $json_decode->clienteId;
$data = $json_decode->data;
$crianca = $json_decode->crianca;

$orcamentoDAO = new OrcamentoDAO();

$orcamento = new Orcamento(null, $cliente_id, $crianca, $data);
$id_orcamento = $orcamentoDAO->cadastrar($orcamento);
echo $id_orcamento;
