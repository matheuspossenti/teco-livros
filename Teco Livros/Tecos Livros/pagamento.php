<?php
include "src/verificar_cliente.php";
include "src/headerPgto.php";
$carrinho = $_SESSION['carrinho'];
$total = $_SESSION['total'];
?>

<div class="card shadow-2-strong container my-5">
    <main class="py-5 card-body">
        <div class="text-center">
            <h2>Pagamento</h2>
            <p class="lead">Chegou a hora de realizar o pagamento. Preencha corretamente os dados abaixo para
                finalizar sua compra!</p>
        </div>

        <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">

                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Seu carrinho</span>
                    <span class="badge bg-primary rounded-pill"><?= count($carrinho) ?></span>
                </h4>

                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (BRL)</span>
                        <strong>R$ <?php
                                    echo number_format($total, 2, ',', '.')
                                    ?></strong>
                    </li>
                </ul>

                <form class="card p-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cupom de desconto">
                        <button type="submit" class="btn btn-dark">Utilizar</button>
                    </div>
                </form>

            </div>

            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Endereço para envio</h4>
                <form id="pagamentoForm" name="pagamento" role="form">
                    <div class="row g-3">

                        <div class="col-12">

                            <div class="form-outline">
                                <input type="text" id="Address" class="form-control form-control-lg">
                                <label class="form-label" for="Address">Endereço</label>
                            </div>

                            <div class="invalid-feedback">
                                Por favor insira um endereço válido.
                            </div>

                        </div>

                        <div class="col-8">

                            <div class="form-outline">
                                <input type="text" id="complemento" class="form-control form-control-lg">
                                <label class="form-label" for="complemento">Complemento</label>
                            </div>

                        </div>

                        <div class="col-4">

                            <div class="form-outline">
                                <input type="number" id="Number" class="form-control form-control-lg">
                                <label class="form-label" for="Number">Numero</label>
                            </div>

                            <div class="invalid-feedback">
                                Por favor insira um número válido.
                            </div>

                        </div>

                        <div class="col-6">

                            <div class="form-outline">
                                <input type="text" id="Bairro" class="form-control form-control-lg">
                                <label class="form-label" for="Bairro">Bairro</label>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-outline">
                                <input type="text" id="CEP" class="form-control form-control-lg">
                                <label class="form-label" for="CEP">CEP</label>
                            </div>

                            <div class="invalid-feedback">
                                CEP necessário.
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-floating">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
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

                            <div class="invalid-feedback">
                                Por favor selecione um estado.
                            </div>

                        </div>

                        <div class="col-md-6 mb-4">

                            <div class="form-floating">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                    <option selected>Escolher</option>
                                    <option value="1">Arroio Trinta</option>
                                    <option value="2">Videira</option>
                                    <option value="3">Salto Veloso</option>
                                </select>
                                <label for="floatingSelect">Cidade</label>
                            </div>

                            <div class="invalid-feedback">
                                Por favor selecione uma cidade.
                            </div>

                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="same-address">
                        <label class="form-check-label" for="same-address">Confirmo que o endereço está
                            correto.</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="save-info">
                        <label class="form-check-label" for="save-info">Salvar informações para próxima
                            compra.</label>
                    </div>

                    <hr class="my-4">

                    <h4 class="mb-3">Pagamento</h4>

                    <div class="my-3">

                        <div class="form-check">
                            <input id="credit" type="radio" class="form-check-input" checked>
                            <label class="form-check-label" for="credit">Cartão de Crédito</label>
                        </div>

                        <div class="form-check">
                            <input id="debit" type="radio" class="form-check-input">
                            <label class="form-check-label" for="debit">Cartão de Débito</label>
                        </div>

                        <div class="form-check">
                            <input id="paypal" type="radio" class="form-check-input">
                            <label class="form-check-label" for="paypal">PayPal</label>
                        </div>

                    </div>

                    <div class="row gy-3">

                        <div class="col-md-6">

                            <div class="form-outline">
                                <input type="text" id="cc-name" class="form-control form-control-lg">
                                <label class="form-label" for="cc-name">Nome no cartão</label>
                            </div>

                            <div class="invalid-feedback">
                                Nome no cartão necessário
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-outline">
                                <input type="text" id="cc-number" class="form-control form-control-lg">
                                <label class="form-label" for="cc-number">Número do cartão</label>
                            </div>

                            <div class="invalid-feedback">
                                Número do cartão de crédito necessário
                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="form-outline">
                                <input type="text" id="cc-expiration" class="form-control form-control-lg">
                                <label class="form-label" for="cc-expiration">Validade do cartão</label>
                            </div>

                            <div class="invalid-feedback">
                                Validade necessária
                            </div>

                        </div>

                        <div class="col-md-3">

                            <div class="form-outline">
                                <input type="text" id="cc-cvv" class="form-control form-control-lg">
                                <label class="form-label" for="cc-cvv">CVV</label>
                            </div>

                            <div class="invalid-feedback">
                                CVV necessário
                            </div>

                        </div>
                    </div>

                    <hr class="my-4">

                    <button class="w-100 btn btn-outline-dark btn-lg" type="submit">Finalizar compra</button>
                </form>
                <div class="modal fade" id="pagamento-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">A sua compra está quase terminando</h5>
                                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">Aguarde a confirmação do pagamento</div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-dark" data-mdb-dismiss="modal">
                                    Fechar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<script type="text/javascript" src="js/form_modal.js"></script>

<?php
include "src/footer.php"
?>