<?php

include '../classes/instrutor.php';
require_once 'conexao.php'; 

class InstrutorDao {
    
    public function cadastrarInstrutor($instrutor) {
        try {
            $conexao = getConexao(); 
            $stmt = $conexao->prepare("insert INTO usuario (nome, data_nascimento, genero, acesso, email, palavra_passe, numero_de_telefone, numero_secundario) 
                                       VALUES (:nome, :dataNascimento, :genero, :acesso, :email, :palavraPasse, :numeroTelefone, :numeroSecundario)");

            $stmt->bindValue(':nome', $instrutor->getNome());
            $stmt->bindValue(':dataNascimento', $instrutor->getDataNascimento());
            $stmt->bindValue(':genero', $instrutor->getGenero());
            $stmt->bindValue(':acesso', $instrutor->getAcesso());
            $stmt->bindValue(':email', $instrutor->getEmail());
            $stmt->bindValue(':palavraPasse', $instrutor->getPalavraPasse());
            $stmt->bindValue(':numeroTelefone', $instrutor->getNumeroTelefone());
            $stmt->bindValue(':numeroSecundario', $instrutor->getNumeroSecundario());
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Erro ao cadastrar instrutor: " . $e->getMessage();
            return false;
        }
    }

    
    public function listarInstrutores() {
        try {
            $conexao = getConexao(); 
            $stmt = $conexao->prepare("select * FROM usuario WHERE acesso = 'instrutor'");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro ao listar instrutores: " . $e->getMessage();
            return false;
        }
    }

    public function listarInstrutorID($id) {
        try {
            $conexao = getConexao(); 
            $stmt = $conexao->prepare("select * FROM usuario WHERE acesso = 'instrutor' and id = :id");
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro ao listar instrutor: " . $e->getMessage();
            return false;
        }
    }

    
    public function atualizarInstrutor($instrutor) {
        try {
            $conexao = getConexao(); 
            $stmt = $conexao->prepare("update usuario 
                                       SET nome = :nome, data_nascimento = :dataNascimento, genero = :genero, 
                                           email = :email, 
                                           numero_de_telefone = :numeroTelefone, numero_secundario = :numeroSecundario
                                       WHERE id = :id");

            $stmt->bindValue(':nome', $instrutor->getNome());
            $stmt->bindValue(':dataNascimento', $instrutor->getDataNascimento());
            $stmt->bindValue(':genero', $instrutor->getGenero());
            $stmt->bindValue(':email', $instrutor->getEmail());
            $stmt->bindValue(':numeroTelefone', $instrutor->getNumeroTelefone());
            $stmt->bindValue(':numeroSecundario', $instrutor->getNumeroSecundario());
            $stmt->bindValue(':id', $instrutor->getId());
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Erro ao atualizar instrutor: " . $e->getMessage();
            return false;
        }
    }
    
    public function eliminarInstrutor($id) {
        try {
            $conexao = getConexao(); 
            $stmt = $conexao->prepare("delete FROM usuario WHERE id = :id");
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Erro ao eliminar instrutor: " . $e->getMessage();
            return false;
        }
    }
}

?>
