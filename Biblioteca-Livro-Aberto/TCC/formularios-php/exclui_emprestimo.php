<?php
include('conexao.php');

$cod_emprestimo = $_GET['cod_emprestimo'];

$sql = "DELETE FROM emprestimos WHERE cod_emprestimo=$cod_emprestimo";

mysqli_query($conn, $sql);
if (mysqli_affected_rows($conn) > 0) {
    header("Location: lista_emprestimos.php");
} else {
    echo "<script>alert('Houve algum erro.');</script>";
    mysqli_error($conn);
    echo $conn->error;
}
?>
