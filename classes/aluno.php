<?php

class Aluno {
    private $id;
    private $nome;
    private $dataNascimento;
    private $genero;
    private $acesso;
    private $email;
    private $palavraPasse;
    private $numeroTelefone;
    private $numeroSecundario;

    public function __construct($nome, $dataNascimento, $genero, $acesso, $email, $palavraPasse, $numeroTelefone, $numeroSecundario) {
        $this->nome = $nome;
        $this->dataNascimento = $dataNascimento;
        $this->genero = $genero;
        $this->acesso = $acesso;
        $this->email = $email;
        $this->palavraPasse = $palavraPasse;
        $this->numeroTelefone = $numeroTelefone;
        $this->numeroSecundario = $numeroSecundario;
    }

  
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDataNascimento() {
        return $this->dataNascimento;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function getAcesso() {
        return $this->acesso;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPalavraPasse() {
        return $this->palavraPasse;
    }

    public function getNumeroTelefone() {
        return $this->numeroTelefone;
    }

    public function getNumeroSecundario() {
        return $this->numeroSecundario;
    }


    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    public function setGenero($genero) {
        $this->genero = $genero;
    }

    public function setAcesso($acesso) {
        $this->acesso = $acesso;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPalavraPasse($palavraPasse) {
        $this->palavraPasse = $palavraPasse;
    }

    public function setNumeroTelefone($numeroTelefone) {
        $this->numeroTelefone = $numeroTelefone;
    }

    public function setNumeroSecundario($numeroSecundario) {
        $this->numeroSecundario = $numeroSecundario;
    }
}

?>
