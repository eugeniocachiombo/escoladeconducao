<?php

include '../classes/usuario_especialidade.php';
require_once 'conexao.php'; 

class UsuarioEspecialidadeDao {
   
    public function cadastrarRelacaoUsuarioEspecialidade($usuario_id, $especialidade_id) { 
        try {
            $conexao = getConexao(); 
            $stmt = $conexao->prepare("INSERT INTO usuario_especialidade (usuario_id, especialidade_id) VALUES (:usuario_id, :especialidade_id)");

            $stmt->bindValue(':usuario_id', $usuario_id);
            $stmt->bindValue(':especialidade_id', $especialidade_id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Erro ao cadastrar relação usuário-especialidade: " . $e->getMessage();
            return false;
        }
    }

   
    public function listarRelacoesUsuarioEspecialidade() { 
        try {
            $conexao = getConexao(); 
            $stmt = $conexao->prepare("SELECT * FROM usuario_especialidade"); 
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro ao listar relações usuário-especialidade: " . $e->getMessage();
            return false;
        }
    }

   
    public function buscarRelacaoUsuarioEspecialidadePorId($id) { 
        try {
            $conexao = getConexao(); 
            $stmt = $conexao->prepare("SELECT * FROM usuario_especialidade WHERE id = :id"); 
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro ao buscar relação usuário-especialidade: " . $e->getMessage();
            return false;
        }
    }

    public function buscarRelacaoUsuarioPorId($id) { 
        try {
            $conexao = getConexao(); 
            $stmt = $conexao->prepare("SELECT * FROM usuario_especialidade WHERE usuario_id = :id"); 
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro ao buscar relação usuário-especialidade: " . $e->getMessage();
            return false;
        }
    }
    
    public function buscarRelacaoEspecialidadePorId($id) { 
        try {
            $conexao = getConexao(); 
            $stmt = $conexao->prepare("SELECT * FROM usuario_especialidade WHERE especialidade_id = :id"); 
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro ao buscar relação usuário-especialidade: " . $e->getMessage();
            return false;
        }
    }
   
    public function eliminarRelacaoUsuarioEspecialidade($id) { 
        try {
            $conexao = getConexao(); 
            $stmt = $conexao->prepare("DELETE FROM usuario_especialidade WHERE id = :id");
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Erro ao eliminar relação usuário-especialidade: " . $e->getMessage();
            return false;
        }
    }
}

?>
