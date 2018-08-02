<?php
include '../dao/MaterialDAO.php';

$materialDAO = new MaterialDAO();

//buscar lista de materiais
$resultados = $materialDAO->listar();

$numeroLinhas = $resultados->num_rows;

$listaMateriais = [];

for ($i=0; $i < $numeroLinhas; $i++) {

    $linha = $resultados->fetch_assoc();
    array_push($listaMateriais, $linha);    
}

?>