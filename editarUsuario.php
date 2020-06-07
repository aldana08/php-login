<?php

//EDITAR EMAIL

/*
if(isset($_GET['id']) == false && empty($_POST['id'])){
	die("NO SE INGRESARON DATOS");
}

if(isset($_GET['email']) == false && empty($_POST['email'])){
	die("NO SE INGRESARON DATOS");
}
*/
  session_start();

  if (!isset($_SESSION['user_id'])) {
    header('Location: /php-login/login.php');
  }

$conexion = mysqli_connect("localhost","root","","todo") or die("no se establecio conexion");

$id = $_GET["id"];
$email = $_GET["email"];

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Modificar email</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<h1 class="titulo">Modificar email</h1>

	<div>

	<form method="post">
		<p><center><input type="email" name = "modificar" value= "<?php echo $email; ?> " required /><center></p>
		<p><center><input type="hidden" name = "id" value= "<?php echo $id; ?> " ><center></p>
		<p><button type="submit" class="btn btn-green"> Guardar cambios </button> </p>

<?php

//ACTUALIZAR EMAIL

if(!empty($_POST)){
if(empty($_POST['modificar'])){
	echo "<br><br> No hubo modificacion";
	die("<br> <br> muere no se completo campo");
} else {

$conexion = mysqli_connect("localhost","root","","todo") or die("no se establecio conexion");

$id = $_POST['id'];
$emailNuevo = $_POST['modificar'];

$sql = 'update users set email= "'.$emailNuevo.'" where id= "'.$id.'"';

//echo "<br>$sql<br>";

$respuesta_consulta = mysqli_query($conexion, $sql);

if ($respuesta_consulta == false) {

 die("No se pudo ingresar el registro en la base de datos");
}
echo "Modificacion realizada :-)";
echo "<br/>";
}
	echo "<br/>";

	echo "<a href='mostrarUsuarioToDo.php'>
        	Volver al Listado de Usuarios
      	 </a>";

   	echo "<br/>";
   	echo "<br/>";

	echo "<a href='index.php'>
        	Volver al Home
      	 </a>";

  }
?>

	</form>

</div>

</table>
</body>
</html>

