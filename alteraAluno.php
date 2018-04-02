<?php

include_once('conexao.php');

$id = filter_input(INPUT_GET,"id");
$nome = filter_input(INPUT_GET,"nome");
$ra = filter_input(INPUT_GET,"ra");
$email = filter_input(INPUT_GET,"email");
$curso = filter_input(INPUT_GET,"curso");


$sql = "UPDATE alunos SET nome='$nome', ra='$ra', email='$email', curso='$curso' WHERE id='$id'";
$query = mysqli_query($con,$sql);

if(!$query){
    die("Erro: ".mysqli_error($con));
}else{
    header("Location: consultaAluno.php");
}
?>
