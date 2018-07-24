<?php
class Produto {
    private $id;
    private $produto;
    private $ativo;   

    public function Produto($id, $produto, $ativo) {
        $this->id=$id;     
        $this->produto = $produto;
        $this->ativo = $ativo;        
    }

    public function setId($id) {
        $this->id =$id;
    }

    public function getId() {
        return $this->id;
    }

    public function setProduto($produto) {
        $this->produto = $produto;
    }

    public function getProduto() {
        return $this->produto;
    }

    public function setAtivo($ativo) {
        $this->ativo = $ativo;
    }

    public function getAtivo() {
        return $this->ativo;
    }
    
}


?>