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
	<title>Tarea Ingresada</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
		<h1 class="titulo"><img src='img/lista.png'/><br/>Agregar Tarea</h1>
	<div>
		<a href="mostrarTareasToDo.php">Listado de Tareas</a>
		<br/>
		<br/>
		<a href="index.php">Volver al home</a>

	<form action="agregarTareaToDo.php" method="post">
 
 <p>Tarea a realizar </p>
 	<input type="text" name="descripcion" class="field" required/><br/>

 <p>Fecha Realizada </p>
 	<input type="date" name="fechaRealizada" class="field" required/><br/>


 <p>Fecha Limite</p>
 	<input type="date" name="fechaLimite" class="field" required/><br/>
 

 <p>Tarea Finalizada </p>
 	<input type="checkbox" name="finalizada" class="field" value="1"/><br/>


 <p class="center-content"> 
 	<button type="submit" class="btn btn-green"> Enviar </button> 
 </p>

 <?php

//como saber que el usuario que ingresamos no esta repetido en nuestra base de datos? por el id que puse en la base de datos, no permite repetir usuario

if(!empty($_POST)){

if(isset($_POST['descripcion']) == false){ //validacion por cuestion de seguridad
	echo "No existe campo";
	die("no se ingreso tarea");
}

if(isset($_POST['fechaRealizada']) == false){ //validacion por cuestion de seguridad
	echo "No existe campo";
	die("no se ingreso tarea");
}

if(isset($_POST['fechaLimite']) == false){ //validacion por cuestion de seguridad
	echo "No existe campo";
	die("no se ingreso tarea");
}





/*
if (trim(($_POST['nombre'])) == "" && empty($_POST['tarea1'])){ //no permite ingresar solo espacio vacios
	echo "<br><br> Error, ingresaste solo espacios o enviaste datos vacio en alguno de los campos";
	die();
}

*/

$descripcion = $_POST['descripcion'];
$fechaRealizada = $_POST['fechaRealizada'];
$fechaLimite = $_POST['fechaLimite'];


if(isset($_POST['finalizada'])){
	$finalizada = 1;
}else{
	$finalizada = 0;
}


$todoOk = true;
$fecha= date("Y-m-d");

$conexion = mysqli_connect("localhost", "root", "", "todo");//va el nombre de la base

//$sql = "select % from usuario where usuario = $usuario"

//$registro = mysqli_fetcharray(respuesta);

//$registro['password']

//coinciden=password_verifitc($password,$registro['POST']) encriptar la contraseña

/*
if(!empty($_POST)){
	$tarea = $_POST['tarea'];
}es por si estamos trabajando en la misma pagina
*/
$sql = 'insert into lista_tareas
 (descripcion,fechaRealizada,fechaLimite,finalizada)
  values("'.$descripcion.'","'.$fechaRealizada.'","'.$fechaLimite.'",'.$finalizada.')';//va el nombre de la tabla

$respuesta_consulta = mysqli_query($conexion, $sql);

if ($respuesta_consulta == false) {
 printf("Connect failed: %s\n", $conexion->connect_error);
 die("No se pudo ingresar el registro en la base de datos");
}
echo "</br>";
echo "</br>";
echo '<script language="javascript">alert("Registro ingresado :-)");</script>';

}
?>

</form>

</div>

</body>

</html>





