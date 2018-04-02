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
		<div class="nav-menu">
				<ul class="">
					<li><a href="mapa.php">Mapa de Feiras</a></li>
					<li><a href="index.php">Sair</a></li>
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
						<li><a href="index.php">Sair</a></li>
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
							<h2>Alunos cadastrados</h2>
					</div>
					<div class="">
						<form id="cadastro_aluno" action="#" method="post">

						<table class="table table-striped">
									<thead>
									  <tr>
										<th>Nome</th>
										<th>RA</th>
										<th>Curso</th>
										<th>E-mail</th>
										</tr>
									</thead>
									<tbody>
									  <tr class="success">
										<td>Fábio Souza</td>
										<td>010101</td>
										<td>Análise de Sistemas</td>
										<td>fabio.souza@gmail.com 1</td>
										<td><button type="submit" class="btn btn-primary pull-right">Retirar</button></td>
									  </tr>
									  <tr>
										<td>Lucas Naldo</td>
										<td>020202</td>
										<td>Gestão Comercial</td>
										<td>lucas.naldo@hotmail.com</td>
										<td><button type="submit" class="btn btn-primary pull-right">Retirar</button></td>
									  </tr>
									  <tr class="success">
										<td>Willian Oliveira</td>
										<td>030303</td>
										<td>Análise de Sistemas</td>
										<td>willian.oliveira@gmail.com</td>
										<td><button type="submit" class="btn btn-primary pull-right">Retirar</button></td>
									  </tr>
									 </tbody>
								  </table>
								<div class="clearfix"></div>
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
	<script src="js/main.js" charset="utf-8"></script>
	</body>
</html>
