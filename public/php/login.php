<?php 

    include 'conexao.php';
    include 'comparaSenha.php';
    
    $conn = getConn();

    $nome = mysqli_real_escape_string($conn,$_POST['nome']);
    $email= mysqli_real_escape_string($conn,$_POST['email']);

    $sql = "select id, created_at from cliente where email LIKE '$email'";
    $result = mysqli_query($conn,$sql) or die(' Erro na query:' . $sql . ' ' . mysql_error() );
    $row = mysqli_fetch_row($result);
    
    if($row){
        $created = $row[1];
        $senha = mysqli_real_escape_string($conn, SHA1($_POST['senha'].$created) );
        
        if(comparaSenha($row[0], $senha)){
            header('location:../views/teste.html');
        }else{
            header("location:../views/login.php");
        }
        /* free result set */
    }else{
        echo "email inválido";
    }
    
    
    mysqli_free_result($result);
    $conn->close();

?>