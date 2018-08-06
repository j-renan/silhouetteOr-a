<?php
include '../model/Material.php';
include '../dao/MaterialDAO.php';

$material = $_POST['material'];
$preco = $_POST['preco'];

$materialDAO = new MaterialDAO();
$material = new Material(null, $material, $preco);			

$materialDAO->cadastrar($material);

header("Location: http://localhost/projeto-silhouette-orca/views/material.php");

?>