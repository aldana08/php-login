<?php
  session_start();

  if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
  }

$conexion = mysqli_connect("localhost","root","","todo") or die("no se establecio conexion");

$filtro= "";

if(isset($_GET["filtro"])){
	$filtro = $_GET["filtro"];
}


$sql ="select * from users where nombre like '%$filtro%' or apellido like '%$filtro%' 
or email like '%$filtro%' or usuario like '%$filtro%' or password like '%$filtro%' or reingrese_password like
 '%$filtro%' ";


$resultado = mysqli_query($conexion,$sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Listado Usuarios</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

	<h1 class="titulo">Listado de Usuarios</h1>
	  <a href="index.php">
        Volver al Home
      </a>
      <br/>
      <br/>
      <a href="mostrarTareasToDo.php">
        Ver Listado de tareas
      </a>
      <br/>
      <br/>
      <a href="agregarTareaToDo.php">
        Agregar una tarea
      </a>

	<form action="mostrarUsuarioToDo.php" class="sinfondo" method="get">
		<input type="text" name="filtro" 
		placeholder="" value="<?php echo $filtro; ?>">
		<button type="submit" class="btn btn-green">Filtrar</button>
	</br/></br/>

	</form>
	<table border="1 px solid" cellpadding="0" cellspacing="0" class="tabla">
	<tr class="modo1">
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Email</th>
		<th>Usuario</th>
		<th>Contraseña</th>
		<th>Reingrese Contraseña</th>
		<!--<a href='borrarTarea.php?id=$id&descripcion=$descripcion' target='_blank'>Borrar</a>-->
	</tr>
<?php
	while($fila = mysqli_fetch_array($resultado)) {
		$id = $fila["id"];
		$nombre = $fila["nombre"];
		$apellido = $fila["apellido"];
		$email = $fila["email"];
		$usuario = $fila["usuario"];
		$password = $fila["password"];
		$reingrese_password= $fila["reingrese_password"];
		echo "<tr>";
		echo "<td>$nombre</td>"; 	
		echo "<td>$apellido</td>";
		echo "<td>$email<a href='editarUsuario.php?id=$id&email=$email' target='_blank'><img src='img/editar.png'/></a></td>";
		echo "<td>$usuario</td>";
		echo "<td>$password</td>";
		echo "<td>$reingrese_password</td>";
		echo "</tr>";
	}
?>
</table>
</body>
</html>