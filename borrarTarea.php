<?php
  session_start();

  if (!isset($_SESSION['user_id'])) {
    header('Location: /php-login/login.php');
  }

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Borrar Tarea</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
</body>
</html>


<?php

//Borrar tarea
if(!empty($_GET)){
	if(empty($_GET['id'])){
		echo "<br><br> No hubo modificacion";
		die("<br><br> muere no se completo campo");
	} else {
		$conexion = mysqli_connect("localhost","root","","todo") or die("no se establecio conexion");
		$id = $_GET["id"];
		$sql = 'delete from lista_tareas where id= "'.$id.'"';
		$respuesta_consulta = mysqli_query($conexion, $sql);

		if ($respuesta_consulta == false) {
			die("No se pudo ingresar el registro en la base de datos");
		}

		echo "<br/>";

		echo "Se ha borrado la Tarea :-)";

		echo "<br/>";
	}

	echo "<br/>";

	echo "<a href='mostrarTareasToDo.php'>
        	Volver al Listado de Tareas
      	 </a>";

      }
?>