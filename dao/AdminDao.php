<?php

include '../classes/admin.php'; // Alterado para incluir a classe Admin
require_once 'conexao.php'; 

class AdminDao {
    
    public function cadastrarAdmin($admin) { // Alterado para cadastrarAdmin
        try {
            $conexao = getConexao(); 
            $stmt = $conexao->prepare("INSERT INTO usuario (nome, data_nascimento, genero, acesso, email, palavra_passe, numero_de_telefone, numero_secundario) 
                                       VALUES (:nome, :dataNascimento, :genero, :acesso, :email, :palavraPasse, :numeroTelefone, :numeroSecundario)");

            $stmt->bindValue(':nome', $admin->getNome());
            $stmt->bindValue(':dataNascimento', $admin->getDataNascimento());
            $stmt->bindValue(':genero', $admin->getGenero());
            $stmt->bindValue(':acesso', $admin->getAcesso());
            $stmt->bindValue(':email', $admin->getEmail());
            $stmt->bindValue(':palavraPasse', $admin->getPalavraPasse());
            $stmt->bindValue(':numeroTelefone', $admin->getNumeroTelefone());
            $stmt->bindValue(':numeroSecundario', $admin->getNumeroSecundario());
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Erro ao cadastrar admin: " . $e->getMessage();
            return false;
        }
    }

    
    public function listarAdministradores() { // Alterado para listarAdministradores
        try {
            $conexao = getConexao(); 
            $stmt = $conexao->prepare("SELECT * FROM usuario WHERE acesso = 'admin'"); // Alterado para 'admin'
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro ao listar administradores: " . $e->getMessage();
            return false;
        }
    }

    public function listarAdminID($id) { // Alterado para listarAdminID
        try {
            $conexao = getConexao(); 
            $stmt = $conexao->prepare("SELECT * FROM usuario WHERE acesso = 'admin' AND id = :id"); // Alterado para 'admin'
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro ao listar admin: " . $e->getMessage();
            return false;
        }
    }

    
    public function atualizarAdmin($admin) { // Alterado para atualizarAdmin
        try {
            $conexao = getConexao(); 
            $stmt = $conexao->prepare("UPDATE usuario 
                                       SET nome = :nome, data_nascimento = :dataNascimento, genero = :genero, 
                                           email = :email, 
                                           numero_de_telefone = :numeroTelefone, numero_secundario = :numeroSecundario
                                       WHERE id = :id");

            $stmt->bindValue(':nome', $admin->getNome());
            $stmt->bindValue(':dataNascimento', $admin->getDataNascimento());
            $stmt->bindValue(':genero', $admin->getGenero());
            $stmt->bindValue(':email', $admin->getEmail());
            $stmt->bindValue(':numeroTelefone', $admin->getNumeroTelefone());
            $stmt->bindValue(':numeroSecundario', $admin->getNumeroSecundario());
            $stmt->bindValue(':id', $admin->getId());
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Erro ao atualizar admin: " . $e->getMessage();
            return false;
        }
    }
    
    public function eliminarAdmin($id) { // Alterado para eliminarAdmin
        try {
            $conexao = getConexao(); 
            $stmt = $conexao->prepare("DELETE FROM usuario WHERE id = :id");
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Erro ao eliminar admin: " . $e->getMessage();
            return false;
        }
    }
}

?>
