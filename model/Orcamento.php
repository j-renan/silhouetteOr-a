<?php
/**
 * Created by PhpStorm.
 * User: Família
 * Date: 28/11/2018
 * Time: 21:37
 */

class Orcamento {
    private $id;
    private $cliente_id;
    private $crianca;
    private $data;

    public function Orcamento($id, $cliente_id, $crianca, $data) {
        $this->id = $id;
        $this->cliente_id = $cliente_id;
        $this->crianca = $crianca;
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getClienteId()
    {
        return $this->cliente_id;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
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
    public function getCrianca()
    {
        return $this->crianca;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @param mixed $crianca
     */
    public function setCrianca($crianca)
    {
        $this->crianca = $crianca;
    }

    /**
     * @param mixed $cliente_id
     */
    public function setClienteId($cliente_id)
    {
        $this->cliente_id = $cliente_id;
    }

}