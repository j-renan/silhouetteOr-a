<?php
/**
 * Created by PhpStorm.
 * User: Família
 * Date: 28/11/2018
 * Time: 21:46
 */
include '../conexao/Conexao.php';

class OrcamentoDAO
{
    public function cadastrar(Orcamento $orcamento)
    {
        $conexao = new conexao();
        $bd = $conexao->conectar();

        $sql = "INSERT INTO orcamento (data, cliente_id, crianca) 
          VALUES ('".$orcamento->getData()."', '".$orcamento->getClienteId()."', '".$orcamento->getCrianca()."')";


        $bd->query($sql);
        $id = $bd->insert_id;
        $bd->close();
        return $id;
    }
}