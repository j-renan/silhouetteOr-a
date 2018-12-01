<?php
/**
 * Created by PhpStorm.
 * User: Família
 * Date: 01/12/2018
 * Time: 14:49
 */

class ProdutoOrcamento{
    private $id;
    private $produto_id;
    private $preco_unitario;
    private $qtde;
    private $percentual;
    private $total;
    private $orcamento_id;

    public function ProdutoOrcamento($id, $produto_id, $preco_unitario, $qtde, $percentual, $total, $orcamento_id){
        $this->id = $id;
        $this->produto_id = $produto_id;
        $this->preco_unitario = $preco_unitario;
        $this->qtde = $qtde;
        $this->percentual = $percentual;
        $this->total = $total;
        $this->orcamento_id = $orcamento_id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getProdutoId()
    {
        return $this->produto_id;
    }

    /**
     * @return mixed
     */
    public function getPrecoUnitario()
    {
        return $this->preco_unitario;
    }

    /**
     * @return mixed
     */
    public function getQtde()
    {
        return $this->qtde;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @return mixed
     */
    public function getPercentual()
    {
        return $this->percentual;
    }

    /**
     * @return mixed
     */
    public function getOrcamentoId()
    {
        return $this->orcamento_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $orcamento_id
     */
    public function setOrcamentoId($orcamento_id)
    {
        $this->orcamento_id = $orcamento_id;
    }

    /**
     * @param mixed $percentual
     */
    public function setPercentual($percentual)
    {
        $this->percentual = $percentual;
    }

    /**
     * @param mixed $preco_unitario
     */
    public function setPrecoUnitario($preco_unitario)
    {
        $this->preco_unitario = $preco_unitario;
    }

    /**
     * @param mixed $produto_id
     */
    public function setProdutoId($produto_id)
    {
        $this->produto_id = $produto_id;
    }

    /**
     * @param mixed $qtde
     */
    public function setQtde($qtde)
    {
        $this->qtde = $qtde;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

}

