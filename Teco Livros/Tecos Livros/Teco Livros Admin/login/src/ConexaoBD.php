<?php

class ConexaoBD{

    public static function getConexao():PDO{
        $conexao = new PDO(
            "mysql:host=localhost;dbname=tecolivros",
            "root",
            "coringa");
        return $conexao;
    }

}