<?php
    //Verifica se o usuário está logado
    session_start();

    if(!isset($_SESSION['emailSession']) AND !isset($_SESSION['senhaSession'])){
        header("Location: sair.php");
        exit;
    }

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
		<link rel="stylesheet" href="css/estilo.css" type="text/css"/>
      

        <?php 
        include_once('conexao.php');
        $id = filter_input(INPUT_GET,"id");
        $nome = filter_input(INPUT_GET,"nome");
        $rf = filter_input(INPUT_GET,"rf");
        $email = filter_input(INPUT_GET,"email");
        $disciplina = (string) filter_input(INPUT_GET,"disciplina");
        
        $c = (string) $disciplina;
        mysqli_close($con);
        
        ?>


	</head>
	<body>
		<div class="nav-menu">
				<ul class="">
					<li><a href="cadastroAluno.php"></a></li>
				</ul>
		</div>
		<header>
			<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
				<div class="navbar-header">
						 <span></span>
						 <span></span>
						 <span></span>
				</div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="alunos.php">Alunos</a>

            </li>
             <li><a href="professores.php">Professores</a></li>
              <li><a href="#">Trabalhos Acadêmicos</a></li>
              <li><a href="sair.php" id="sair">Sair</a></li>
              
              <?php
               $login_cookie = $_COOKIE['email'];
                    if(isset($login_cookie)){
                      echo"Bem-Vindo, $login_cookie <br>";
                      //echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você";
                    }else{
                      echo"Bem-Vindo, convidado <br>";
                      echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
                      echo"<br><a href='login.php'>Faça Login</a> Para ler o conteúdo";
                    }
              ?>
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
							<h2>Alterar Professor</h2>
					</div>
					<div id="conteudo" class="col-sm-8">
						<form method="GET" id="altera_professor" action="functionAlteraProfessor.php">
							<div class="form-group">
								<!--<label for="pesquisa">Consulta</label>-->
								ID<input class="form-control" type="text" name="id"  value="<?php echo $id ?>" /><br>
								Nome<input class="form-control" type="text" name="nome" value="<?php echo $nome ?>" /><br>
								RF<input class="form-control" type="text" name="rf" value="<?php echo $rf ?>" /><br>
								Email<input class="form-control" type="email" name="email" value="<?php echo $email ?>" /> <br>
                                Disciplina<input class="form-control" type="text" name="disciplina" value="<?php echo $disciplina ?>" /> <br>
							</div>

                            <div class="from-group">
								<button type="submit" class="btn btn-success pull-right"> Alterar</button>
								<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
						</form>
					</div>
					<div class="col-sm-4">
							<p class="desc-form"></p>
					</div>
				</div>
			</section>
            <div class="container">
        <section>

            <?php /*
            if(!$filtro){
                    //echo "Digite uma palavra para iniciar a busca<br><br>";
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
                            echo "<strong>ID:</strong> $id<br>";
                            echo "<strong>Nome:</strong> $nome<br>";
                            echo "<strong>RA:</strong> $ra<br>";
                            echo "<strong>Email:</strong> $email<br>";
                            echo "<strong>Curso:</strong> $curso";
                        echo "</article>";
                    }
            }

            mysqli_close($con);
            */
            ?>
        </section>

    </div>
			<footer>
			<br><br><br>
				<div class="container text-center">
					<b>SISGBA</b> | &copy Todos os direitos reservados
				</div>
			</footer>
		</main>
	<!--SCRIPTS-->
	<script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
	<script src="js/main.js" charset="utf-8"></script>
	</body>
</html>
