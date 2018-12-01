<?php
/**
 * Created by PhpStorm.
 * User: Família
 * Date: 01/12/2018
 * Time: 16:38
 */

class MaterialOrcamento{

    private $id;
    private $produto_id;
    private $material_id;
    private $preco_unitario;

    public function MaterialOrcamento($id, $produto_id, $material_id, $preco_unitario){
        $this->id = $id;
        $this->produto_id = $produto_id;
        $this->material_id = $material_id;
        $this->preco_unitario = $preco_unitario;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getProdutoId()
    {
        return $this->produto_id;
    }

    /**
     * @param mixed $produto_id
     */
    public function setProdutoId($produto_id)
    {
        $this->produto_id = $produto_id;
    }

    /**
     * @return mixed
     */
    public function getMaterialId()
    {
        return $this->material_id;
    }

    /**
     * @param mixed $material_id
     */
    public function setMaterialId($material_id)
    {
        $this->material_id = $material_id;
    }

    /**
     * @return mixed
     */
    public function getPrecoUnitario()
    {
        return $this->preco_unitario;
    }

    /**
     * @param mixed $preco_unitario
     */
    public function setPrecoUnitario($preco_unitario)
    {
        $this->preco_unitario = $preco_unitario;
    }


}