<?php
require_once "Teco Livros Admin/src/livroDAO.php";
include "src/header.php";

$id = $_GET['id'];

$livroDAO = new LivroDAO();
$livro = $livroDAO->obterLivroPorId($id);
?>

<section class="my-5 container">
	<div class="row">
		<div class="col-md-6 mb-4 mb-md-0">
			<div id="mdb-lightbox-ui">
				<div class="mdb-lightbox">
					<div class="row product-gallery mx-1">
						<div class="col-12 mb-0 text-center">
							<figure class="view overlay rounded z-depth-1 main-img">
								<a href="principal.php">
									<img src="data:image/png;base64,<?= base64_encode($livro['imagem']) ?>" class="z-depth-1 w-50" alt="Capa do Livro">
								</a>
							</figure>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-6">

			<h5><?= $livro['titulo'] ?></h5>
			<p class="mb-2 text-muted text-uppercase small">Livro</p>

			<p><span class="mr-1 text-danger"><strong>R$
						<?php

						echo number_format($livro['valor'], 2, ',', '.')

						?>
						</strong></span></p>

			<p class="pt-1"><?= $livro['resumo'] ?></p>

			<div class="table-responsive mb-5">
				<table class="table table-sm table-borderless mb-0">
					<tbody>
						<tr>
							<th class="pl-0 w-25" scope="row"><strong>Autor</strong></th>
							<td><?= $livro['autor'] ?></td>
						</tr>
						<tr>
							<th class="pl-0 w-25" scope="row"><strong>Editora</strong></th>
							<td><?= $livro['editora'] ?></td>
						</tr>
						<tr>
							<th class="pl-0 w-25" scope="row"><strong>Edição</strong></th>
							<td><?= $livro['edicao'] ?></td>
						</tr>
						<tr>
							<th class="pl-0 w-25" scope="row"><strong>Ano de publicação</strong></th>
							<td><?= $livro['anoPubli'] ?></td>
						</tr>
						<tr>
							<th class="pl-0 w-25" scope="row"><strong>Estilo</strong></th>
							<td><?= $livro['estilo'] ?></td>
						</tr>
					</tbody>
				</table>
			</div>

			<button type="button" class="btn btn-outline-dark btn-md mr-1 mb-2"><i class="fas fa-shopping-cart pr-2"></i><a href="carrinho.php?id=<?=$livro['id']?>&acao=inserir" class="text-dark"> Adicionar ao
					carrinho</a> </button>
		</div>
	</div>
</section>

<?php
include "src/footer.php";
?>