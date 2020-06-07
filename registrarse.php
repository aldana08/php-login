<?php
	require 'database.php';

	$message = ''; //variable global

  if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['email']) && !empty($_POST['usuario']) && !empty($_POST['password']) && !empty($_POST['reingrese_password'])) {
    $sql = "INSERT INTO users (nombre, apellido, email, usuario, password, reingrese_password) VALUES (:nombre, :apellido, :email, :usuario, :password, :reingrese_password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':apellido', $_POST['apellido']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':usuario', $_POST['usuario']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':reingrese_password', $password);

   if ($stmt->execute()) {
      $message = 'Se ha creado de forma satisfactoria un nuevo usuario!!!';
    } else {
      $message = 'Ha ocurrido un error creando su cuenta';
    }
  }

  ?>

<!DOCTYPE html>
<!--Metodo prepare (ejecuta una consulta de SQL)-->
<!--$stmt->bindParam(':email', $_POST['email'])  Metodo BindParam (para vincular parametros)-->
<!--$password = password_hash($_POST['password'], PASSWORD_BCRYPT); password_hash(Metodo para pasar el dato que queremos cifrar y como segundo parametro la opcion para cifrar-->
<!--execute (para ejecutar una variable)-->
<!--$stmt (significa declaracion)-->
<!--PREGUNTAR SI PASSWORD_HASH ES LO MISMO QUE PASSWORD_VERIFY-->
<html>
<head>
	<title>Registrarse</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<?php require "partials/header.php"  ?>

	<?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

	<h1><img src="img/ojo-de-cerradura.png"></h1>
	<spam>o <a href="login.php">Iniciar Sesion</a></spam>
	<form action="registrarse.php" method="post">
		<input type="text" name="nombre" placeholder="Ingrese su nombre">
		<input type="text" name="apellido" placeholder="Ingrese su apellido">
		<input type="text" name="email" placeholder="Ingrese su email">
		<input type="text" name="usuario" placeholder="Ingrese su usuario">
		<input type="password" name="password" placeholder="Ingrese su clave">
		<input type="password" name="reingrese_password" placeholder="Reingrese su clave">
		<input type="submit" value="Registrarse">
	</form>

</body>
</html>

