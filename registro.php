<?php
	require 'database.php';

	$message ='';

	if(!empty($_POST['email']) && !empty($_POST['password'])){
		$sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':email',$_POST['email']);
		$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
		$stmt->bindParam(':password', $password);

		if($stmt->execute()){
			$message = 'Usuario creado satisfactoriamente';
		}
		else{
			$message = 'Ha ocurrido un error';
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
		<h1>Registro</h1>
		<p>Crea tu cuenta</p>
		<form action="registro.php" method="post">
			<input type="text" name="email" placeholder="Correo electrónico">
			<input type="password" name="password" placeholder="Contraseña">
			<input type="password" name="confirm_password" placeholder="Confirmar contraseña">
			<input type="submit" value="Crear cuenta">
		</form>

		<br>
		<span><a href="ingreso.php">Ingresa</a></span>

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