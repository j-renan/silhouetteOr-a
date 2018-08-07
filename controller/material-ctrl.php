<?php
include '../model/Material.php';
include '../dao/MaterialDAO.php';

$material = $_POST['material'];
$preco = $_POST['preco'];
$material_id = $_POST['materialId'];
//$material_remover = $_POST["excluirMaterial"];

$materialDAO = new MaterialDAO();

// vereficação se existe id, se existir é atualização, se não existir é inserção de novo produto
if (is_numeric($material_id)) {

    // verefica se é excluir ou atualizar
    if ($material_remover == 1) {
        $material = new Material($material_id, null, null);
        $materialDAO->remover($material);		
    } else {
        $material = new Material($material_id, $material, $preco);
        $materialDAO->atualizar($material);
    }
    
} else { 
    // criar um material
    $material = new Material(null,$material, $preco);
    $materialDAO->cadastrar($material);
}

header("Location: http://localhost/projeto-silhouette-orca/views/material.php");

?>