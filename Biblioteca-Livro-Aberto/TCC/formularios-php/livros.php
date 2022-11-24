<?php
if (isset($_POST['submit'])) {
    include_once('conexao.php');
    $titulo = $_POST['titulo'];
    $material = $_POST['material'];
    $categoria = $_POST['categoria'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $ano = $_POST['ano'];
    $serie = $_POST['serie'];
    $isbn = $_POST['isbn'];
    $exemplares = $_POST['exemplares'];
    $result = mysqli_query($conn,"INSERT INTO livros(titulo,material,categoria,autor,editora,ano,serie,isbn,exemplares) 
    VALUES ('$titulo','$material','$categoria','$autor','$editora','$ano','$serie','$isbn','$exemplares')");
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
    <title>Livros</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link href='https://unpkg.com/boxicons@2.1.2/dist/boxicons.js' rel='stylesheet'>
</head>
<body>
   
    <h1 >Catálogo de Livros</h1>
    
<form name="cadastro_livros" action="livros.php" method="POST">
    <fieldset class="grupo">
        <div class="campo">
            <label for="livro"><strong>Título do livro</strong></label>
            <input type="text" name="titulo"  required>
        </div>
    </fieldset> 
    <div class="campo">
        <label for="material"><strong>Tipo de material</strong></label>
        <select name="material" id="material" required>
          <option selected disabled value="">Selecione</option>
          <option value="livro">Livro</option>
          <option value="periodico">Periódico</option>
          <option value="artigo">Artigo</option>
        </select>
    </div>

    <div class="campo">
    <label for="categoria"><strong>Categoria</strong></label>
    <select name="categoria" id="categoria" required>
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
            <input type="text" name="autor" id="autor" required>
            </div>
         <div class="campo">
            <label for="editora"><strong>Editora</strong></label>
            <input type="text" name="editora" id="editora" required>
        </div>    
        <div class="campo">
            <label for="ano"><strong>Ano de publicação</strong></label>
            <input type="text" name="ano" id="ano" required>
        </div>  
        <div class="campo">
            <label for="serie"><strong>Série</strong></label>
            <input type="text" name="serie" id="serie" required>
        </div>  
        <div class="campo">
            <label for="ISBN"><strong>ISBN</strong></label>
            <input type="text" name="isbn" id="ISBN" required>
        </div>  
        <div class="campo">
            <label for="exemplares"><strong>Quantidade de exemplares do livro</strong></label>
            <select name="exemplares" id="exemplares" required>
            <option selected disabled value="">Selecione</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            </select>
        </div>

        <button class="btn" type="submit" name="submit" onsubmit="">Cadastrar</button>        
        <a href="menu.php"><button class="btn" type="button" onsubmit="">Voltar</button> </a>  
    
    </form>
 
</body>
</html>