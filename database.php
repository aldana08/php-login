<?php  

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'todo';

try {
	$conn = new PDO("mysql:host=$server;dbname=$database;",$username, $password);
}catch(PDOException $e){
	die('Fallo conexion: '.$e->getMessage());
}


?>