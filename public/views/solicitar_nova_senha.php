<?php include('./includes/topo.php'); ?>
<body>
    <?php include('./includes/menu.php'); ?>
    <div class="border h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-4">

                <div class="card shadow">
                    <div class="card-header text-center bg-dark text-light">
                        <h3>Esqueci minha senha</h3>
                    </div>
                    <div class="card-body">
                        <form action="../php/solicitacao.php" method="POST" id="renovarSenha">
                            <div class="form-group">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email cadastrado" />
                            </div>
                            <div class="form-group pt-3">
                                <input type="submit" id="recuperar" value="Solicitar" class="col-12 btn btn-primary" />
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>




    <?php include('./includes/scripts.php') ?>
</body>
</html>