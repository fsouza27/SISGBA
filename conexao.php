<?php

$hostname= "localhost";
$username= "root";
$password= "";
$database= "sisgba_db";

$con=mysqli_connect($hostname,$username,$password,$database);
// Check connection
    if (mysqli_connect_errno())
      {
      echo "Falha na conexão!: " . mysqli_connect_error();
      }
    mysqli_select_db($con,$database);
    //echo "Usuário $usuariot <br>  Conectado com sucesso!!!  <br>";


/*
Código com métodos de conexão antigos
<br>
**************************************************************************
<br>
    $mysqli_connection = new MySQLi("localhost","root","","sisgba_db");

if($mysqli_connection->connect_error){
       echo "Desconectado! Erro: " . $mysqli_connection->connect_error;
    }else{
       echo " Conectado!";
    }
    $query = mysqli_query($mysqli_connection, "SELECT * FROM usuario WHERE login='$usuariot' AND senha='$senhat' LIMIT 1");
    $result = ()

    $resultado = mysqli_fetch_assoc($result);

    echo $resultado['nome']

*****************************************************************************


*/



?>
