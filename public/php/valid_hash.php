<?php
    include 'conexao.php';
    $conn = getConn();

    $hash = mysqli_real_escape_string($conn,$_POST['hash']);
    $sql = "select * from rec_password where hash like '$hash' and ativo = 1";
    $executar = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($executar);

    
    
    if( $row ){
        $disable_hash = "update rec_password set ativo = 0 where hash like '$hash'";
        $executar = mysqli_query($conn, $disable_hash);
        $disable_pwd = "update password set ativo = 0 where cliente_id = $row[4]";
        $exec_disable = mysqli_query($conn, $disable_pwd);
        
        $created = "select created_at from cliente where id = $row[4]";
        $run = mysqli_query($conn, $created);
        $created_at = mysqli_fetch_row($run);
        
        foreach($created_at as $campo)
            echo "campo: $campo <br>";

        $senha = mysqli_real_escape_string( $conn, sha1($_POST['senha'].$created_at[0]) );
        echo "Senha: ".$senha."<br>";

        $nova_senha = "insert into password (cliente_id,password,ativo) values($row[4], '$senha', 1)";
        $executar = mysqli_query($conn, $nova_senha);
        echo "Tudo bem meu bem";
    }else{
        echo "Fail";
    }



?>