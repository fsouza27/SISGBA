<?php
    session_start();

    $emailt = $_POST['email'];
    $senhat = $_POST['senha'];

//echo $usuariot.' - '.$senhat;
include_once("conexao.php");

$sql="SELECT * FROM usuarios WHERE email='$emailt' AND senha='$senhat' LIMIT 1";

$result=mysqli_query($con,$sql);

// Associative array
//$row=mysqli_fetch_assoc($result);
//printf "%s (%s)\n",$row["nome"],$row["login"];

$resultado = mysqli_fetch_assoc($result);
//Verifica se está trazendo o resultado do banco
//echo 'Usuário: '.$resultado['nome'];
    if(empty($resultado)){
        //Mensagem de erro
        $_SESSION['loginErro']="Usuário ou senha inválidos!";

        //Retorna para a tela de login
        header("Location: index.php");
        }
mysqli_close($con);
?>
