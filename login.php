<?php include_once('./public/includes/template.php') ?>
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
                        <a href="./public/novo.php" class="card-link">Novo por aqui?</a>
                        <a href="./public/recuperar.php" class="card-link">Esqueceu a senha?</a>
                    </div>
                </div>
                
              </div>

      </div>
    </div>

<?php include_once('./public/includes/scripts.php') ?>
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