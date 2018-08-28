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
    private $cep;

    public function Cliente($id,$nome,$data,$endereco,$cpf,$telefone,$cidade,$email, $cep) {
		$this->id = $id;
        $this->nome=$nome;
        $this->data=$data;
        $this->endereco=$endereco;
        $this->cpf=$cpf;
        $this->telefone=$telefone;
        $this->cidade=$cidade;
        $this->email=$email;
        $this->cep=$cep;
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

    public function getNome() {
        return $this->nome;
    }

    public function setData($data) {
        $this->data=$data;
    }
    
    public function getData() {
        return $this->data;
    }

    public function setEndereco($endereco) {
        $this->endereco=$endereco;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setCpf($cpf) {
        $this->cpf=$cpf;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setTelefone($telefone) {
        $this->telefone=$telefone;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setCidade($cidade) {
        $this->cidade=$cidade;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function setEmail($email) {
        $this->email=$email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setCep($cep) {
        $this->cep=$cep;
    }

    public function getCep() {
        return $this->cep;
    }
}




?>