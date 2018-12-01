<?php
/**
 * Created by PhpStorm.
 * User: Família
 * Date: 28/11/2018
 * Time: 21:46
 */
include '../conexao/Conexao.php';

class MaterialOrcamentoDAO
{
    public function cadastrar(MaterialOrcamento $materialOrcamento)
    {
        $conexao = new conexao();
        $bd = $conexao->conectar();

        $sql = "INSERT INTO material_orcamento (produto_id, material_id, preco_unitario) 
          VALUES ('".$materialOrcamento->getProdutoId()."', '".$materialOrcamento->getMaterialId()."', '".$materialOrcamento->getPrecoUnitario()."')";


        $bd->query($sql);
        $bd->close();
    }
}