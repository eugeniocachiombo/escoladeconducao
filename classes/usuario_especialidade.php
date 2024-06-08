<?php 

class UsuarioEspecialidade {
    private $id;
    private $usuario_id;
    private $especialidade_id;

    public function __construct($usuario_id, $especialidade_id) {
        $this->usuario_id = $usuario_id;
        $this->especialidade_id = $especialidade_id;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getUsuarioId() {
        return $this->usuario_id;
    }

    public function setUsuarioId($usuario_id) {
        $this->usuario_id = $usuario_id;
    }

    public function getEspecialidadeId() {
        return $this->especialidade_id;
    }

    public function setEspecialidadeId($especialidade_id) {
        $this->especialidade_id = $especialidade_id;
    }
}
