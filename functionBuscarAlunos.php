<?php
	
  //Verifica se o usuário está logado
    session_start();

    if(!isset($_SESSION['emailSession']) AND !isset($_SESSION['senhaSession'])){
        header("Location: sair.php");
        exit;
    }

	include ("conexao.php");
	$consulta = "SELECT * FROM alunos ";
	$registro = mysqli_query($con,$consulta);
	$tabela = "";
	
	while($row = mysqli_fetch_array($registro)){
        
 		$editar = '<a href=\"alteraAluno.php?id='.$row['id'].'&ra='.$row['ra'].'&nome='.$row['nome'].'&email='.$row['email'].'&curso='.$row['curso'].'\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>';
		
        $deletar = '<a href=\"functionExcluiAluno.php?id='.$row['id'].'\" onclick=\"return confirm(\'Deseja relamente deletar este usuário?\')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Excluir\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>';
		
		$tabela.='{
        "id":"'.$row['id'].'",
        "ra":"'.$row['ra'].'",
        "nome":"'.$row['nome'].'",
        "email":"'.$row['email'].'",
        "curso":"'.$row['curso'].'",
        "acciones":"'.$editar." ".$deletar.'"},';
	}	

//define a variavel tabela e elimina a vírgula do final da string
	$tabela = substr($tabela,0, strlen($tabela) - 1);
	echo '{"data":['.$tabela.']}';	


?>