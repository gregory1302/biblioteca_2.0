<?php
include('conexao.php');

$cod_leitor = $_GET['cod_leitor'];

$sql = "DELETE FROM leitores WHERE cod_leitor=$cod_leitor";

mysqli_query($conn, $sql);
if (mysqli_affected_rows($conn) > 0) {
    header("Location: lista_leitores.php");
} else {
    echo "<script>alert('Houve algum erro.');</script>";
    mysqli_error($conn);
    echo $conn->error;
}
?>