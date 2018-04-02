<?php

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
	</head>
	<body>
		<div class="nav-menu">
				<ul class="">
					<li><a href="consultaAluno.php">Cadastro de Alunos</a></li>
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
                <li><a href="consultaAluno.php">Consultar</a></li>
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
							<h2>Cadastro de Aluno</h2>
					</div>
					<div class="col-sm-8">
						<form id="cadastro_feirante" action="processa.php" method="post">
							<div class="form-group">
								<label for="nome">Nome:</label>
								<input type="text" name="nome" class="form-control" value="">
							</div>
							<div class="form-group">
								<label for="nome">RA:</label>
								<input type="number" name="ra" class="form-control" value="">
							</div>
							<div class="form-group">
								<label for="curso">Curso</label>
								<input type="text" name="curso" class="form-control" value="">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="text" name="email" class="form-control" value="">
							</div>
							<div class="form-group">
								<label for="senha">Senha</label>
								<input type="password" name="senha" class="form-control" value="">
							</div>
							<div class="form-group">
								<label for="confSenha">Confirmar senha</label>
								<input type="password" name="confSenha" class="form-control" value="">
							</div>
							<div class="from-group">
								<button type="submit" class="btn btn-primary pull-right">ENVIAR</button>
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
			<footer>
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
