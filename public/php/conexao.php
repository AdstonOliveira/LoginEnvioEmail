<?php


function getConn(){
    $username = "soos";
    $host = "127.0.0.1";
    $password="Defusr1303.";
    $database="login_nelson";
    
        $link = mysqli_connect($host, $username, $password, $database) ;
        
        if (!$link) {
            echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
        }
    
        // echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL." . PHP_EOL;
        
        return $link;
}


?>