<?php
 //Verifica se o usuário está logado
    session_start();

    if(!isset($_SESSION['emailSession']) AND !isset($_SESSION['senhaSession'])){
        header("Location: login.php");
        exit;
    }

include_once("conexao.php");

$nome = $_POST['nome'];
$rf = $_POST['rf'];
$email = $_POST['email'];
$disciplina = $_POST['disciplina'];
$senha= $_POST['senha'];
$confSenha = $_POST['confSenha'];

$query_select = "SELECT email FROM tbl_professores WHERE email = '$email'";
$select = mysqli_query($con,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['email'];

if($confSenha != $senha) {
     echo"<script language='javascript' type='text/javascript'>alert('As senhas não conferem!');window.location.href='cadastroProfessor.php';</script>";
} elseif($email == "" || $email == null) {
        echo"<script language='javascript' type='text/javascript'>alert('O campo email deve ser preenchido!');window.location.href='cadastroProfessor.php';</script>";
        }elseif($logarray == $email){
             echo"<script language='javascript' type='text/javascript'>alert('Esse email já está cadastrado!');window.location.href='cadastroProfessor.php';</script>";
            die();

          }else {
                $query = "INSERT INTO tbl_professores (nome,rf,email,disciplina,senha) VALUES ('$nome','$rf','$email','$disciplina','$senha')";
                $insert = mysqli_query($con,$query);

                    if($insert){
                      echo"<script language='javascript' type='text/javascript'>alert('Professor cadastrado com sucesso!');window.location.href='professores.php'</script>";
                    }else{
                      echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar!');window.location.href=''</script>";
                    }
          }
    




/*
$verifica = mysqli_query($con,$sql_verifica);
$existente = mysqli_affected_rows($con);

    if(existente == 1){
        echo"<script language='javascript' type='text/javascript'>alert('Já existe um usuário cadastrado com estes dados!');window.location.href='cadastroAluno.php';</script>";
        mysqli_close($con);
        die();
    }else{
*/


/*

$sql = "INSERT INTO alunos(nome,email,ra,curso,senha) VALUES('$nome','$email','$ra','$curso','$senha')";

$salvar = mysqli_query($con,$sql);
$linhas=mysqli_affected_rows($con);


mysqli_close($con);

    }

//header('Location:cadastroAluno.php');
*/
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="css/estilo.css">
    </head>

<body class="cover">

</body>
    <div class="container">
        <section>
            <h1>Confirmação de cadastro</h1>
            <hr><br><br>
/*
            <?php/*
            $linhas=mysqli_affected_rows($con);
            if($linhas == 1){
                echo "Cadastro efetuado com sucesso!";
            }else{
                echo "O cadastro NÂO foi efetuado. <br>Já existe um usuário com este email no sistema!";
            }
            mysqli_close($con);
            */?>
        </section>
    </div>
</html>
