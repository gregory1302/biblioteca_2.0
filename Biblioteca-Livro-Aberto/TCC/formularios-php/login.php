
<!DOCTYPE html>
<?php
include('conexao.php');


?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Login</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>
    
</head>
<body>
    <main class="login">
      <div class="login__container">
          <img src="img/avatar.png" alt="">
        <h2 class="login__title">Entrar no Livro Aberto</h2>
        <form action="menu.php" method="POST" class="login__form">
          <input class="login__input" name="usuario" type="text" placeholder="Nome usuário" />
          <span class="login__input-border"></span>
          <input class="login__input" name="senha" type="password"  placeholder="Senha"/>
          <span class="login__input-border"></span>
          <input class="login__submit" type="submit" value="Entrar" name="Entrar"><br>
         
          
        </form>
      </div>
    </main>
    <?php
$usuario = $_POST['usuario'];
$entrar = $_POST['entrar'];
$senha = md5($_POST['senha']);

  if (isset($entrar)) {

    $verifica = mysql_query("SELECT * FROM funcionario WHERE usuario =
    '$usuario' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysql_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Usuário e/ou senha incorretos');window.location
        .href='login.php';</script>";
        die();
      }else{
        setcookie("usuario",$usuario);
        header("Location:menu.php");
      }
  }
?>
  </body>
  
</html>
