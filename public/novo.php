<?php include_once('./includes/template.php') ?> 

<div class="container col-10 h-100">
      <div class="d-flex h-100 align-items-center justify-content-around">
            <div class="col-5">
              <div class="card">
                    <h3 class="card-header bg-info">Novo Cadastro</h3>
                <div class="card-body">
                    <form action="./php/insert.php" method="POST" id="novo">
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
 <?php include_once('./includes/scripts.php')  ?>
</body>
<script>
    // $(document).ready(function(){
        
    //     $("#novo").validate({
    //         rules: {
    //             nome: {
    //                 required: true,
    //                 minlength: 4,
    //                 maxlength: 12,
    //             }, senha: {
    //                  required: true,
    //                  minlength: 8,
    //                  maxlength: 12,
    //             }, confirmsenha: {
    //                  required: true,
    //                  equalTo: "#senha",
    //             }, email: {
    //                  required: true,
    //                  email: true,
    //             }, cemail: {
    //                  required: true,
    //                  equalTo: "#email",
    //             }
    //         },messages: {
    //             nome: {
    //                 required: "Obrigatório",
    //                 minlength : "Minimo de 4 caracteres",
    //                 maxlength: "Maximo 12 caracteres",
    //             }, senha: {
    //                 minlength: "No minimo 8 caracteres entre letras, numeros e caracter especial",
    //                 maxlength: "No maximo 8 caracteres entre letras, numeros e caracter especial",

    //             }, confirmsenha: {
    //                 required: "A confirmação é obrigatória",
    //                 equalTo: "As senhas não conferem"
    //             }, email: {
    //                 email: "Necessário um formato de email válido",
    //             }, cemail: {
    //                 equalTo: "O email não confere com o informado",
    //             }
    //         }
        
    //     });
    // });
</script>
</html>