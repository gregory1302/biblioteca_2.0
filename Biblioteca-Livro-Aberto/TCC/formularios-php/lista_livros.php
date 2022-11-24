<html>
<?php
include('conexao.php');
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
        <style>
#tabela{
    width:1200px;
    margin:150px ;    
    position: absolute;
    right:0;          
    top:0;           
    text-align:left; 
}
#livros {
  border-collapse: collapse;
  width: 100%;
  background-color: #ddd;

}

#livros td, #livros th {
    border: 2px solid #59429d;
  padding: 8px;
}

#livros tr:nth-child(even){background-color: #f2f2f2;}

#livros tr:hover {background-color: #E6E6FA;}

#livros th {

  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
.button2 {
  background-color: #2a9df4;
  border: 1px solid #13aa52;
  border-radius: 4px;
  box-shadow: rgba(0, 0, 0, .1) 0 2px 4px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  font-family: "Akzidenz Grotesk BQ Medium", -apple-system, BlinkMacSystemFont, sans-serif;
  font-size: 16px;
  font-weight: 400;
  outline: none;
  outline: 0;
  padding: 10px 25px;
  text-align: center;
  transform: translateY(0);
  transition: transform 150ms, box-shadow 150ms;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
} 
.editar{
    color:white;
}
.excluir{
    color:white;
}
.button3 {
  background-color: #FF4141;
  border: 1px solid #13aa52;
  border-radius: 4px;
  box-shadow: rgba(0, 0, 0, .1) 0 2px 4px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  font-family: "Akzidenz Grotesk BQ Medium", -apple-system, BlinkMacSystemFont, sans-serif;
  font-size: 16px;
  font-weight: 400;
  outline: none;
  outline: 0;
  padding: 10px 25px;
  text-align: center;
  transform: translateY(0);
  transition: transform 150ms, box-shadow 150ms;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button2:hover {
  box-shadow: rgba(0, 0, 0, .15) 0 3px 9px 0;
  transform: translateY(-2px);
}

@media (min-width: 768px) {
  .button2 {
    padding: 10px 30px;
  }
}

.button3:hover {
  box-shadow: rgba(0, 0, 0, .15) 0 3px 9px 0;
  transform: translateY(-2px);
}

@media (min-width: 768px) {
  .button3 {
    padding: 10px 30px;
  }
}

.search {
  width: 100%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  border: 3px solid #59429d;
  border-right: none;
  padding: 5px;
  height: 40px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #59429d;
}

.searchTerm:focus{
  color: #59429d;
}

.searchButton {
  width: 50px;
  height: 40px;
  border: 1px solid #59429d;
  background: #59429d;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 25%;
  position: absolute;
  top: 15%;
  left: 25%;
  transform: translate(-50%, -50%);
}

</style>

<?php 
include 'navbar.php';
?>
</head>
<body>
<form action="lista_livros.php" name="pesquisa_livro">
<div class="wrap">
   <div class="search">
      <input type="text" class="searchTerm"  placeholder="pesquisar" name="pesquisa_livro">
      <button  class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
</div>


    </form>

<div id="tabela">
    <h1>Livros catalogados</h1>

        <table id="livros">
            <td><strong>ID</strong></td>
            <td><strong>Título</strong></td>
            <td><strong>Material</strong></td>
            <td><strong>Categoria</strong></td>
            <td><strong>Autor</strong></td>
            <td><strong>Editora</strong></td>
            <td><strong>Ano</strong></td>
            <td><strong>Série</strong></td>
            <td><strong>ISBN</strong></td>
            <td><strong>Exemplares</strong></td>
            <td class="text-center"><strong>Ação</strong></td>
        </tr>

        <?php
        if (isset($_GET['pesquisa_livro'])) {
            $pesquisa_livro = "%" . trim($_GET['pesquisa_livro']) . "%";
            $sql = "SELECT * FROM livros WHERE titulo LIKE '$pesquisa_livro'";
            $query = mysqli_query($conn, $sql);
         while ($dados = mysqli_fetch_array($query)) { ?>
            <tr>
                <td><?php echo $dados['cod_livro'] ?></td>
                <td><?php echo $dados['titulo'] ?></td>
                <td><?php echo $dados['material'] ?></td>
                <td><?php echo $dados['categoria'] ?></td>
                <td><?php echo $dados['autor'] ?></td>
                <td><?php echo $dados['editora'] ?></td>
                <td><?php echo $dados['ano'] ?></td>
                <td><?php echo $dados['serie'] ?></td>
                <td><?php echo $dados['isbn'] ?></td>
                <td><?php echo $dados['exemplares'] ?></td>
                <td colspan="2" class="">    
                <button class="button2">
                <a class='editar' href='edita_livros.php?cod_livro=<?php echo $dados['cod_livro'] ?>'>Editar</a>
                </button>
                <br>
                <br>
                <button class="button3"> 
                 <a class='excluir' href='#' onclick='confirmar("<?php echo $dados['cod_livro'] ?>")'>Excluir</a>
                </button>
                </td>
            </tr>
           
            <?php }}
            else{
                $sql = "SELECT * FROM livros";
                $query = mysqli_query($conn, $sql);
            while ($dados = mysqli_fetch_array($query)) { ?>
             <tr>
                <td><?php echo $dados['cod_livro'] ?></td>
                <td><?php echo $dados['titulo'] ?></td>
                <td><?php echo $dados['material'] ?></td>
                <td><?php echo $dados['categoria'] ?></td>
                <td><?php echo $dados['autor'] ?></td>
                <td><?php echo $dados['editora'] ?></td>
                <td><?php echo $dados['ano'] ?></td>
                <td><?php echo $dados['serie'] ?></td>
                <td><?php echo $dados['isbn'] ?></td>
                <td><?php echo $dados['exemplares'] ?></td>
                <td colspan="2" class="">    
                <button class="button2">
                <a class='editar' href='edita_livros.php?cod_livro=<?php echo $dados['cod_livro'] ?>'>Editar</a>
                </button>
                <br>
                <br>
                <button class="button3"> 
                 <a class='excluir' href='#' onclick='confirmar("<?php echo $dados['cod_livro'] ?>")'>Excluir</a>
                </button>
                </td>
            </tr>
            <?php }}?>
        </table>

        </table>
        <br>
    

</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  

    function confirmar(cod_livro) {
        if (confirm('Você realmente deseja excluir esta linha?'))
            location.href = 'exclui_livros.php?cod_livro=' + cod_livro;
    }
    
</script>
</body>
</html>