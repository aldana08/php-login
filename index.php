<?php
  session_start();
  require 'database.php';
  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, usuario, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $user = null;
    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bienvenido a tu WebApp</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

    <?php require "partials/header.php"  ?>         
    <?php if(!empty($user)):?>       
    	<br> Bienvenido <?= $user['usuario']; ?>       
    	<br>Te has logueado de forma satisfactoria!!       
    	<a href="logout.php">Logout </a>
		<br/>
        <a href="mostrarTareasToDo.php">Mostrar Lista de Tareas</a>

    <?php else: ?>

	<h1>Logueate o Registrate</h1>

	<a href="login.php">Logueate</a> o
	<a href="registrarse.php">Registrate</a>
	<?php endif; ?>
</body>
</html>