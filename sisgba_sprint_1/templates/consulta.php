<?php
    include_once('conexao.php');

    $filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

    $sql = "SELECT * FROM usuarios WHERE profissao LIKE '%$filtro%'
    OR nome LIKE  '%$filtro%' OR email LIKE '%$filtro%'
    ORDER BY nome";
    $consulta = mysqli_query($con,$sql);
    $registros = mysqli_num_rows($consulta);


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
                <a href="cadastro_professor.php"><li>Cadastro</li></a>
                <a href="consulta.php"><li>Consulta</li></a>
            </ul>
        </nav>
        <section>
            <h1>Consultas</h1>
            <hr><br><br>

            <form method="get" action="">
                Filtrar por profissão: <input type="text" name="filtro" placeholder="Filtrar por Nome, email ou profissão" class="campo">
                <input type="submit" value="Pesquisar" class="btn">
             </form>


            <?php
            echo "Resultado da pesquisa com a palavra <strong>$filtro</strong><br><br>";
            echo "$registros registros encontrados";
            echo "<br><br>";

            while($exibirRegistros = mysqli_fetch_array($consulta)){
                $id = $exibirRegistros[0];
                $nome = $exibirRegistros[1];
                $email = $exibirRegistros[2];
                $profissao = $exibirRegistros[3];

                echo "<article>";
                    echo "<strong>ID:</strong> $id<br>";
                    echo "<strong>Nome:</strong> $nome<br>";
                    echo "<strong>Email:</strong> $email<br>";
                    echo "<strong>Profissão:</strong> $profissao";
                echo "</article>";
            }

            mysqli_close($con);

            ?>
        </section>

    </div>
</html>



