<?php
include '../conexao/Conexao.php';
class ProdutoDAO {

    public function cadastrar(Produto $produto) {
        $conexao = new Conexao();
        $bd = $conexao->conectar();
       
        $sql = "INSERT INTO produtos (produto,ativo) 
            VALUES ('".$produto->getProduto()."', '".$produto->getAtivo()."')";

        $bd->query($sql); 
        $bd->close();
    }

    //busca a lista de produtos
    public function listar() {
        $conexao = new Conexao();
        $bd = $conexao->conectar();

        $sql = "SELECT * FROM produtos";

        $resultados = $bd->query($sql);
        $bd->close();
        return $resultados;
    }

    //função que atualiza um produto
    public function atualizar(Produto $produto) {
        $conexao = new Conexao();
        $bd = $conexao->conectar();
       
        $sql = "UPDATE produtos SET produto='".$produto->getProduto()."' WHERE id='".$produto->getId()."'";
       
        $bd->query($sql); 
        $bd->close();
    }
}


?>