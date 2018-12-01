<?php
/**
 * Created by PhpStorm.
 * User: Família
 * Date: 28/11/2018
 * Time: 21:46
 */
include '../conexao/Conexao.php';

class ProdutoOrcamentoDAO
{
    public function cadastrar(ProdutoOrcamento $produtoOrcamento)
    {
        $conexao = new conexao();
        $bd = $conexao->conectar();

        $sql = "INSERT INTO produto_orcamento (produto_id, preco_unitario, qtde, percentual, total, orcamento_id) 
          VALUES ('".$produtoOrcamento->getProdutoId()."', '".$produtoOrcamento->getPrecoUnitario()."', '".$produtoOrcamento->getQtde()."'
          , '".$produtoOrcamento->getPercentual()."', '".$produtoOrcamento->getTotal()."', '".$produtoOrcamento->getOrcamentoId()."' )";


        $bd->query($sql);
        $id = $bd->insert_id;
        $bd->close();
        return $id;
    }
}