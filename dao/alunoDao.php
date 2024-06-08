<?php

include '../classes/aluno.php'; 
require_once 'conexao.php'; 

class AlunoDao {
    
    public function cadastrarAluno($aluno) {
        try {
            $conexao = getConexao(); 
            $stmt = $conexao->prepare("insert INTO usuario (nome, data_nascimento, genero, acesso, email, numero_de_telefone, numero_secundario) 
                                       VALUES (:nome, :dataNascimento, :genero, :acesso, :email, :numeroTelefone, :numeroSecundario)");

            $stmt->bindValue(':nome', $aluno->getNome());
            $stmt->bindValue(':dataNascimento', $aluno->getDataNascimento());
            $stmt->bindValue(':genero', $aluno->getGenero());
            $stmt->bindValue(':acesso', $aluno->getAcesso());
            $stmt->bindValue(':email', $aluno->getEmail());
            $stmt->bindValue(':numeroTelefone', $aluno->getNumeroTelefone());
            $stmt->bindValue(':numeroSecundario', $aluno->getNumeroSecundario());
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Erro ao cadastrar aluno: " . $e->getMessage();
            return false;
        }
    }

    
    public function listarAlunos() {
        try {
            $conexao = getConexao(); 
            $stmt = $conexao->prepare("select * FROM usuario WHERE acesso = 'aluno'");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro ao listar alunos: " . $e->getMessage();
            return false;
        }
    }

    public function listarAlunosID($id) {
        try {
            $conexao = getConexao(); 
            $stmt = $conexao->prepare("select * FROM usuario WHERE acesso = 'aluno' and id = :id");
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro ao listar alunos: " . $e->getMessage();
            return false;
        }
    }

    
    public function atualizarAluno($aluno) {
        try {
            $conexao = getConexao(); 
            $stmt = $conexao->prepare("update usuario 
                                       SET nome = :nome, data_nascimento = :dataNascimento, genero = :genero, 
                                           email = :email, 
                                           numero_de_telefone = :numeroTelefone, numero_secundario = :numeroSecundario
                                       WHERE id = :id");

            $stmt->bindValue(':nome', $aluno->getNome());
            $stmt->bindValue(':dataNascimento', $aluno->getDataNascimento());
            $stmt->bindValue(':genero', $aluno->getGenero());
            $stmt->bindValue(':email', $aluno->getEmail());
            $stmt->bindValue(':numeroTelefone', $aluno->getNumeroTelefone());
            $stmt->bindValue(':numeroSecundario', $aluno->getNumeroSecundario());
            $stmt->bindValue(':id', $aluno->getId());
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Erro ao atualizar aluno: " . $e->getMessage();
            return false;
        }
    }
    
    public function eliminarAluno($id) {
        try {
            $conexao = getConexao(); 
            $stmt = $conexao->prepare("delete FROM usuario WHERE id = :id");
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Erro ao eliminar aluno: " . $e->getMessage();
            return false;
        }
    }
}

?>
