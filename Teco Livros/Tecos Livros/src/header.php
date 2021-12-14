<?php 
	session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Livraria Teco Livros">
	<meta name="author" content="Matheus Possenti">
	<link rel="icon" href="img/logo1.png">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/mdb.ecommerce.min.css">
	<link rel="stylesheet" href="css/mdb.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
	
    <link rel="stylesheet" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/mdb5/3.10.0/compiled.min.css">
    
    <link rel="stylesheet" href="https://mdbootstrap.com/api/snippets/static/download/MDB5-Pro-Advanced_3.3.0/plugins/css/all.min.css">
	<link rel="stylesheet" href="css/principal.css">
	<title>Principal | Teco Livros</title>
</head>

<body>
	<nav class="site-header sticky-top py-1">
		<div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
			<a class="py-2" href="principal.php">
				<img src="img/logo1.png" width="35px" alt="">
			</a>
			<a class="py-2 d-none d-md-inline-block" href="principal.php">Teco Livros</a>
			<form class="d-flex my-2 imput-group">
				<div class="input-group ">
					<input type="text" class="form-control" placeholder="Pesquise aqui"
						aria-label="Recipient's username" aria-describedby="button-addon2" size="60%">
					<button type="button" class="btn btn-outline-light">
						<i class="fas fa-search text-light"></i>
					</button>
				</div>
			</form>

			<a class="py-2 d-none d-md-inline-block" href="login.php">Log in</a>
			<a class="py-2 d-none d-md-inline-block" href="carrinho.php">Carrinho</a>
		</div>

		<div class="container">
			<hr class="m-1">
		</div>

		<div class="container d-flex flex-column flex-md-row justify-content-between align-items-center text-center">

			<div class="shadow-0 container dropdown">
				<button class="btn shadow-0 menu dropdown-toggle" type="button" id="dropdownMenuButton2"
					data-mdb-toggle="dropdown" aria-expanded="false">
					Menu
				</button>
				<ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
					<li><a class="dropdown-item" href="#1">Destaques</a></li>
					<li><a class="dropdown-item" href="#2">Promoções</a></li>
					<li><a class="dropdown-item" href="#3">Recomendados</a></li>
				</ul>
			</div>

			<div class="shadow-0 container dropdown">
				<button class="btn shadow-0 menu dropdown-toggle" type="button" id="dropdownMenuButton2"
					data-mdb-toggle="dropdown" aria-expanded="false">
					Categorias
				</button>

				<ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
					<li><a class="dropdown-item" href="#1">Ficção científica</a></li>
					<li><a class="dropdown-item" href="#2">Drama</a></li>
					<li><a class="dropdown-item" href="#3">Ação</a></li>
				</ul>
			</div>

			<div class="shadow-0 container dropdown">
				<button class="btn shadow-0 menu dropdown-toggle" type="button" id="dropdownMenuButton2"
					data-mdb-toggle="dropdown" aria-expanded="false">
					Faixa etária
				</button>
				<ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
					<li><a class="dropdown-item" href="#1">Infantil</a></li>
					<li><a class="dropdown-item" href="#2">Jovem</a></li>
					<li><a class="dropdown-item" href="#3">Adulto</a></li>
				</ul>
			</div>
		</div>
		
	</nav>