<?php

include_once('conexao.php');

$id = $_GET['id'];
$nome = $_GET['nome'];
$ra = $_GET['ra'];
$email = $_GET['email'];
$curso = $_GET['curso'];

$query = "UPDATE alunos SET nome='$nome', ra='$ra', email='$email', curso='$curso' WHERE id='$id'";

$update = mysqli_query($con,$query);

    if($update){
      echo"<script language='javascript' type='text/javascript'>alert('Usuário alterado com sucesso!');window.location.href='alunos.php'</script>";
  }else{
      echo"<script language='javascript' type='text/javascript'>alert('Não foi possível alterar o usuário');window.location.href='alteraAluno.php'</script>";
    }
      
mysqli_close($con);
?>
