<?php

 function getConexao(){
    try {
        $host = 'mysql:host=localhost;dbname=escoladeconducao;charset=utf8mb4;collate=utf8_general_ci';
        $user = 'root';
        $senha = '';
        $pdo = new PDO( $host, $user, $senha );

        return $pdo;
    } catch (Exception $th) {
        echo $th->getMessage();
    }
}

?>