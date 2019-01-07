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
          VALUES ('" . $orcamento->getData() . "', '" . $orcamento->getClienteId() . "', '" . $orcamento->getCrianca() . "')";


        $bd->query($sql);
        $id = $bd->insert_id;
        $bd->close();
        return $id;
    }

    public function listar()
    {
        $conexao = new Conexao();
        $bd = $conexao->conectar();

        $sql = "SELECT o.id, c.nome, o.crianca, DATE_FORMAT(o.data,'%d/%m/%Y') AS data, p.produto, po.total
            FROM orcamento AS o 
            INNER JOIN produto_orcamento AS po ON po.orcamento_id = o.id
            INNER JOIN clientes AS c ON c.id = o.cliente_id
            INNER JOIN produtos AS p ON p.id = po.produto_id ";

        $resultados = $bd->query($sql);
        $bd->close();
        return $resultados;
    }
}