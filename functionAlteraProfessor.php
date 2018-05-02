<?php

include_once('conexao.php');

$id = $_GET['id'];
$nome = $_GET['nome'];
$rf = $_GET['rf'];
$email = $_GET['email'];
$disciplina = $_GET['disciplina'];

$query = "UPDATE tbl_professores SET nome='$nome', rf='$rf', email='$email', disciplina='$disciplina' WHERE id='$id'";

$update = mysqli_query($con,$query);

    if($update){
      echo"<script language='javascript' type='text/javascript'>alert('Usuário alterado com sucesso!');window.location.href='professores.php'</script>";
  }else{
      echo"<script language='javascript' type='text/javascript'>alert('Não foi possível alterar o registro!');window.location.href='#'</script>";
    }
      
mysqli_close($con);
?>
