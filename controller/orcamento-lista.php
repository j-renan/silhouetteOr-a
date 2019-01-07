<?php
/**
 * Created by PhpStorm.
 * User: Família
 * Date: 07/01/2019
 * Time: 20:26
 */

include '../dao/OrcamentoDAO.php';

$orcamentoDAO = new OrcamentoDAO();

$resultados = $orcamentoDAO->listar();

$numeroLinhas = $resultados->num_rows;

$listaOrcamentos = [];

for ($i=0; $i < $numeroLinhas; $i++) {

    $linha = $resultados->fetch_assoc();
    $idAtual = $linha['id'];
    $produtoAtual = $linha['produto']; // latinha, cofrinho, latinha, caixa

    if ($i == 0){
        array_push($listaOrcamentos, $linha);
    } else if ($i > 0) {

        for ($x=0; $x < count($listaOrcamentos); $x++) {
            $linhaArray = $listaOrcamentos[$x];

            if ($idAtual == $linhaArray['id']) {
                $linhaArray = explode(",", $linhaArray["produto"])[0];

                $listaOrcamentos[$x]["produto"] = $linhaArray . "," . $produtoAtual;
                break;
            } else {
                if (($x + 1) == count($listaOrcamentos)) {
                    array_push($listaOrcamentos, $linha);
                }
            }
        }
    }
}

//print_r($listaOrcamentos);

