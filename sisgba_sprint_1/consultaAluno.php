<?php
    include_once('conexao.php');

    $filtro = isset($_POST['filtro'])?$_POST['filtro']:"";

    $sql = "SELECT * FROM alunos WHERE nome LIKE '%$filtro%'
    OR ra LIKE  '%$filtro%' OR email LIKE '%$filtro%'
    ORDER BY nome";
    $consulta = mysqli_query($con,$sql);
   // $linha = mysqli_fetch_assoc($consulta);
    $registros = mysqli_num_rows($consulta);


?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<!-- Metadados -->
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SISGBA</title>
		<!-- CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="stylesheets/main.css" type="text/css"/>
        <link rel="stylesheet" href="css/estilo.css" type="text/css"/>
	</head>
	<body>
		<div class="nav-menu">
				<ul class="">
                    <li><a href="cadastroAluno.php">Cadastro de Alunos</a></li>
					<li><a href="#">Cadastro de Trabalhos Acadêmicos</a></li>
					<li><a href="login.php">Login</a></li>
				</ul>
		</div>
		<header>
			<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
				<div class="navbar-header">
					<button class="menu-anchor">
						 <span></span>
						 <span></span>
						 <span></span>
					 </button>
				</div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
				 <li>
                <a href="#">Alunos</a>
                <ul list-style="none" class="sub-menu">
                <li><a href="cadastroAluno.php">Cadastrar</a></li>
                </ul>
            </li>
              <li><a href="#">Cadastro deTrabalhos Acadêmicos</a></li>
              <li><a href="login.php" id="sair">Sair</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
		<div class="clearfix"></div>
    </header>
		<main>
			<section class="cadastro-form">
				<div class="container">
					<div class="col-xs-12">
							<h2>Consulta ao cadastro de Alunos</h2>
					</div>
					<div class="col-sm-8">
						<form id="cadastro_feirante" action="consultaAluno.php" method="post">
							<div class="form-group">
								<label for="pesquisa"></label>
								<input type="text" name="filtro" placeholder="Digite o nome, RA ou email para iniciar a busca" class="form-control" value="">
							</div>
                        <div class="from-group">
                            <button type="submit" class="btn btn-primary pull-right"><a href="cadastroAluno.php">Cadastrar</a></button><td></td>
                            <button type="submit" class="btn btn-primary pull-right">Consultar</button>

								<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
						</form>
					</div>
					<div class="col-sm-4">
							<p class="desc-form">

                        </p>
					</div>
				</div>
			</section>
            <div class="container">
        <section>

            <?php
            if(!$filtro){
                    echo "Digite uma palvra para iniciar a busca<br><br>";
                    echo "<br><br>";
            }else{
                echo "Resultado da pesquisa com a palavra <strong>$filtro</strong><br><br>";
                echo "$registros registros encontrados";
                echo "<br><br>";

                    while($exibirRegistros = mysqli_fetch_array($consulta)){
                        $id = $exibirRegistros[0];
                        $nome = $exibirRegistros[1];
                        $ra = $exibirRegistros[2];
                        $email = $exibirRegistros[3];
                        $curso = $exibirRegistros[4];

                        echo "<article>";
                        echo "<strong>ID:</strong> $id        <a href=altera.php?id=".$id."&nome=".$nome."&ra=".$ra."&email=".$email."&curso=".$curso.">Alterar</a><br> ";

                        echo "<strong>Nome:</strong> $nome<br>";
                            echo "<strong>RA:</strong> $ra<br>";
                            echo "<strong>Email:</strong> $email<br>";
                            echo "<strong>Curso:</strong> $curso<br>";
                            echo"<br>";

                        echo "</article>";
                    }
            }

            mysqli_close($con);

            ?>
        </section>

    </div>

		</main>
<footer>
				<div class="container text-center">
					<b>SISGBA</b> | &copy Todos os direitos reservados
				</div>
			</footer>
	<!--SCRIPTS-->
	<script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
	<script src="js/main.js" charset="utf-8"></script>
	</body>
</html>
