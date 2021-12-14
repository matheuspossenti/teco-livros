<?php
    require "src/Cliente.php";
    require "src/ClienteDAO.php";
?>
<?php
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $cliente = new Cliente();
    $cliente->setNome($nome);
    $cliente->setCpf($cpf);
    $cliente->setEmail($email);
    $cliente->setTelefone($telefone);
    $cliente->setSenha($senha);
    $cliente->setEndereco($endereco);
    $cliente->setNumero($numero);
    $cliente->setBairro($bairro);
    $cliente->setCep($cep);
    $cliente->setCidade($cidade);
    $cliente->setEstado($estado);

    $clienteDAO = new ClienteDAO();
    $resposta = $clienteDAO->cadastrarCliente($cliente);
 

    if($resposta >0)
        header("Location:principal.php")
?>