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
                    <form action="#" method="POST" id="novo">
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
                          <input type="password" id="senha" class="form-control" placeholder="Nova Senha" />
                        </div>
                        <div class="form-group">
                          <input type="password" id="cSenha" class="form-control" placeholder="Confirme a senha">
                        </div>
                        <div class="form-group pt-3 d-flex justify-content-between">
                            <input type="button" id="recuperar" value="Cadastrar" class="col-5 btn btn-primary" />
                            <input type="reset" value="Limpar" class="col-5 btn" />
                        </div>
                    </form>
                </div>
                
               </div>
              </div>

      </div>
    </div>
</body>
</html>