<?php 
if(session_status() !== PHP_SESSION_ACTIVE){
  session_cache_expire(-1);
    session_start(); 
}
include('./includes/topo.php'); ?>
<body>
<?php include('./includes/menu.php'); ?>

<div class="border h-100">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-4">

      <div class="card shadow">
        <div class="card-header text-center bg-dark text-light"><h3>Login</h3></div>
        <div class="card-body">
          <form action="../php/login.php" method="POST" id="form">
            <div class="form-group">
              <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="usuario" placeholder="email" />
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
            <a href="./solicitar_nova_senha.php" class="card-link">Esqueceu a senha?</a>
          </div>
        </div>

      </div>
    </div>
  </div>
  </div>
  <?php include('./includes/scripts.php') ?>
</body>
<script>
  $(document).ready(function() {
    $("#login").attr("class","active");
  
    
    $("#form").validate({
      rules: {
        usuario: {
          required: true,
        },
        senha: {
          required: true,
          minlenght: 8
        }
      }
    });

  });
</script>

</html>