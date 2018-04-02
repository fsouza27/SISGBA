<!DOCTYPE html>
<html>
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
	<!-- Menu de acesso -
        <div class="nav-menu">
				<ul class="">
					<li><a href="cadastroAluno.php">Cadastro de Alunos</a></li>
					<li><a href="#">Cadastro de Trabalhos Acadêmicos</a></li>
					<li><a href="login.php">Login</a></li>
				</ul>
		</div>
	-->
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
				<!--		<li><a href="cadastroAluno.php">Cadastro de Alunos</a></li>
						<li><a href="#">Cadastro de Trabalhos Acadêmicos</a></li> -->
            <li class="active"><a href="login.php">Login</a></li>
          </ul>
        </div> <!--/.nav-collapse-->
      </div>
    </nav>

		<div class="clearfix"></div>
    </header>
		<main>
			<section class="login">
				<div class="container">
					<div class="col-xs-12">
						<form id="login" action="valida_login.php" method="post">
							<h3>Acesse sua conta</h3>
							<p>

							</p>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="text" name="email" class="form-control" value="">
							</div>
							<div class="form-group">
								<label for="senha">Senha</label>
								<input type="password" name="senha" class="form-control" value="">
							</div>
							<button type="submit" value="Entrar" class="btn btn-primary">Entrar</button>
						</form>
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
	<script src="js/main.js"></script>
	</body>
</html>
