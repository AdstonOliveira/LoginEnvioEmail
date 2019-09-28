<?php

    session_start();
    include 'conexao.php';

    $conn = getConn();

        $nome = $_POST['nome'];
        $email= $_POST['email'];
        $senha = SHA1($_POST['senha']);

        // echo $nome . $email . $senha;

        $sql = "insert into cliente (nome, email) values('$nome','$email')";
        $executar = mysqli_query($conn, $sql);

        $sql2= "insert into password (password, cliente_id) values( '$senha', $conn->insert_id )";
        $relacao = mysqli_query($conn, $sql2);
    
?>