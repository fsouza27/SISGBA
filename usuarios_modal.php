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
    <title>Usuarios</title>
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
					
					<li><a href="#">Cadastro de Trabalhos Acadêmicos</a></li>
					
				</ul>
		</div>
		
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
				
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="#">Alunos</a>
            </li>
              <li><a href="#">Cadastro deTrabalhos Acadêmicos</a></li>
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

    
<br>
    

<div class="col-md-8 col-md-offset-2">
        
    <h1>Consulta de Usuários
        <!-- Botão novo usuario-->
        <a href="" class="btn btn-warning pull-right menu" data-toggle="modal" data-target="#modal-cadastra-aluno"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;Novo Aluno</a>

    </h1>  
     </div>
    <!--Janela Modal para cadastro de Alunos-->
        <div class="modal fade" id="modal-cadastra-aluno">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hiden="true">&times;</span></button>
                        <h4 class="modal-title "><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;Novo Aluno</h4>
                    </div>
                        <div class="modal-body">
                                                        
						<form id="cadastro_aluno" action="processaAluno.php" method="post">
							<div class="form-group">
								<label for="nome">Nome</label>
								<input type="text" name="nome" class="form-control" value="">
							</div>
							<div class="form-group">
								<label for="nome">RA</label>
								<input type="text" name="ra" class="form-control" value="">
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
								<label for="email">Confirmar Email</label>
								<input type="text" name="email" class="form-control" value="">
							</div>
							<div class="form-group">
								<label for="senha">Senha</label>
								<input type="password" name="senha" class="form-control" value="">
							</div>
							<div class="form-group">
				            <label for="confSenha">Confirmar senha</label>
                                <input type="password" name="confSenha" class="form-control" value=""></div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary pullright">Cadastrar</button>
                            </div>
                        </form>                
                    </div>          
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
   

    
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
