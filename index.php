<?php
    session_start();
    if(!isset($_SESSION['emailSession']) AND !isset($_SESSION['senhaSession'])){
        header("Location: sair.php");
        exit;
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<!-- Metadados -->
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SISGBA</title>
		<!-- CSS  -->
				<link rel="stylesheet" href="/css/estilo.css" type="text/css"/>
		<link rel="stylesheet" href="media/css/bootstrap.min.css">

        <link rel="stylesheet" href="media/font-awesome/css/font-awesome.css">
	</head>
	

    
    <body>
		<div class="nav-menu">
				<ul class="">
					<li><a href="alunos.php"></a></li>
					<li><a href="login.php"></a></li>
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
							<li><a href="alunos.php">Alunos</a></li>
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
			<section class="part destaque">
				<div class="overlay">
				</div>
				<div class="container">
					<h1>SISGBA</h1>
					<h3>Sistema Gerenciador de Bancas Acadêmicas Web</h3>
				</div>
			</section>
			<section class="part sobre">
				<div class="container">
					<div class="col-sm-8">
						<h2>GERENCIANDO SEUS TRABALHOS ACADÊMICOS</h2>
						<p>  </p>
					</div>
					<div class="col-sm-4">
						<img src="img/chapeuFormatura.png" alt="" class="img-responsive"/>
					</div>
				</div>
			</section>
			<section class="part cadastro">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6 text-right feirante">
							<div class="box">
								<h3>Aluno</h3>
								<p>
                                </p>
									<a href="alunos.php" target="_blank" class="btn btn-primary"><i class="glyphicon glyphicon-education"></i> Cadastro de Alunos</a>
							</div>
						</div>
						<div class="col-sm-6 interessado">
							<div class="box">
								<h3>Professores</h3>
								<p>
                                </p>
									<a href="professores.php" target="_blank" class="btn btn-primary">Cadastro de Professores</a>
							</div>
						</div>
					</div>
                </div>
            </section>
            
            

		</main>

	<!--SCRIPTS-->
	<script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
	<script src="js/main.js"></script>
	        <footer>
            <div class="container text-center">
                <hr>
                <b>SISGBA</b> | &copy Todos os direitos reservados
            </div>
        </footer>
	</body>

</html>
