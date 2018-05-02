<?php

 //Verifica se o usuário está logado
    session_start();
    if(!isset($_SESSION['emailSession']) AND !isset($_SESSION['senhaSession'])){
        header("Location: sair.php");
        exit;
    }

include_once('conexao.php');

$id = $_GET['id'];
$query = "DELETE FROM alunos WHERE id='$id'";
$insert = mysqli_query($con,$query);

    if($insert){
      echo"<script language='javascript' type='text/javascript'>alert('Usuário excluído!');window.location.href='alunos.php'</script>";
    }else{
      echo"<script language='javascript' type='text/javascript'>alert('Não foi possível excluir o usuário');window.location.href='alunos.php'</script>";
    }
      
?>