<?php
$produto = $_POST["produto"];

// tratando a variável ativo
$ativo = false;

if (isset($_POST["ativo"])) {
    $ativo = $_POST["ativo"];
}

