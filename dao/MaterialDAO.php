<?php
include '../conexao/Conexao.php';
class MaterialDAO {

    public function cadastrar(Material $material) {
        $conexao = new Conexao();
        $bd = $conexao->conectar();
   
        $sql = "INSERT INTO materiais (material,preco) 
            VALUES ('".$material->getMaterial()."', '".$material->getPreco()."')";

        $bd->query($sql); 
        $bd->close();
    }

    //busca a lista de materiais
    public function listar() {
        $conexao = new Conexao();
        $bd = $conexao->conectar();

        $sql = "SELECT * FROM materiais";

        $resultados = $bd->query($sql);
        $bd->close();
        return $resultados;
    }

    //função que atualiza um material
    public function atualizar(Material $material) {
        $conexao = new Conexao();
        $bd = $conexao->conectar();
       
        $sql = "UPDATE materiais SET material='".$material->getMaterial()."', preco='".$material->getPreco()."' WHERE id='".$material->getId()."'";
       
        $bd->query($sql); 
        $bd->close();
    }

    //função que apaga um material
    public function remover(Material $material) {
        $conexao = new Conexao();
        $bd = $conexao->conectar();
       
        $sql = "DELETE FROM materiais WHERE id='".$material->getId()."'";
       
        $bd->query($sql); 
        $bd->close();
    }
}


?>