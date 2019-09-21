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
                          <input type="password" id="senha" class="form-control" placeholder="Nova Senha" />
                        </div>
                        <div class="form-group">
                          <input type="password" id="cSenha" class="form-control" placeholder="Confirme a senha">
                        </div>
                        <div class="form-group pt-3">
                            <input type="button" id="recuperar" value="Enviar" class="col-12 btn btn-primary" />
                        </div>
                    </form>
                </div>
                
              </div>

      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js" ></script>
</body>
<script>

        // $("#recuperar").on("click", function(){
        //     var senha = $("#senha").value
        //     var cSenha= $("#cSenha").value

        //     if(senha != cSenha){
        //         alert("senhas nao conferem")
        //     }else{
        //         alert("Sao iguais")
        //     }
        // })



</script>
</html>