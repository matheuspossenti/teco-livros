<?php

class ConexaoBD{


    public static function getConexao():PDO{
        $conexao = new PDO(
            "mysql:host=localhost;dbname=seboretro-",
            "root",
            "coringa");
        return $conexao;
    }
}

ConexaoBD::getConexao();