<?php

    session_start();
    include 'conexao.php';

    $conn = getConn();

    
        $nome = $_POST['nome'];
        $email= $_POST['email'];
        $senha = $_POST['password'];

        $sql = "insert into cliente (nome, email) values('$nome','$email')";
        $executar = mysqli_query($conn, $sql);

        // $sql2= "insert into password (password, cliente_id) values( '1234', $conn->insert_id )";
    $id = "select id from cliente where email = '$email'";
    $c = mysqli_query($conn, $id);

        $sql3="insert into password (password, cliente_id) values ('321', $id );";

        // mysqli_query($conn, $sql2);
        mysqli_query($conn, $sql3);
        if($executar)
        {
            echo "OK";
            return true;

        }else{
            echo "PQP!";
            return false;
        }
    
        close();

?>