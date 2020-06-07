
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


$sql ="select * from lista_tareas where descripcion like '%$filtro%' or fechaRealizada like '%$filtro%' 
or fechaLimite like '%$filtro%' or finalizada like '%$filtro%' ";


$resultado = mysqli_query($conexion,$sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Listado Tareas</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

	<h1 class="titulo">Listado de Tareas</h1>
	  <a href="index.php">
        Volver al Home
      </a>
      <br/>
      <br/>
      <a href="mostrarUsuarioToDo.php">
        Ver Listado de usuarios
      </a>
      <br/>
      <br/>
      <a href="agregarTareaToDo.php">
        Agregar una tarea
      </a>

	<form action="mostrarTareasToDo.php" class="sinfondo" method="get">
		<input type="text" name="filtro" 
		placeholder="" value="<?php echo $filtro; ?>">
		<button type="submit" class="btn btn-green">Filtrar</button>
	</br/></br/>

	</form>
	<table border="1 px solid" cellpadding="0" cellspacing="0" class="tabla">
	<tr class="modo1">
		<th>Descripcion</th>
		<th>Fecha Realizada</th>
		<th>Fecha Limite</th>
		<th>Finalizada</th>
		<!--<a href='borrarTarea.php?id=$id&descripcion=$descripcion' target='_blank'>Borrar</a>-->
	</tr>
<?php
	while($fila = mysqli_fetch_array($resultado)) {
		$id = $fila["id"];
		$descripcion = $fila["descripcion"];
		$fechaRealizada = $fila["fechaRealizada"];
		$fechaLimite = $fila["fechaLimite"];
		$finalizada = $fila["finalizada"];
		echo "<tr>";
		echo "<td>$descripcion <a href='editarTarea.php?id=$id&descripcion=$descripcion' target='_blank'><img src='img/editar.png'/></a><a href='borrarTarea.php?id=$id&descripcion=$descripcion' target='_blank'><img src='img/eliminar-cruz.png'/></a>
			</td>";
		echo "<td>$fechaRealizada</td>";
		echo "<td>$fechaLimite</td>";
		echo "<td>$finalizada</td>";
		echo "</tr>";
	}
?>
</table>
</body>
</html>