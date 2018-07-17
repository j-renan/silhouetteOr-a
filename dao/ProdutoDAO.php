<?php
include '../conexao/Conexao.php';
class ProdutoDAO {

    public function cadastrar(Produto $produto) {
        $conexao = new Conexao();
        $bd = $conexao->conectar();
       
        $sql = "INSERT INTO produtos (produto,ativo) 
            VALUES ('".$produto->getProduto()."', '".$produto->getAtivo()."')";
        $bd->query($sql); 
        header("Location: http://localhost/projeto-silhouette-orca/views/produto.php");
    }

    //busca a lista de produtos
    public function listar() {
        

    }
}


?>