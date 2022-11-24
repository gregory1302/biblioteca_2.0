
<?php
include('conexao.php');

$cod_livro = $_GET['cod_livro'];

if (isset($_POST['editar'])) {
    $titulo = $_POST['titulo'];
    $material = $_POST['material'];
    $categoria = $_POST['categoria'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $ano = $_POST['ano'];
    $serie = $_POST['serie'];
    $isbn = $_POST['isbn'];
    $exemplares = $_POST['exemplares'];
 

    $sql = "UPDATE livros SET 
                titulo='$titulo', 
                material='$material', 
                categoria='$categoria',
                autor='$autor' ,
                editora='$editora' ,
                ano='$ano' ,
                serie='$serie' ,
                isbn='$isbn' ,
                exemplares='$exemplares' 
            WHERE cod_livro='$cod_livro'";
    echo $sql;
    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('Usuário alterado com sucesso.') </script>";
        header("Location: lista_livros.php");
    } else {
        echo "<script> alert('Ocorreu algum erro.') </script>";
    }
}
$sql = "SELECT * FROM livros WHERE cod_livro=$cod_livro";
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
    <title>Livros</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
     
    <div> 
        <h1 id="titulo">Editar Livro</h1>
    </div>

    <form name="cadastro_livro" form action="edita_livros.php?cod_livro=<?php echo $cod_livro ?>" method="POST">
    <fieldset class="grupo">
        <div class="campo">
            <label for="livro"><strong>Título do livro</strong></label>
            <input type="text" name="titulo"  value="<?php echo $linha['titulo']; ?> " required>
        </div>
    </fieldset> 
    <div class="campo">
        <label for="material"><strong>Tipo de material</strong></label>
        <select name="material" id="material" value="<?php echo $linha['material']; ?> " required>
          <option selected disabled value="">Selecione</option>
          <option value="livro">Livro</option>
          <option value="periodico">Periódico</option>
          <option value="artigo">Artigo</option>
        </select>
    </div>

    <div class="campo">
    <label for="categoria"><strong>Categoria</strong></label>
    <select name="categoria" id="categoria" value="<?php echo $linha['categoria']; ?> " required>
    <option selected disabled value="">Selecione</option>
    <option value="Artes">Artes</option>
    <option value="Auto ajuda">Auto ajuda</option>
    <option value="Biografia">Biografia</option>
    <option value="Ciências sociais">Ciências sociais</option>
    <option value="Crônica brasileira">Crônica brasileira</option>
    <option value="Culinária">Culinária</option>
    <option value="Cultura">Cultura</option>
    <option value="Dicionário">Dicionário</option>
    <option value="Direito">Direito</option>
    <option value="Educação">Educação</option>
    <option value="Ficção">Ficção Científica</option>
    <option value="Filosofia">Filosofia</option>
    <option value="Geografia">Geografia</option>
    <option value="História">História</option>
    <option value="Línguas">Línguas</option>
    <option value="Literatura alemã">Literatura alemã</option>
    <option value="Literatura argentina espanhola">Literatura argentina espanhola</option>
    <option value="Literatura brasileira">Literatura brasileira</option>
    <option value="Literatura estadunidense">Literatura estadunidense</option>
    <option value="Literatura estrangeira">Literatura estrangeira</option>
    <option value="Literatura francesa">Literatura francesa</option>
    <option value="Literatura infanto juvenil">Literatura infanto juvenil</option>
    <option value="Literatura inglesa">Literatura inglesa</option>
    <option value=" Literatura juvenil">Literatura juvenil</option>
    <option value="Matemática">Matemática</option>
    <option value="Poesia brasileira">Poesia brasileira</option>
    <option value="Psicologia">Psicologia</option>
    <option value="Religião">Religião</option>
    <option value="Romance brasileiro">Romance brasileiro</option>
    <option value="Romance estrangeiro">Romance estrangeiro</option>
    <option value="Saúde">Saúde</option>
    <option value="Teatro brasileiro">Teatro brasileiro</option>
    </select>
    </div>
</p>
        <div class="campo">
            <label for="autor"><strong>Autor</strong></label>
            <input type="text" name="autor" id="autor" value="<?php echo $linha['autor']; ?> " required>
            </div>
         <div class="campo">
            <label for="editora"><strong>Editora</strong></label>
            <input type="text" name="editora" id="editora" value="<?php echo $linha['editora']; ?> " required>
        </div>    
        <div class="campo">
            <label for="ano"><strong>Ano de publicação</strong></label>
            <input type="text" name="ano" id="ano" value="<?php echo $linha['ano']; ?> " required>
        </div>  
        <div class="campo">
            <label for="serie"><strong>Série</strong></label>
            <input type="text" name="serie" id="serie" value="<?php echo $linha['serie']; ?> " required>
        </div>  
        <div class="campo">
            <label for="ISBN"><strong>ISBN</strong></label>
            <input type="text" name="isbn" id="ISBN"  value="<?php echo $linha['isbn']; ?> " required>
        </div>  
        <div class="campo">
            <label for="exemplares"><strong>Quantidade de exemplares do livro</strong></label>
            <select name="exemplares" id="exemplares" value="<?php echo $linha['exemplares']; ?> " required>
            <option selected disabled value="">Selecione</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            </select>
        </div>


        <!-- Botão para enviar o formulário -->
        <button class="btn" type="submit" name="editar" onsubmit="">Salvar</button>            
        <a href="lista_livros.php"><button class="btn" type="button" onsubmit="">Voltar</button> </a>    
    </form>



</body>

</html>