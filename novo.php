<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novo usuario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container col-10 h-100">
      <div class="d-flex h-100 align-items-center justify-content-around">
            <div class="col-5">
              <div class="card">
                    <h3 class="card-header bg-info">Novo Cadastro</h3>
                <div class="card-body">
                    <form action="./login.php" method="get" id="novo">
                        <div class="form-group">
                            <input type="text" name="nome" id="nome" class="form-control" placeholder="Seu nome" required />
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" required />
                        </div>
                        <div class="form-group">
                            <input type="email" name="cemail" id="cemail" class="form-control" placeholder="Confirme o email" required />
                        </div>
                        <div class="form-group">
                          <input type="password" name="senha" id="senha" class="form-control" placeholder="Nova Senha" required>
                        </div>
                        <div class="form-group">
                          <input type="password" name="confirmsenha" id="confirmsenha" class="form-control" placeholder="Confirme a senha">
                        </div>
                        <div class="form-group pt-3 d-flex justify-content-between">
                            <input type="submit" id="cadastrar" value="Cadastrar" class="col-5 btn btn-primary" />
                            <input type="reset" value="Limpar" class="col-5 btn" />
                        </div>
                    </form>
                </div>
                
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
        
        $("#novo").validate({
            rules: {
                nome: {
                    required: true,
                    minlength: 4,
                    maxlength: 12,
                }, senha: {
                     required: true,
                     minlength: 8,
                     maxlength: 12,
                }, confirmsenha: {
                     required: true,
                     equalTo: "#senha",
                }, email: {
                     required: true,
                     email: true,
                }, cemail: {
                     required: true,
                     equalTo: "#email",
                }
            },messages: {
                nome: {
                    required: "Obrigatório",
                    minlength : "Minimo de 4 caracteres",
                    maxlength: "Maximo 12 caracteres",
                }, senha: {
                    minlength: "No minimo 8 caracteres entre letras, numeros e caracter especial",
                    maxlength: "No maximo 8 caracteres entre letras, numeros e caracter especial",

                }, confirmsenha: {
                    required: "A confirmação é obrigatória",
                    equalTo: "As senhas não conferem"
                }, email: {
                    email: "Necessário um formato de email válido",
                }, cemail: {
                    equalTo: "O email não confere com o informado",
                }
            }
        
        });
    });
</script>
</html>