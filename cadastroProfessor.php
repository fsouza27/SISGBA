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
		<link rel="stylesheet" href="stylesheets/main.css" type="text/css"/>
	</head>
	<body>
		<div class="nav-menu">
				<ul class="">
					<li><a href="consultaAluno.php"></a></li>
				</ul>
		</div>
		<header>
			<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
				
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
		<container>
			<section class="cadastro-form">
				<div class="container">
					<div class="col-xs-12">
							<h2>Cadastro de Professor</h2>
					</div>
					<div class="col-sm-8">
						<form id="cadastro_professor" action="processaProfessor.php" method="post">
							<div class="form-group">
								<label for="nome">Nome:</label>
								<input type="text" name="nome" class="form-control" value="">
							</div>
							<div class="form-group">
								<label for="nome">RF:</label>
								<input type="number" name="rf" class="form-control" value="">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="text" name="email" class="form-control" value="">
							</div>	
							<div class="form-group">
								<label for="disciplina">Disciplina</label>
								<input type="text" name="disciplina" class="form-control" value="">
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
								<button type="submit" class="btn btn-success pull-right">ENVIAR</button>
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
			
		</container>
				<footer>
				<div class="container text-center">
        <br><br><br><br>
					<b>SISGBA</b> | &copy Todos os direitos reservados
				</div>
			</footer>
	
			</main>
		
	<!--SCRIPTS-->
	<script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
	<script src="js/main.js" charset="utf-8"></script>
	</body>
</html>
