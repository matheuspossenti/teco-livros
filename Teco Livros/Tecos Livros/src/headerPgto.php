<?php 
	session_start();
?>

<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Livraria Teco Livros">
    <meta name="author" content="Matheus Possenti">
    <link rel="icon" href="img/logo1.png">
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">
    <link href="css/pagamento.css" rel="stylesheet">
    <title>Pagamento | Teco Livros</title>
</head>

<body class="bg-light">
    <nav class="site-header sticky-top py-1">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
            <a class="py-2" href="principal.php">
                <img src="img/logo1.png" width="35px" alt="">
            </a>
            <a class="py-2 d-none d-md-inline-block" href="principal.php">Teco Livros</a>
            <form class="d-flex my-2 imput-group">
                <div class="input-group ">
                    <input type="text" class="form-control" placeholder="Pesquise aqui" aria-label="Recipient's username" aria-describedby="button-addon2" size="60%">
                    <button type="button" class="btn btn-outline-light">
                        <i class="fas fa-search text-light"></i>
                    </button>
                </div>
            </form>
            <a class="py-2 d-none d-md-inline-block" href="login.php">Log in</a>
            <a class="py-2 d-none d-md-inline-block" href="carrinho.php">Carrinho</a>
        </div>
    </nav>