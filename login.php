
<?php
  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /php-login');
  }

  require 'database.php';

  if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, usuario, password FROM users WHERE usuario = :usuario');
    $records->bindParam(':usuario', $_POST['usuario']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $message = '';
    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header('Location: /php-login');//este if es para saber si los datos del usuario coinciden como para iniciar la sesion.
    } else {
      $message = 'Lo sentimos, los datos no coinciden';
    }
  }
?>

<!DOCTYPE html>

<!--PARA PROBAR UN LOGIN SE PUEDE USAR USUARIO:PEPEPE ; PASS: 123 -->

<!--Metodo prepare (ejecuta una consulta de SQL,una query)-->
<!--$records (significa consulta)-->
<!--$stmt->bindParam(':email', $_POST['email'])  Metodo BindParam (para vincular parametros)-->
<!--execute (para ejecutar una variable)-->
<!--Metodo count (Sirve para contar los $records, contar todas las consultas en este caso puntual)-->
<!--password_verify (para verificar las contraseñas, se compara la contraseña que estoy recibiendo a traves del navegador y la contraseña que esta en la base de datos)-->
<!--PDO::FETCH_ASSOC: devuelve un array indexado por los nombres de las columnas del conjunto de resultados.-->

<html>
<head>
	<title>Login</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

	<?php require "partials/header.php"  ?>

	<?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

	<h1><img src="img/chica.png"/></h1>
	<spam>o <a href="registrarse.php">Registrate</a></spam>
	<form action="login.php" method="post">
		<input type="text" name="usuario" placeholder="Ingrese su usuario">
		<input type="password" name="password" placeholder="Ingrese su clave">
		<input type="submit" value="Iniciar Sesion">
	</form>
</body>
</html>