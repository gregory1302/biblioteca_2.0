<?php
if (isset($_POST['submit'])) {
    include_once('conexao.php');
    $nome_leitor = $_POST['nome_leitor'];
    $titulo = $_POST['titulo'];
    $data_hoje = $_POST['data_hoje'];
    $data_entrega = $_POST['data_entrega'];
    $sql2 = " select cod_leitor from leitores where nome_leitor LIKE  '%$nome_leitor%' ";
    $query2 = mysqli_query($conn, $sql2);
    ($dados2 = mysqli_fetch_array($query2));
    $cod_leitor = $dados2['cod_leitor'];
    $sql3 = " select cod_livro from livros where titulo = '$titulo'";
    $query3 = mysqli_query($conn, $sql3);
    ($dados3 = mysqli_fetch_array($query3));
    $cod_livro = $dados3['cod_livro'];
    $sql = "INSERT INTO emprestimos(cod_leitor,cod_livro,data_hoje,data_entrega) 
    VALUES ('$cod_leitor','$cod_livro','$data_hoje','$data_entrega')";
    $result = mysqli_query($conn, $sql);
    //echo $sql;
    //echo $dados2['cod_leitor'];
}
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
    <title>Empréstimo de Livros</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/estilo.css">

</head>

<body>

    <h1>Agendamento de empréstimo</h1>
    <form class="form" name="cadastro_emprestimo" action="emprestimo.php" method="POST">
        <fieldset class="grupo">
            <div class="campo">

                <label for="cod_leitor"><strong>Nome do leitor</strong></label>
                <input type="text" name="nome_leitor" id="nome_leitor" onkeyup="carregar_leitor(this.value)" required>
                <span id="resultado_pesquisa"></span>
            </div>
        </fieldset>
        <div class="campo">
            <label for="cod_livro"><strong>Título do livro</strong></label>
            <input type="text" name="titulo" id="titulo" onkeyup="carregar_livro(this.value)" required>
        </div>
        <div class="campo">
            <label for="hoje"><strong>Data do emprestimo</strong></label>
            <input type="date" name="data_hoje" id="data_hoje" required>
        </div>
        <div class="campo">
            <label for="entrega"><strong>Data da entrega</strong></label>
            <input type="date" name="data_entrega" id="data_entrega" required>
        </div>

        <button class="btn" type="submit" name="submit" onsubmit="">Cadastrar</button>

        <a href="menu.php"><button class="btn" type="button" onsubmit="">Voltar</button> </a>
    </form>
    <script src="js/custon.js"></script>


</body>

</html>