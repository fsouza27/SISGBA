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
                <a href="cadastro_professor.php"><li>Cadastro</li></a>
                <a href="consulta.php"><li>Consulta</li></a>
            </ul>
        </nav>
        <section>
            <h1>Cadastro de Professores</h1>
            <hr><br><br>
            <form method="POST" action="processa.php">

            Nome<br>
            <input type="text" name="nome" class="campo" maxlength="60" required autofocus><br>
            Email<br>
            <input type="email" name="email" class="campo" maxlength="60" required><br>
            Profissão<br>
            <input type="text" name="profissao" class="campo" maxlength="60" required><br>
            <input type="submit" value="salvar" class="btn">
            <input type="reset" value="Limpar" class="btn">
                <br><br>
            </form>
        </section>

    </div>
</html>







