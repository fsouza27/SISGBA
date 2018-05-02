<?php

 //Verifica se o usuário está logado
    session_start();
    if(!isset($_SESSION['emailSession']) AND !isset($_SESSION['senhaSession'])){
        header("Location: sair.php");
        exit;
    }

include_once('conexao.php');

$id = $_GET['id'];
$query = "DELETE FROM tbl_professores WHERE id='$id'";
$delete = mysqli_query($con,$query);

    if($delete){
      echo"<script language='javascript' type='text/javascript'>alert('Usuário excluído!');window.location.href='professores.php'</script>";
    }else{
      echo"<script language='javascript' type='text/javascript'>alert('Não foi possível excluir o usuário');window.location.href='professores.php'</script>";
    }
      
?>