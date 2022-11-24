<?php
if (isset($_POST['submit'])) {
    include_once('conexao.php');
    $nome_leitor = $_POST['nome_leitor'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data_nasc = $_POST['data_nasc'];
    $endereco = $_POST['endereco'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];

    $result = mysqli_query($conn,"INSERT INTO leitores(nome_leitor,email,telefone,data_nasc,endereco,cpf,rg) 
    VALUES ('$nome_leitor','$email','$telefone','$data_nasc','$endereco','$cpf','$rg')");

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
    <title>Leitores</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    

</head>
<body>
     
    <div> 
        <h1>Cadastro de Leitores</h1>
    </div>
    <form name="cadastro_leitor" action="leitores.php" method="POST">

        <fieldset class="grupo">
            <!-- Campo do nome com legenda "nome" e css de classe "campo" -->
            <div class="campo">
                <label for="nome"><strong>Nome</strong></label>
                <input type="text" name="nome_leitor" id="nome_leitor" required>
            </div>

           
        </fieldset> 

        <!-- Campo de email -->
        <div class="campo">
            <label for="email"><strong>Email</strong></label>
            <input type="email" name="email" id="email" required>
        </div>

        <div class="campo">
            <label for="telefone"><strong>Telefone</strong></label>
            <input type="text" name="telefone" id="telefone" required>
        </div>
        <div class="campo">
            <label for="dn"><strong>Data de nascimento</strong></label>
            <input type="date" name="data_nasc" id="" required>
        </div>
        <div class="campo">
            <label for="endereco"><strong>Endereço</strong></label>
            <input type="text" name="endereco" id="endereco" required>
        </div>
        <div class="campo">
            <label for="cpf"><strong>CPF</strong></label>
            <input type="text" name="cpf" id="cpf" required>
        </div>
        <div class="campo">
            <label for="RG"><strong>RG</strong></label>
            <input type="text" name="rg" id="RG" required>
        </div>

        <!-- Botão para enviar o formulário -->
        <a href="/lista_leitores.php"><button class="btn" type="submit" name="submit" onsubmit="">Cadastrar</button> </a>  
                  
        <a href="menu.php"><button class="btn" type="button" onsubmit="">Voltar</button> </a>  
    </form>
<br>

</body>

</html>