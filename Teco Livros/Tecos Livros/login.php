<?php
    include "src/headerLogin.php";

?>
    <section class="vh-50 mt-5 text-center">
        <div class="container py-5 h-50">
            <div class="row justify-content-center align-items-center h-50">
                <div class="col-8 col-lg-6 col-xl-4">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <img class="mb-4" src="img/logo1.png" alt="" width="72">
                            <h1 class="h3 mb-3 fw-normal">Por favor preencha os dados</h1>
                            <form action="src/efetua_cliente.php" method="post">

                                <div class="row">
                                    <div class="col-md-12 mb-4">

                                        <div class="form-outline">
                                            <input type="text" id="email" name="email" class="form-control form-control-lg" />
                                            <label class="form-label" for="email">Email</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-2">

                                        <div class="form-outline">
                                            <input type="password" id="senha" name="senha" class="form-control form-control-lg" />
                                            <label class="form-label" for="senha">Senha</label>
                                        </div>

                                    </div>
                                </div>
                                <div class="checkbox mb-3">
                                    <label>
                                        <input type="checkbox" value="remember-me"> Lembrar-me
                                    </label>
                                </div>
                                <div class="checkbox mb-3">
                                    <p>Não tem conta?<a href="cadastro.php"> Cadastre-se</a></p>
                                </div>
                                <button class="w-100 btn btn-lg btn-outline-dark" type="submit"><a href="pagamento.php" class="text-dark"> Continuar</a></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
    include "src/footer.php";
?>