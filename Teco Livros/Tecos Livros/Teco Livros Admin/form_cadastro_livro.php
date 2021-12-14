<?php

include "src/menu.php";
include "login/verificar_sessao.php";

$mensagem = $_GET['mensagem'];

echo "<p class='mensagem'>" . $mensagem . "</p>";

?>
<section class="vh-50 mt-1">
    <div class="container py-5 h-50">
        <div class="row justify-content-center align-items-center h-50 ">
            <div class="col-12 col-lg-9 col-xl-7 ">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h2 class="text-center mb-4">Cadastro de Livro</h2>
                        <form enctype="multipart/form-data" method="post" action="cadastro_livro.php">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" name="titulo" id="tituloInput" class="form-control form-control-lg" />
                                        <label class="form-label" for="tituloInput">Titulo</label>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" name="autor" id="autorInput" class="form-control form-control-lg" />
                                        <label class="form-label" for="autorInput">Autor</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" name="isbn" id="isbnInput" class="form-control form-control-lg" />
                                        <label class="form-label" for="isbnInput">ISBN</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" name="editora" id="editoraInput" class="form-control form-control-lg" />
                                        <label class="form-label" for="editoraInput">Editora</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="number" name="edicao" id="edicaoInput" class="form-control form-control-lg" />
                                        <label class="form-label" for="edicaoInput">Edição</label>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" name="anoPubli" id="anoPubliInput" class="form-control form-control-lg" />
                                        <label class="form-label" for="anoPubliInput">Ano de Publicação</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" name="estilo" id="estiloInput" class="form-control form-control-lg" />
                                        <label class="form-label" for="estiloInput">Estilo</label>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" name="valor" id="valorInput" class="form-control form-control-lg" />
                                        <label class="form-label" for="valorInput">Valor</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="promocaoId">Promoção: </label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="promocao" id="promocaoId" value="1" />
                                        <label class="form-check-label" for="promocaoId">Sim</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="promocao" id="promocaoId" value="0" checked />
                                        <label class="form-check-label" for="promocaoId">Não</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <label for="imagemInput">Imagem: </label>
                                    <input type="file" name="imagem" id="imagemInput" class="form-control form-control-lg" required="true">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="resumoInput">Resumo: </label>
                                    <textarea name="resumo" id="form-control form-control-lg" cols="78" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="mt-4 pt-2 float-end">
                                <input class="btn btn-outline-dark btn-lg" type="submit" value="Cadastrar" />
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

include "src/rodape.php";

?>