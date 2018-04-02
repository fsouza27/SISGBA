<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$ra = $_POST['ra'];
$email = $_POST['email'];
$curso= $_POST['curso'];
$senha= $_POST['senha'];

$sql = "INSERT INTO alunos(nome,email,ra,curso,senha) VALUES('$nome','$email','$ra','$curso','$senha')";

$salvar = mysqli_query($con,$sql);

$linhas=mysqli_affected_rows($con);

mysqli_close($con);
//header('Location:http://localhost/sisgba/cadastro_professor.php');

?>

<?php
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
        <nav>
            <ul class="menu">
                <a href="cadastro.php"><li>Cadastro</li></a>
                <a href="consulta.php"><li>Consulta</li></a>
            </ul>
        </nav>
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
