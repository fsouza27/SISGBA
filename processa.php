<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$ra = $_POST['ra'];
$email = $_POST['email'];
$curso= $_POST['curso'];
$senha= $_POST['senha'];

$query_select = "SELECT email FROM alunos WHERE email = '$email'";
$select = mysqli_query($con,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['email'];

if($email == "" || $email == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo email deve ser preenchido');window.location.href='cadastroAluno.php';</script>";

    }else{
      if($logarray == $email){
         echo"<script language='javascript' type='text/javascript'>alert('Esse email já está cadastrado!');window.location.href='cadastroAluno.php';</script>";
        die();

      }else{
            $query = "INSERT INTO alunos (nome,ra,email,curso,senha) VALUES ('$nome','$ra','$email','$curso','$senha')";
            $insert = mysqli_query($con,$query);

            if($insert){
              echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.php'</script>";
            }else{
              echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastroAluno.php'</script>";
            }
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

            <?php

            if($linhas == 1){
                echo "Cadastro efetuado com sucesso!";
            }else{
                echo "O cadastro NÂO foi efetuado. <br>Já existe um usuário com este email no sistema!";
            }
            ?>
        </section>
    </div>
</html>
