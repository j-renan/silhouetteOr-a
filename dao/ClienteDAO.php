<?php
include '../conexao/Conexao.php';
class ClienteDAO {

    public function cadastrar(Cliente $cliente) {
        $conexao = new conexao();
        $bd = $conexao->conectar();

        $sql = "INSERT INTO clientes (nome, endereco, cep, cpf, telefone, cidade, email, data_nascimento)
            VALUES ('".$cliente->getNome()."', '".$cliente->getEndereco()."', '".$cliente->getCep()."', '".$cliente->getCpf()."',
                '".$cliente->getTelefone()."', '".$cliente->getCidade()."', '".$cliente->getEmail()."', '".$cliente->getData()."')";
        
        $bd->query($sql);
        $bd->close();        
    }

    // busca a lista de clientes

    public function listar() {
        $conexao = new conexao();
        $bd = $conexao->conectar();

        $sql = "SELECT * FROM clientes";

        $resultado = $bd->query($sql);
        $bd->close();
        return $resultado;
    }

    // funçao que atualiza um cliente

    public function atualizar(Cliente $cliente) {
        $conexao = new conexao();
        $bd = $conexao->conectar();

        $sql = "UPDATE clientes SET nome='".$cliente->getNome()."', endereco='".$cliente->getEndereco()."',
            cep='".$cliente->getCep()."', cpf='".$cliente->getCpf()."', telefone='".$cliente->getTelefone()."',
            cidade='".$cliente->getCidade()."', email='".$cliente->getEmail()."', data_nascimento='".$cliente->getData()."'
        WHERE id='".$cliente->getId()."'";

        $bd->query($sql);
        $bd->close();
    }

    // funçao que apaga um cliente

    public function remover(Cliente $cliente) {
        $conexao = new conexao();
        $bd = $conexao->conectar();

        $sql = "DELETE FROM clientes WHERE id='".$cliente->getId()."'";
        
        $bd->query($sql);
        $bd->close();

    }
}


?>