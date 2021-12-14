<?php
require "Teco Livros Admin/src/livroDAO.php";
include "src/header.php";
?>

<div class="container">

    <div id="carouselExampleIndicators" class="carousel slide mb-5" data-mdb-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/carousel1.png" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="img/carousel2.png" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="img/carousel3.png" class="d-block w-100" alt="..." />
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>

        <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próxima</span>
        </button>

    </div>


    <h1 class="col-12 mb-4 text text-center" id="1">Destaques</h1>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 mb-5">

        <?php
        //INICIA UMA REPETIÇÃO
        $livroDAO = new livroDAO();
        $livros = $livroDAO->obterLivrosSemPromocao();

        foreach ($livros as $livro) {
        ?>

            <div class="col mb-5">
                <div class="shadow-2-strong card h-100 text-center align-items-center">
                    <img src="data:image/png;base64,<?= base64_encode($livro['imagem']) ?>" class="card-img-top p-2 mt-2 img-card" alt="Capa do Livro">
                    <div class="card-body">
                        <h5><?= $livro['titulo'] ?></h5>
                        <p class="small text-muted text-uppercase mb-2"><?= $livro['autor'] ?></p>
                        <hr>
                        <h6 class="mb-3">
                            <span class="text-danger mr-1">R$
                                <?php
                                echo number_format($livro['valor'], 2, ',', '.')
                                ?>
                            </span>

                        </h6>
                        <a href="carrinho.php?id=<?=$livro['id']?>&acao=inserir" class="btn btn btn-outline-dark btn-sm mr-1 mb-2" role="button"><i class="fas fa-shopping-cart pr-2"></i>Adicionar ao carrinho</a>
                        <a href="produto.php?id=<?= $livro['id'] ?>" class="btn btn-light btn-sm mr-1 mb-2" role="button"><i class="fas fa-info-circle pr-2"></i>Detalhes</a>
                        <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Adicionar aos favoritos">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>

    <h1 class="col-12 mb-4 text text-center" id="1">Promoções</h1>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 mb-5">

        <?php
        //INICIA UMA REPETIÇÃO
        $livroDAO = new livroDAO();
        $livros = $livroDAO->obterLivrosPromocao();

        foreach ($livros as $livro) {
        ?>

            <div class="col mb-5">
                <div class="shadow-2-strong card h-100 text-center align-items-center">
                    <img src="data:image/png;base64,<?= base64_encode($livro['imagem']) ?>" class="card-img-top p-2 mt-2 img-card" alt="Capa do Livro">
                    <div class="card-body">
                        <h5><?= $livro['titulo'] ?></h5>
                        <p class="small text-muted text-uppercase mb-2"><?= $livro['autor'] ?></p>
                        <hr>
                        <h6 class="mb-3">
                            <span class="text-muted mr-1"><s>R$ 49,90</s></span>
                            <span class="text-danger mr-1">R$
                                <?php
                                echo number_format($livro['valor'], 2, ',', '.')
                                ?>
                            </span>

                        </h6>
                        <a href="carrinho.php?id=<?=$livro['id']?>&acao=inserir" class="btn btn btn-outline-dark btn-sm mr-1 mb-2" role="button"><i class="fas fa-shopping-cart pr-2"></i>Adicionar ao carrinho</a>
                        <a href="produto.php?id=<?= $livro['id'] ?>" class="btn btn-light btn-sm mr-1 mb-2" role="button"><i class="fas fa-info-circle pr-2"></i>Detalhes</a>
                        <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Adicionar aos favoritos">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>


<?php
include "src/footer.php";
?>