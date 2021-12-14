<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Livraria Teco Livros">
    <meta name="author" content="Matheus Possenti">
    <link rel="icon" href="img/logo1.png">
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/carrinho.css">
    <title>Teco Livros Administração</title>
</head>

<body>
    <nav class="site-header sticky-top py-1">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
            <div>
                <a class="py-2" href="index.php">
                    <img src="img/logo1.png" width="35px" alt="">
                </a>
                <a class="mx-4 py-2 d-none d-md-inline-block" href="index.php">Teco Livros</a>
            </div>
            <form class="d-flex my-2 imput-group" action="form_lista_livro.php" method="GET">
                <div class="input-group ">
                    <input type="text" class="form-control" placeholder="Pesquise aqui" name="chave" aria-label="Recipient's username" aria-describedby="button-addon2" size="60%">
                    <button type="submit" class="btn btn-outline-light">
                        <i class="fas fa-search text-light"></i>
                    </button>
                </div>
            </form>

        </div>
        <div class="container">
            <hr class="m-1">
        </div>

        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center text-center">
            <div class="shadow-0 container dropdown">
                <a href="form_cadastro_livro.php" class="btn shadow-0 menu">Cadastro</a>
            </div>

            <div class="shadow-0 container dropdown">
                <a href="form_lista_livro" class="btn shadow-0 menu">Lista</a>
            </div>
        </div>
    </nav>