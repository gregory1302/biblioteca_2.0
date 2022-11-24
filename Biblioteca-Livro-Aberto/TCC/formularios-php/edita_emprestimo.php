<?php
include('conexao.php');



if (isset($_POST['editar'])) {
    $nome_leitor = $_POST['nome_leitor'];
    $titulo = $_POST['titulo'];
    $data_hoje = $_POST['data_hoje'];
    $data_entrega = $_POST['data_entrega'];
    $cod_emprestimo = $_POST['cod_emprestimo'];

    $sql2 = " select cod_leitor from leitores where nome_leitor = '$nome_leitor'";
    $query2 = mysqli_query($conn, $sql2);
    ($dados = mysqli_fetch_array($query2));
    $cod_leitor = $dados['cod_leitor'];
    $sql2 = " select cod_livro from livros where titulo = '$titulo'";
    $query2 = mysqli_query($conn, $sql2);
    ($dados = mysqli_fetch_array($query2));
    $cod_livro = $dados['cod_livro'];
    /*$result = mysqli_query($conn,"INSERT INTO emprestimos(cod_leitor,cod_livro,data_hoje,data_entrega) 
    VALUES ('$cod_leitor','$cod_livro','$data_hoje','$data_entrega')");*/



    $sql = "UPDATE emprestimos SET 
                cod_leitor='$cod_leitor', 
                cod_livro='$cod_livro', 
                data_hoje='$data_hoje',
                data_entrega='$data_entrega' 
                 
            WHERE cod_emprestimo='$cod_emprestimo'";

    mysqli_query($conn, $sql);
    echo $sql;
    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('Usuário alterado com sucesso.') </script>";
        header("Location: lista_emprestimos.php");
    } else {
        echo "<script> alert('Ocorreu algum erro.') </script>";
    }
} else {
    $cod_emprestimo = $_GET['cod_emprestimo'];
}
$sql = "SELECT leitores.nome_leitor as nome_leitor, livros.titulo as titulo, emprestimos.data_hoje as data_hoje, emprestimos.data_entrega as data_entrega
from leitores, livros, emprestimos 
where leitores.cod_leitor = emprestimos.cod_leitor and livros.cod_livro = emprestimos.cod_livro and emprestimos.cod_emprestimo = $cod_emprestimo
";
$rs = mysqli_query($conn, $sql);
$linha = mysqli_fetch_array($rs);

?>

<?php
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leitores</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>

    <div>
        <h1 id="titulo">Editar empréstimo</h1>
    </div>

    <form class="form" name="cadastro_emprestimo" action="edita_emprestimo.php" method="POST">
        <fieldset class="grupo">
            <div class="campo">

                <label for="cod_leitor"><strong>Nome do leitor</strong></label>
                <input type="text" name="nome_leitor" value="<?= $linha['nome_leitor'] ?>" ; id="nome_leitor" onkeyup="carregar_leitor(this.value)" required>
                <span id="resultado_pesquisa"></span>
            </div>
        </fieldset>
        <div class="campo">
            <label for="cod_livro"><strong>Título do livro</strong></label>
            <input type="text" name="titulo" value="<?= $linha['titulo'] ?>" ; id="titulo" onkeyup="carregar_livro(this.value)" required>
        </div>
        <div class="campo">
            <label for="hoje"><strong>Data do emprestimo</strong></label>
            <input type="date" name="data_hoje" value="<?= $linha['data_hoje'] ?>" ; id="data_hoje" required>
        </div>
        <div class="campo">
            <label for="entrega"><strong>Data da entrega</strong></label>
            <input type="date" name="data_entrega" value="<?= $linha['data_entrega'] ?>" ; id="data_entrega" required>
        </div>

        <input type="hidden" value="<?= $cod_emprestimo ?>" name="cod_emprestimo">
        <!-- Botão para enviar o formulário -->
        <button class="btn" type="submit" name="editar" onsubmit="">Salvar</button>
        <a href="lista_emprestimos.php"><button class="btn" type="button" onsubmit="">Voltar</button> </a>
    </form>



</body>

</html>