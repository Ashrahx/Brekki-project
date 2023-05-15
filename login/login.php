<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Leer el archivo JSON y convertirlo a un array asociativo
	$users = json_decode(file_get_contents('users.json'), true);

	// Validar el usuario y la contraseña
	if (array_key_exists($username, $users) && $users[$username] == $password) {
		$_SESSION['username'] = $username;
		header('Location: ../main.php');
		exit();
	} else {
		echo "<h1 style=color:red;>Invalid username or password</h1>";
    	header("refresh:2; url='login.html'");
	}
}
?>
