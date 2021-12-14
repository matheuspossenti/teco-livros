<?php
include "src/headerCda.php"
?>

<section class="vh-50 mt-1">
    <div class="container py-5 h-50">
        <div class="row justify-content-center align-items-center h-50 ">
            <div class="col-12 col-lg-9 col-xl-7 ">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="text-center">Cadastro</h3>
                        <p class="mb-4 pb-2 pb-md-0 mb-md-5 text-center text-muted">Preencha corretamente seus dados para completar o cadastro</p>

                        <form method="post" action="cadastro_cliente.php">

                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <div class="form-outline">
                                        <input type="text" name="nome" id="nomeId" class="form-control form-control-lg" />
                                        <label class="form-label" for="nomeId">Nome</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" name="cpf" id="CPF" class="form-control form-control-lg" />
                                        <label class="form-label" for="CPF">CPF</label>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="tel" name="telefone" id="telefoneId" class="form-control form-control-lg" />
                                        <label class="form-label" for="telefoneId">Telefone</label>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-12 mb-4">
                                    <div class="form-outline">
                                        <input type="email" name="email" id="emailId" class="form-control form-control-lg" />
                                        <label class="form-label" for="emailId">exemplo@exemplo.com</label>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-12 mb-4">
                                    <div class="form-outline">
                                        <input type="password" name="senha" id="senhaId" class="form-control form-control-lg" />
                                        <label class="form-label" for="senhaId">Senha</label>
                                    </div>
                                </div>
                            </div>

                            <h5 class="my-3 pb-3 text-center fs-4">Endereço</h5>

                            <div class="row">

                                <div class="col-md-12 mb-4">
                                    <div class="form-outline">
                                        <input type="text" name="endereco" id="endereçoId" class="form-control form-control-lg" />
                                        <label class="form-label" for="endereçoId">Endereço</label>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-4 mb-4">
                                    <div class="form-outline">
                                        <input type="number" name="numero" id="numeroId" class="form-control form-control-lg" />
                                        <label class="form-label" for="numeroId">Numero</label>
                                    </div>
                                </div>

                                <div class="col-md-4 mb-4">
                                    <div class="form-outline">
                                        <input type="text" name="bairro" id="bairroId" class="form-control form-control-lg" />
                                        <label class="form-label" for="bairroId">Bairro</label>
                                    </div>
                                </div>

                                <div class="col-md-4 mb-4">
                                    <div class="form-outline">
                                        <input type="text" name="cep" id="cepId" class="form-control form-control-lg" required>
                                        <label class="form-label" for="cepId">CEP</label>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" name="cidade" id="floatingSelect" aria-label="Floating label select example">
                                            <option selected>Escolher</option>
                                            <option value="1">Arroio Trinta</option>
                                            <option value="2">Videira</option>
                                            <option value="3">Salto Veloso</option>
                                        </select>
                                        <label for="floatingSelect">Cidade</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" name="estado" id="floatingSelect" aria-label="Floating label select example">
                                            <option selected>Escolher</option>
                                            <option value="AC">Acre</option>
                                            <option value="AL">Alagoas</option>
                                            <option value="AP">Amapá</option>
                                            <option value="AM">Amazonas</option>
                                            <option value="BA">Bahia</option>
                                            <option value="CE">Ceará</option>
                                            <option value="DF">Distrito Federal</option>
                                            <option value="ES">Espírito Santo</option>
                                            <option value="GO">Goiás</option>
                                            <option value="MA">Maranhão</option>
                                            <option value="MT">Mato Grosso</option>
                                            <option value="MS">Mato Grosso do Sul</option>
                                            <option value="MG">Minas Gerais</option>
                                            <option value="PA">Pará</option>
                                            <option value="PB">Paraíba</option>
                                            <option value="PR">Paraná</option>
                                            <option value="PE">Pernambuco</option>
                                            <option value="PI">Piauí</option>
                                            <option value="RJ">Rio de Janeiro</option>
                                            <option value="RN">Rio Grande do Norte</option>
                                            <option value="RS">Rio Grande do Sul</option>
                                            <option value="RO">Rondônia</option>
                                            <option value="RR">Roraima</option>
                                            <option value="SC">Santa Catarina</option>
                                            <option value="SP">São Paulo</option>
                                            <option value="SE">Sergipe</option>
                                            <option value="TO">Tocantins</option>
                                        </select>
                                        <label for="floatingSelect">Estado</label>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 pt-2 float-end">
                                <input class="btn btn-outline-dark btn-lg" type="submit" value="Continuar" />
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include "src/footer.php"
?>