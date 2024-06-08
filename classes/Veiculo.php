<?php
class Veiculo {
    private $placa;
    private $modelo;
    private $ano;

    public function __construct($placa, $modelo, $ano) {
        $this->placa = $placa;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function getPlaca() {
        return $this->placa;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getAno() {
        return $this->ano;
    }

    public function setPlaca($placa) {
        $this->placa = $placa;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }
}
