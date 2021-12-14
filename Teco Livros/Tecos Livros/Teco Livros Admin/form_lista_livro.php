<?php

include "src/menuPesquisa.php";
include "login/verificar_sessao.php";

require_once "src/livroDAO.php";

$livroDAO = new LivroDAO;

$livros = $livroDAO->obterLivros();

$chave = $_GET['chave'];

if(isset($chave)){
	$livros = $livroDAO->pesquisarLivros($chave);
} else
	$livros = $livroDAO->obterLivros();

$mensagem = $_GET['mensagem'];

echo "<p class='mensagem'>" . $mensagem . "</p>";

?>

<section class="vh-50 my-5 text-center">
	<div class="container card shadow-2-strong">
		<div class="card-body wrapper wrapper-content animated fadeInRight">
			<div class="row">

				<div class="col-md-12">

					<div class="ibox">
						<div class="ibox-title">
							<span class="pull-right">(<strong><?=count($livros)?></strong>) itens</span>
							<h5>Livros cadastrados</h5>
						</div>
						<?php
						foreach ($livros as $livro) {
						?>
							<div class="ibox-content">
								<div class="table-responsive">
									<table class="table shoping-cart-table">
										<tbody>
											<tr>
												<td width="90">
													<div>
														<img  alt="" width="80" src="data:image/png;base64,<?=base64_encode($livro['imagem'])?>" class="img-card-disco"/>
													</div>
												</td>
												<td class="desc">
													<h3>
														<a href="#" class="text-navy">
															<?= $livro['titulo'] ?>
														</a>
													</h3>
													<p class="small">
														<?= $livro['resumo'] ?>
													</p>
													<dl class="small m-b-none">
														<dt class="fs-6 mb-2">Descrição do livro</dt>
														<dd><span class="fw-bold">Autor: </span><?= $livro['autor'] ?></dd>
														<dd><span class="fw-bold">ISBN:  </span><?= $livro['isbn'] ?></dd>
														<dd><span class="fw-bold">Editora: </span><?= $livro['editora'] ?></dd>
														<dd><span class="fw-bold">Edição: </span><?= $livro['edicao'] ?></dd>
														<dd><span class="fw-bold">Ano de Publicação: </span><?= $livro['anoPubli'] ?></dd>
														<dd><span class="fw-bold">Estilo: </span><?= $livro['estilo'] ?></dd>
														<dd><span class="fw-bold">Promoção: </span><?php echo $livro['promocao']==1?'Sim':'Não'?></dd>
													</dl>

													<div class="m-t-sm mb-1	">
														<a href="remove_livro.php?id=<?=$livro['id']?>" class="text-danger"><i class="fa fa-trash"></i>
															Remover
														</a>
													</div>
													<div class="m-t-sm">
														<a href="form_edita_livro.php?id=<?=$livro['id']?>" class="text-primary"><i class="fas fa-edit"></i>
															Editar
														</a>
													</div>
												</td>
												<td>
													<h4>
														R$<?= $livro['valor'] ?>
													</h4>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php

include "src/rodape.php";
?>