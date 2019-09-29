
<?php

function comparaSenha($id, $informada)
{
    $sql = "select password from password where cliente_id=$id and ativo=1";
    $result = mysqli_query($conn = getConn(), $sql) or die(' Erro na query:' . $sql);
    $row = mysqli_fetch_row($result);

    if ($row) {
        $pwd = $row[0];

        mysqli_free_result($result);
        $conn->close();
        return $pwd == $informada;
    } else {
        echo "Um erro ocorreu";
    }
    mysqli_free_result($result);
    $conn->close();
}
?>