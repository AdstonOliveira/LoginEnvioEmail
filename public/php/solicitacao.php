<?php
    session_start();
    include 'conexao.php';  
    $conn = getConn();
    
    $email = mysqli_real_escape_string($conn,$_POST['email']);

    $sql = "select * from cliente where email = '$email'";

    $result = mysqli_query($conn,$sql) or die(' Erro na query:' . $sql . ' ' . mysql_error() );
    $row = mysqli_fetch_row($result);
    
    if($row){
        $cliente_id = ($row[0]);
        $cliente_nome = sha1($row[1]);
        $cliente_email = sha1($row[2]);
        $cliente_created = sha1($row[3]);
        
        $validHash = sha1($cliente_id.$cliente_nome.$cliente_email.$cliente_created);

        save($validHash, $cliente_id);

        include './phpmail/envio.php';

        define('email',"$email");
        $_SESSION['mensagem'] = 
        "<a href='http://localhost/LoginNelson/public/php/recuperar.php/$validHash'>Clique aqui</a>";

        // if(comparaSenha($row[0], $senha)){
        //     header('location:../views/teste.html');
        // }else{
        //     header("location:../views/login.php");
        // }
        /* free result set */
    }else{
        echo "email inválido";
    }
    
    
     function save($hash, $id){
        $conn = getConn();
        $sql = "insert into rec_password (hash, ativo, cliente_id) values ('$hash', 1, '$id')";
        $executar = mysqli_query( $conn, $sql) or die(' Erro na query:' . $sql . ' ' . mysql_error());

        // header('location:../views/login.php');

        echo "Salve galera";
        return true;
    }

?>