<?php
    session_start();
    include 'conexao.php';

    $conn = getConn();

        $nome = mysqli_real_escape_string($conn,$_POST['nome']);
        $email= mysqli_real_escape_string($conn,$_POST['email']);
        
        $sql = "insert into cliente (nome, email) values('$nome','$email')";
        $executar = mysqli_query($conn, $sql);

        $id = $conn->insert_id; //Id inserido
        $query = "select created_at from cliente where id = $id ;"; //pega timestamp
        $value = mysqli_query($conn,$query); // timestamp para compor a senha
        $row = mysqli_fetch_row($value);
        
        $senha = mysqli_real_escape_string($conn, SHA1($_POST['senha'].$row[0]) );
        mysqli_free_result($value);

        $sql2= "insert into password (password, cliente_id) values( '$senha', $id )";
        
        mysqli_query($conn, $sql2);
        $conn->close();
        header('location:../views/login.php');
?>