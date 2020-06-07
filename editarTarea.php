<?php
/*
//VALIDAR INFORMACION
if(isset($_GET['id']) == false){
	echo "No existe";
	die("NO SE INGRESARON DATOS");
}

if(isset($_GET['descripcion']) == false){
	die("NO SE INGRESARON DATOS");
}
*/
  session_start();

  if (!isset($_SESSION['user_id'])) {
    header('Location: /php-login/login.php');
  }

$conexion = mysqli_connect("localhost","root","","todo") or die("no se establecio conexion");

$id = $_GET["id"];
$descripcion = $_GET["descripcion"];


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Modificar tarea</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<h1 class="titulo">Modificar tarea</h1>

	<div>

	<form  method="post">
		<input type="text" name = "modificar" value= "<?php echo $descripcion; ?> " >

		<input type="hidden" name = "id" value= "<?php echo $id; ?> " >
		 <p><button type="submit" class="btn btn-green"> Guardar cambios </button> </p>

<?php

//Modificar tarea
if(!empty($_POST)){
	if(empty($_POST['modificar'])){
		echo "<br><br> No hubo modificacion";
		die("<br><br> muere no se completo campo");
	} else {
		$conexion = mysqli_connect("localhost","root","","todo") or die("no se establecio conexion");
		$id = $_POST["id"];
		$tareaNueva = $_POST['modificar'];
		$sql = 'update lista_tareas set descripcion= "'.$tareaNueva.'" where id= "'.$id.'"';
		$respuesta_consulta = mysqli_query($conexion, $sql);

		if ($respuesta_consulta == false) {
			die("No se pudo ingresar el registro en la base de datos");
		}

		echo "Modificacion realizada :-)";

		echo "<br/>";
	}

	echo "<br/>";

	echo "<a href='mostrarTareasToDo.php'>
        	Volver al Listado de Tareas
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


