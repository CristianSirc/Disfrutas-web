<?php

	session_start();

	require 'database.php';


	if(!empty($_POST['email']) && !empty($_POST['password'])){
		$records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
		$records->bindParam(':email',$_POST['email']);
		$records->execute();
		$results = $records->fetch(PDO::FETCH_ASSOC);

		$message = '';

		if(count($results) > 0 && password_verify($_POST['password'], $results['password'])){
			$_SESSION['user_id'] = $results['id'];
			header('Location: /Proyecto/Proyecto_Disfrutas/ingresar.php');
		}
		else{
			$message = 'Crendenciales incorrectas';
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Disfrutas ensaladas</title>
	<meta charset="utf-8">
	<meta name="author" content="Cristian Rendón">
	<meta name="keywords" content="Ensaladas Helado Frutas">
	<meta name="application-name" content="Disfrutas">
	<link rel="shortcut icon" href="img/pp.jpg">
	<link rel="stylesheet" href="css/estilo.css">
</head>

<body>
	<div class="page">
    	
		<header>
			<!--div class="portada"><img src="img/inicio.jpg"></div--> <!--poner en css-->
			<a href="index.php"><img src="img/logo-frente.jpg" class="logo"></a>	
		</header>

		<nav>
			<ul class="topmenu">
				<li><a href="index.php">Inicio</a></li>
				<li><a href="frutas.php">Frutas</a></li>
				<li><a href="helado.php">Helado</a></li>
				
				<li><a href="domicilios.php">Domicilios</a></li>
				<li><a class="active" href="ingreso.php">Ingresar</a></li>       
			</ul>
		</nav>


		<div class="contenido">
		<h1>Ingreso</h1>
		<p>Bienvenido(a), ingresa a tu cuenta </p>
		<form action="ingreso.php" method="post">
			<input type="text" name="email" placeholder="Correo electrónico">
			<input type="password" name="password" placeholder="Contraseña">
			<input type="submit" value="Ingresar">
		</form>
		<br>
		<span><a href="registro.php">Registrate</a></span>

		<?php if(!empty($message)): ?>
			<p><?= $message ?></p>
		<?php endif; ?>

		</div>
			
		

	</div>

	<footer>
		<div>
		<a href="https://web.facebook.com/Disfrutas-Ensaladas-359612984630076/" target="_blank"><img src="img/fb.png" alt="Facebook"></a>
		<a href="https://www.instagram.com/disfrutasensaladas/" target="_blank"><img src="img/ig.png" alt="Instagram"></a>
		</div>
		<div>
			<p><i>© 2021 Disfrutas | Site by Cristian Rendón</i></p>
		</div>
	</footer>

</body>
</html>