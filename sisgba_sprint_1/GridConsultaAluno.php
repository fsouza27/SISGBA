<?php
/*    include_once('conexao.php');

    $filtro = isset($_POST['filtro'])?$_POST['filtro']:"";

    $sql = "SELECT * FROM alunos WHERE nome LIKE '%$filtro%'
    OR ra LIKE  '%$filtro%' OR email LIKE '%$filtro%'
    ORDER BY nome";
    $consulta = mysqli_query($con,$sql);
    $registros = mysqli_num_rows($consulta);

  */
?>

<?php
#Include the connect.php file
include_once ('conexao.php');
// Connect to the database
$mysqli = new mysqli($hostname, $username, $password, $database);
/* check connection */
if (mysqli_connect_errno())
	{
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
// get data and store in a json array
$from = 0;
$to = 30;
$query = "SELECT nome, ra, email, curso FROM alunos LIMIT ?,?";
$result = $mysqli->prepare($query);
$result->bind_param('ii', $from, $to);
$result->execute();
/* bind result variables */
$result->bind_result($nome, $ra, $email, $curso);
/* fetch values */
while ($result->fetch())
	{
	$customers[] = array(
		'nome' => $nome,
		'ra' => $ra,
		'email' => $email,
		'curso' => $curso,
		//'City' => $City
	);
	}
echo json_encode($customers);
/* close statement */
$result->close();
/* close connection */
$mysqli->close();
?>



