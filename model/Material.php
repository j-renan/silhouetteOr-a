<?php
class Material {
	private $id;
	private $material;
	private $preco;
	
	public function Material($id, $material, $preco) {
		$this->id = $id;
		$this->material = $material;
		$this->preco = $preco;
	}
	
	public function setId($id) {
        $this->id =$id;
    }

    public function getId() {
        return $this->id;
    }
	
	public function setMaterial($material) {
		$this->material = $material;
	}
	
	public function getMaterial() {
		return $this->material;
	}
	
	public function setPreco($preco) {
		$this->preco = $preco;
	}
	
	public function getPreco() {
		return $this->preco;
	}
	
}

?>