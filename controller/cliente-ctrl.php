<?php
include '../model/Cliente.php';
include '../dao/ClienteDAO.php';

$cliente_nome = $_POST["cliente"];
$cliente_id = $_POST["clienteid"];
$cliente_endereco = $_POST["endereco"];
$cliente_cep = $_POST["cep"];
$cliente_cpf = $_POST["cpf"];
$cliente_telefone = $_POST["telefone"];
$cliente_cidade = $_POST["cidade"];
$cliente_email = $_POST["email"];
$cliente_data = $_POST["data_nascimento"];
$cliente_remover = $_POST["excluirCliente"];


// passar cliente para o DAO inserir no banco de dados

$clienteDAO = new ClienteDAO();

// vereficação se existe id, se existir é atualização, se não existir é inserção de novo cliente

if (is_numeric($cliente_id)) {

    // verefica se é excluir ou atualizar
    if ($cliente_remover == 1) {
   
        $cliente = new Cliente($cliente_id, null, null, null, null, null, null, null, null);
        $clienteDAO->remover($cliente);
    } else {
        $cliente = new Cliente($cliente_nome, $cliente_id, $cliente_endereco, $cliente_cep, 
                                $cliente_cpf, $cliente_telefone, $cliente_cidade, $cliente_email,
                                $cliente_data, $cliente_remover);
        $clienteDAO->atualizar($cliente);
    }
} else {
    //criar um cliente
    $cliente = new Cliente(null, $cliente_nome, $cliente_data, $cliente_endereco, $cliente_cpf,                  
                         $cliente_telefone, $cliente_cidade, $cliente_email, $cliente_cep);
    $clienteDAO->cadastrar($cliente); 
}

header("Location: http://localhost/projeto-silhouette-orca/views/cliente.php");

?>