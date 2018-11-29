<?php
/**
 * Created by PhpStorm.
 * User: Família
 * Date: 28/11/2018
 * Time: 21:51
 */

include '../model/Orcamento.php';
include '../dao/OrcamentoDAO.php';

// variaveis do orcamento para salvar
$cliente_id = $_POST["clienteId"];
echo $cliente_id;

$orcamentoDAO = new OrcamentoDAO();

$orcamento = new Orcamento(null, 1, "lula", "2018-11-28");
$orcamentoDAO->cadastrar($orcamento);