<?php
/**
 * Created by PhpStorm.
 * User: Família
 * Date: 15/10/2018
 * Time: 21:09
 */
include "../conexao/Conexao.php";

$conexao = new conexao();
$bd = $conexao->conectar();

function buscarProdutos($bd) {
	$sqlProdutos = "SELECT id, produto FROM produtos";
	$resultadoProdutos = $bd->query($sqlProdutos);
	
	$numeroLinha = $resultadoProdutos->num_rows;

	$listaProdutos = [];

	for ($i=0; $i < $numeroLinha; $i++) {
		$linha = $resultadoProdutos->fetch_assoc();
		array_push($listaProdutos, $linha);
	}

	return $listaProdutos;	
}

// função que busca o id e nome do cliente

function buscarClientes($bd) {
	$sqlClientes = "SELECT id, nome FROM clientes";
	$resultadoClientes = $bd->query($sqlClientes);
	$numeroLinha = $resultadoClientes->num_rows;
	$listaClientes = [];

	for ($i=0; $i < $numeroLinha; $i++) {
		$linha = $resultadoClientes->fetch_assoc();
		array_push($listaClientes, $linha);
	}

	return $listaClientes;
}

$listaProdutos = buscarProdutos($bd);
$listaClientes = buscarClientes($bd);

$bd->close();








?>