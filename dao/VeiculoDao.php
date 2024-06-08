<?php

include '../classes/veiculo.php'; 
require_once 'conexao.php'; 

class VeiculoDao {
    
    public function cadastrarVeiculo($veiculo) { 
        try {
            $conexao = getConexao(); 
            $stmt = $conexao->prepare("INSERT INTO veiculo (placa, modelo, ano) 
                                       VALUES (:placa, :modelo, :ano)");

            $stmt->bindValue(':placa', $veiculo->getPlaca());
            $stmt->bindValue(':modelo', $veiculo->getModelo());
            $stmt->bindValue(':ano', $veiculo->getAno());
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Erro ao cadastrar veículo: " . $e->getMessage();
            return false;
        }
    }

    
    public function listarVeiculos() { 
        try {
            $conexao = getConexao(); 
            $stmt = $conexao->prepare("SELECT * FROM veiculo");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro ao listar veículos: " . $e->getMessage();
            return false;
        }
    }

    public function buscarVeiculoPorPlaca($placa) { 
        try {
            $conexao = getConexao(); 
            $stmt = $conexao->prepare("SELECT * FROM veiculo WHERE placa = :placa");
            $stmt->bindValue(':placa', $placa);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro ao buscar veículo por placa: " . $e->getMessage();
            return false;
        }
    }

    
    public function actualizarVeiculo($veiculo) { 
        try {
            $conexao = getConexao(); 
            $stmt = $conexao->prepare("UPDATE veiculo 
                                       SET modelo = :modelo, ano = :ano
                                       WHERE placa = :placa");

            $stmt->bindValue(':modelo', $veiculo->getModelo());
            $stmt->bindValue(':ano', $veiculo->getAno());
            $stmt->bindValue(':placa', $veiculo->getPlaca());
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Erro ao actualizar veículo: " . $e->getMessage();
            return false;
        }
    }
    
    public function excluirVeiculo($placa) { 
        try {
            $conexao = getConexao(); 
            $stmt = $conexao->prepare("DELETE FROM veiculo WHERE placa = :placa");
            $stmt->bindValue(':placa', $placa);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Erro ao excluir veículo: " . $e->getMessage();
            return false;
        }
    }
}

?>
