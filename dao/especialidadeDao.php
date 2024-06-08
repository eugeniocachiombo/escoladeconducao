<?php

include '../classes/especialidade.php'; 
require_once 'conexao.php'; 

class EspecialidadeDao {
    
    public function cadastrarEspecialidade($especialidade) { 
        try {
            $conexao = getConexao(); 
            $stmt = $conexao->prepare("INSERT INTO especialidade (especialidade) VALUES (:especialidade)");

            $stmt->bindValue(':especialidade', $especialidade->getEspecialidade());
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Erro ao cadastrar especialidade: " . $e->getMessage();
            return false;
        }
    }

    public function listarEspecialidades() { 
        try {
            $conexao = getConexao(); 
            $stmt = $conexao->prepare("SELECT * FROM especialidade"); 
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro ao listar especialidades: " . $e->getMessage();
            return false;
        }
    }

    public function buscarEspecialidadePorId($id) { 
        try {
            $conexao = getConexao(); 
            $stmt = $conexao->prepare("SELECT * FROM especialidade WHERE id = :id"); 
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro ao listar especialidade: " . $e->getMessage();
            return false;
        }
    }

    public function atualizarEspecialidade($especialidade) { 
        try {
            $conexao = getConexao(); 
            $stmt = $conexao->prepare("UPDATE especialidade SET especialidade = :especialidade WHERE id = :id");

            $stmt->bindValue(':especialidade', $especialidade->getEspecialidade());
            $stmt->bindValue(':id', $especialidade->getId());
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Erro ao atualizar especialidade: " . $e->getMessage();
            return false;
        }
    }
    
    public function eliminarEspecialidade($id) { 
        try {
            $conexao = getConexao(); 
            $stmt = $conexao->prepare("DELETE FROM especialidade WHERE id = :id");
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Erro ao eliminar especialidade: " . $e->getMessage();
            return false;
        }
    }
}

?>
