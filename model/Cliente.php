<?php
class Cliente {
    private $id;
    private $nome;
    private $data;
    private $endereco;
    private $cpf;
    private $telefone;
    private $cidade;
    private $email;

    public function Cliente($id,$nome,$data,$endereco,$cpf,$telefone,$cidade,$email) {
		$this->id = $id;
        $this->nome=$nome;
        $this->data=$data;
        $this->endereco=$endereco;
        $this->cpf=$cpf;
        $this->telefone=$telefone;
        $this->cidade=$cidade;
        $this->email=$email;
    }

    public function setId($id) {
        $this->id =$id;
    }

    public function getId() {
        return $this->id;
    }

    public function setNome($nome) {
        $this->nome=$nome;
    }

    public function getNome($nome) {
        return $this->nome;
    }

    public function setData($data) {
        $this->data=$data;
    }
    
    public function getData($data) {
        return $this->data;
    }

    public function setEndereco($endereco) {
        $this->endereco=$endereco;
    }

    public function getEndereco($endereco) {
        return $this->endereco;
    }

    public function setCpf($cpf) {
        $this->cpf=$cpf;
    }

    public function getCpf($cpf) {
        return $this->$cpf;
    }

    public function setTelefone($telefone) {
        $this->telefone=$telefone;
    }

    public function getTelefone($telefone) {
        return $this->$telefone;
    }

    public function setCidade($cidade) {
        $this->cidade=$cidade;
    }

    public function getCidade($cidade) {
        return $this->$cidade;
    }

    public function setEmail($email) {
        $this->email=$email;
    }

    public function getEmail($email) {
        return $this->$email;
    }
}




?>