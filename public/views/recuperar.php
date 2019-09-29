<?php include('./includes/topo.php'); ?>
<body>
    <?php include('./includes/menu.php'); ?>
    <div class="border h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-4">

                <div class="card shadow">
                    <div class="card-header text-center bg-dark text-light">
                        <h3>Recuperação de senha</h3>
                    </div>
                    <div class="card-body">
                        <form action="./login.php" method="GET" id="renovarSenha">
                            <div class="form-group">
                                <input type="password" id="senha" name="senha" class="form-control" placeholder="Nova Senha" />
                            </div>
                            <div class="form-group">
                                <input type="password" id="cSenha" name="cSenha" class="form-control" placeholder="Confirme a senha">
                            </div>
                            <div class="form-group pt-3">
                                <input type="submit" id="recuperar" value="Enviar" class="col-12 btn btn-primary" />
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <?php include('./includes/scripts.php') ?>

</body>
<script>
    $(document).ready(function() {
        $("#recuperar").attr("class","active");
        $("#renovarSenha").validate({
            rules: {
                senha: {
                    required: true,
                    minlength: 8
                },
                cSenha: {
                    required: true,
                    equalTo: "#senha"
                }
            },
            messages: {
                senha: {
                    minlength: "No mínimo 8 caracteres"
                },
                cSenha: {
                    equalTo: "Senhas não conferem"
                }
            }
        });
    });
</script>

</html>