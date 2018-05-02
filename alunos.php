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
    <meta charset="UTF-8">
    <title>Alunos</title>
    <!--CSS-->    
    <link rel="stylesheet" href="media/css/bootstrap.css">
    <link rel="stylesheet" href="media/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="media/font-awesome/css/font-awesome.css">
    <!--Javascript-->    
    <script src="media/js/jquery-1.10.2.js"></script>
    <script src="media/js/jquery.dataTables.min.js"></script>
    <script src="media/js/dataTables.bootstrap.min.js"></script>          
    <script src="media/js/bootstrap.js"></script>
    <script src="media/js/tabelaUsuarios.js"></script>     
    <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); 
    });
    </script>   
</head>

<body>

		<div class="nav-menu">
				<ul class="">
					
					<li><a href="#"></a></li>
					
				</ul>
		</div>
		
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
				
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="alunos.php">Alunos</a>
            </li>
               <li>
                <a href="professores.php">Professores</a>
            </li>
              <li><a href="#">Trabalhos Acadêmicos</a></li>
              <li><a href="sair.php" id="sair">Sair</a></li>
              <?php
               $login_cookie = $_COOKIE['email'];
                if(isset($login_cookie)){
                  echo"Bem-Vindo, $login_cookie <br>";
                }else{
                  echo"Bem-Vindo, convidado <br>";
                  echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
                  echo"<br><a href='login.php'>Faça Login</a> Para ter acesso ao conteúdo";
                }
              ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    
<br>

<div class="col-md-8 col-md-offset-2">
    <h1>Cadastro de Alunos
        <!-- Botão novo usuario-->
        <a href="cadastroAluno.php" class="btn btn-primary pull-right menu"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;Novo Aluno</a>
    </h1>  


</div>
<div class="col-md-10 col-md-offset-1">    
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Código</th>
            <th>NOME</th>
            <th>RA</th>
            <th>Email</th>               
            <th>Curso</th>
            <th>Editar / Excluir</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
        
        </tfoot>
    </table>        
</div>
</body>
</html>
