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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
</head>

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
						<form id="consulta_aluno" action="data_table.php" method="post">
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


<div class="container">
	<div class="row">


        <div class="col-md-12">
        <h4>Bootstrap Snipp for Datatable</h4>
        <div class="table-responsive">


              <table id="mytable" class="table table-bordred table-striped">

                   <thead>

                   <th><input type="checkbox" id="checkall" /></th>
                   <th>ID</th>
                    <th>RA</th>
                     <th>Nome</th>
                     <th>Email</th>
                     <th>Curso</th>
                     <th>Editar</th>


                       <th>Deletar</th>
                   </thead>
    <tbody>
   <?php
        while($exibirRegistros = mysqli_fetch_array($consulta)){
                        $id = $exibirRegistros[0];
                        $nome = $exibirRegistros[1];
                        $ra = $exibirRegistros[2];
                        $email = $exibirRegistros[3];
                        $curso = $exibirRegistros[4];

   echo  "<tr>";
   echo  "<td><input type="checkbox" class="checkthis" "/></td>";
   echo  "<td>$id</td>";
   echo  "<td>$ra</td>";
   echo  "<td>$nome</td>";
   echo  "<td>$email</td>";
   echo  "<td>$curso</td>";
   echo  "<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit ><span class="glyphicon glyphicon-pencil"></span></button></p></td>";
   echo  "<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>";
   echo  "</tr>";

   ?>

 <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td>Mohsin</td>
    <td>Irshad</td>
    <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
    <td>isometric.mohsin@gmail.com</td>
    <td>+923335586757</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
    </tr>


 <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td>Mohsin</td>
    <td>Irshad</td>
    <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
    <td>isometric.mohsin@gmail.com</td>
    <td>+923335586757</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
    </tr>



 <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td>Mohsin</td>
    <td>Irshad</td>
    <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
    <td>isometric.mohsin@gmail.com</td>
    <td>+923335586757</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
    </tr>


 <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td>Mohsin</td>
    <td>Irshad</td>
    <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
    <td>isometric.mohsin@gmail.com</td>
    <td>+923335586757</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
    </tr>





    </tbody>

</table>

<div class="clearfix"></div>
<ul class="pagination pull-right">
  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
</ul>

            </div>

        </div>
	</div>
</div>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " type="text" placeholder="Mohsin">
        </div>
        <div class="form-group">

        <input class="form-control " type="text" placeholder="Irshad">
        </div>
        <div class="form-group">
        <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>


        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content -->
  </div>
      <!-- /.modal-dialog -->
    </div>



    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">

       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>

      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content -->
  </div>
      <!-- /.modal-dialog -->
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

</html>
