<?php
	session_start();
	require 'database.php';

	if(isset($_SESSION['user_id'])){
		$records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
		$records->bindParam(':id', $_SESSION['user_id']);
		$records->execute();
		$results = $records->fetch(PDO::FETCH_ASSOC);

		$user = null;

		if(count($results) > 0){
			$user = $results;
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
				<li><a class="active" href="ingresar.php">Ingresar</a></li>       
			</ul>
		</nav>

		<div class="contenido">

			<?php if(!empty($user)): ?>
				<br>¡Bienvenido! <?= $user['email'] ?>
				<br>Haz ingresado satisfactoriamente.
				<a href="salir.php">Salir</a>

			<?php else: ?>
				<center><a href="ingreso.php">Ingreso</a> o 
				<a href="registro.php">Registro</a></center>
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

</body>
</html>