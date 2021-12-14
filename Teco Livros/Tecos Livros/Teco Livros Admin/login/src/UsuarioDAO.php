<?php 
    require "src/ConexaoBD.php";

    class UsuarioDAO{
        public function verificarUsuario(Usuario $usuario){
            $senhaCriptografada = md5($usuario->getSenha());

            $sql = "select * from usuarios where login='{$usuario->getLogin()}' and senha='$senhaCriptografada'";

            echo $sql;

            $conexao = ConexaoBD::getConexao();
            
            $stmt = $conexao->query($sql);

            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public function cadastrarUsuario(Usuario $usuario){
            $senhaCriptografada = md5($usuario->getSenha());

            $sql = "insert into usuarios (login, senha) values ('{$usuario->getLogin()}','$senhaCriptografada')";

            $conexaoBD = ConexaoBD::getConexao();

            return $conexaoBD->exec($sql);
        }
    }

?>