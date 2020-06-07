<?php

//como saber que el usuario que ingresamos no esta repetido en nuestra base de datos? por el id que puse en la base de datos, no permite repetir usuario


if(isset($_POST['nombre']) == false){ //validacion por cuestion de seguridad
	echo "No existe campo";
	die("no se ingreso tarea");
}

if(isset($_POST['apellido']) == false){ //''
	echo "No existe campo";
	die("no se ingreso tarea");
}

if(isset($_POST['email']) == false){ //''
	echo "No existe campo";
	die("no se ingreso tarea");
}

if(isset($_POST['usuario']) == false){ //''
	echo "No existe campo";
	die("no se ingreso tarea");
}

if(isset($_POST['password']) == false){ //''
	echo "No existe campo";
	die("no se ingreso tarea");
}

if(isset($_POST['password']) == false){ //''
	echo "No existe campo";
	die("no se ingreso tarea");
}


/*
if (trim(($_POST['nombre'])) == "" && empty($_POST['tarea1'])){ //no permite ingresar solo espacio vacios
	echo "<br><br> Error, ingresaste solo espacios o enviaste datos vacio en alguno de los campos";
	die();
}

*/

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$reingrese_password = $_POST['reingrese_password'];


$todoOk = true;
$fecha= date("Y-m-d");

$conexion = mysqli_connect("localhost", "root", "", "todo");//va el nombre de la base

$sql = 'insert into ingreso_usuario
 (nombre,apellido,email,usuario,password,reingrese_password)
  values("'.$nombre.'","'.$apellido.'","'.$email.'","'.$usuario.'","'.$password.'","'.$reingrese_password.'")';//va el nombre de la tabla

$respuesta_consulta = mysqli_query($conexion, $sql);
if ($respuesta_consulta == false) {
 printf("Connect failed: %s\n", $conexion->connect_error);
 die("No se pudo ingresar el registro en la base de datos");
}
echo "Registro ingresado :-)";
?>

