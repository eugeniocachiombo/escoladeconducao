<?php

class Especialidade {
    private $id;
    private $especialidade;

    public function __construct($especialidade) {
        $this->especialidade = $especialidade;
    }

    public function getId() {
        return $this->id;
    }

    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }
}

?>
