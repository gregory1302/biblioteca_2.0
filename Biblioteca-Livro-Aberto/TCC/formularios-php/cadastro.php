<html>

<?php
include('conexao.php');
?>
<head>
<title> Cadastro de Usuário </title>
</head>
<body>
<form method="POST" action="cadastro.php">
<label>Usuário:</label><input type="text" name="usuario" id="usuario"><br>
<label>Senha:</label><input type="password" name="senha" id="senha"><br>
<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
</form>


</body>

<?php

$usuario = $_POST['usuario'];
$senha = MD5($_POST['senha']);
$query_select = "SELECT usuario FROM funcionario WHERE usuario = '$usuario'";
$select = mysql_query($query_select,$conn);
$array = mysql_fetch_array($select);
$logarray = $array['usuario'];

  if($usuario == "" || $usuario == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo login deve ser preenchido');window.location.href='
    cadastro.php';</script>";

    }else{
      if($logarray == $usuario){

        echo"<script language='javascript' type='text/javascript'>
        alert('Esse login já existe');window.location.href='
        cadastro.php';</script>";
        die();

      }else{
        $query = "INSERT INTO funcionario (usuario,senha) VALUES ('$usuario','$senha')";
        $insert = mysql_query($query,$conn);

        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='login.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');window.location
          .href='cadastro.php'</script>";
        }
      }
    }
?>
</html>