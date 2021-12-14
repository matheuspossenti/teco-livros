<?php
require_once "Teco Livros Admin/src/livroDAO.php";
include "src/headerCarr.php";

$carrinho = $_SESSION['carrinho'];
$acao = $_GET['acao'];

if ($acao == "inserir") {
	$id = $_GET['id'];
	$novo = true;

	for ($i = 0; $i <= array_key_last($carrinho); $i++) {

		$item = $carrinho[$i];
		if ($id == $item['id']) {
			$item['quantidade'] += 1;
			unset($carrinho[$i]);
			$carrinho[$i] = $item;
			$novo = false;
			break;
		}
	}

	if ($novo == true) {
		$livroDAO = new LivroDAO();
		$livro = $livroDAO->obterLivroPorId($_GET['id']);

		$item = [
			"id" => $livro['id'],
			"imagem" => $livro['imagem'],
			"autor" => $livro['autor'],
			"titulo" => $livro['titulo'],
			"valor" => $livro['valor'],
			"quantidade" => 1
		];

		$carrinho[] = $item;
	}
} else
if ($acao == "remover") {
	$id = $_GET['id'];

	for ($i = 0; $i <= array_key_last($carrinho); $i++) {
		$item = $carrinho[$i];
		if ($id == $item['id']) {
			unset($carrinho[$i]);
			break;
		}
	}
}
$_SESSION['carrinho'] = $carrinho;
?>

<section class="vh-50 my-5 text-center">
	<div class="container card shadow-2-strong">
		<div class="card-body wrapper wrapper-content animated fadeInRight">
			<div class="row">

				<div class="col-md-9">

					<div class="ibox">
						<div class="ibox-title">
							<span class="pull-right">(<strong><?= count($carrinho) ?></strong>) itens</span>
							<h5>Seu carrinho</h5>
						</div>
						<div class="ibox-content">
							<div class="table-responsive">
								<table class="table shoping-cart-table">
									<tbody>
										<?php
										$total = 0;
										foreach ($carrinho as $item) :
										?>
											<tr>
												<td width="90">
													<div>
														<img src="data:image/png;base64,<?= base64_encode($item['imagem']) ?>" class="z-depth-1 w-100" alt="Capa do item">
													</div>
												</td>
												<td class="desc">
													<h3>
														<a href="produto.php?id=<?= $item['id'] ?>" class="text-navy">
															<?= $item['titulo'] ?>
														</a>
													</h3>
													<p class="small">
														<?= $item['autor'] ?>
													</p>

													<div class="m-t-sm">
														<a href="carrinho.php?id=<?= $item['id'] ?>&acao=remover" class="text-danger"><i class="fa fa-trash"></i>
															Remover
															item</a>
													</div>
												</td>
												<td width="80">
													<input type="text" class="form-control" value="<?= $item['quantidade'] ?>">
												</td>
												<?php
												$subtotal = $item['valor'] * $item['quantidade'];
												$total = $total + $subtotal;
												$_SESSION['total'] = $total;
												?>
												<td>
													<h4>R$
														<?php
														echo number_format($subtotal, 2, ',', '.')
														?>
													</h4>
												</td>
											</tr>
										<?php
										endforeach;
										?>
									</tbody>
								</table>
							</div>
						</div>

						<div class="ibox-content">
							<a href="principal.php" class="text-dark"><button class="btn btn-white float-start"><i class="fa fa-arrow-left"></i>Continuar
									comprando</button></a>
						</div>
					</div>

				</div>

				<div class="col-md-3">

					<div class="ibox">
						<div class="ibox-title">
							<h5>Resumo da compra</h5>
						</div>
						<div class="ibox-content">
							<span>
								Total
							</span>
							<h2 class="font-bold">R$
								<?php
								echo number_format($total, 2, ',', '.')
								?>
							</h2>
							<hr>
							<div class="m-t-sm">
								<div class="btn-group">
									<a href="pagamento.php" class="btn btn-outline-dark btn-sm"><i class="fa fa-shopping-cart"></i>
										Finalizar pagamento</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
include "src/footer.php";
?>