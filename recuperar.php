<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recuperacao de Senha</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container col-8 h-100">
      <div class="d-flex h-100 align-items-center justify-content-around">

              <div class="card">
                    <h3 class="card-header bg-info">Recuperação de senha</h3>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/localization/messages_pt_BR.min.js"></script>
</body>
<script>

      $(document).ready(function(){
            $("#renovarSenha").validate({
                rules: {
                    senha: {
                        required: true,
                        minlength: 8
                    }, cSenha: {
                        required: true,
                        equalTo: "#senha"
                    }
                }, messages:{
                    senha: {minlength: "No mínimo 8 caracteres"},
                    cSenha: {equalTo: "Senhas não conferem"}
                }
            });
      });



</script>
</html>