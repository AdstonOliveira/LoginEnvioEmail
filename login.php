<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container col-8 h-100">
      <div class="d-flex h-100 align-items-center justify-content-around">

              <div class="card">
                    <h3 class="card-header bg-info">Login</h3>
                <div class="card-body">
                    <form action="" method="POST" id="form">
                        <div class="form-group">
                          <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario" />
                        </div>
                        <div class="form-group">
                          <input type="password" name="senha" id="senha" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group pt-3">
                            <input type="submit" id="enviar" value="Entrar" class="col-12 btn btn-primary" />
                        </div>
                    </form>
                    <div class="d-flex justify-content-between">
                        <a href="./novo.php" class="card-link">Novo por aqui?</a>
                        <a href="./recuperar.php" class="card-link">Esqueceu a senha?</a>
                    </div>
                </div>
                
              </div>

      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/localization/messages_pt_BR.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
</body>
<script>

    $(document).ready(function(){
        $("#form").validate({
            rules: {
              usuario: {
                required: true,
              },
              senha: {
                required : true,
                minlenght: 8
              }
            }
        });

        

       








    });



</script>
</html>