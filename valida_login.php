<?php
    session_start();
include_once("conexao.php");

    $emailt = $_POST['email'];
    $senhat = $_POST['senha'];


$sql="SELECT * FROM alunos WHERE email='$emailt' AND senha='$senhat' LIMIT 1";
//$sqlProfessor="SELECT * FROM tbl_professores WHERE email='$emailt' AND senha='$senhat' LIMIT 1";

$result=mysqli_query($con,$sql);
//$resultProfessor=mysqli_query($con,$sqlProfessor);


$resultado = mysqli_fetch_assoc($result);
//$resultadoProfessor = mysqli_fetch_assoc($resultAluno);
//Verifica se está trazendo o resultado do banco
//echo 'Usuário: '.$resultado['nome'];
    if(empty($resultado)){
        //if(empty($resultadoAluno)){
        
        //Mensagem de erro
        $_SESSION['loginErro']="Usuário ou senha inválidos!";
          echo"<script language='javascript' type='text/javascript'>alert('Login ou senha incorretos');window.location.href='login.php';</script>";
          die();
        }else{
          setcookie("email",$resultado['nome']);
            $_SESSION['emailSession'] = $emailt;
            $_SESSION['senhaSession'] = $senhat;

          header("Location:index.php");
    
        }



mysqli_close($con);
?>
