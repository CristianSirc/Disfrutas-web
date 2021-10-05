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
	<input type="checkbox" id="check-menu">
    <label class="menu" for="check-menu"><img class="img-menu" src="img/reorder-option.png"></label>
    	
		<header>
			<a href="index.php"><img src="img/logo-frente.jpg" class="logo"></a>	
		</header>

		<nav>
			<ul class="topmenu">
				<li><a class="active" href="index.php">Inicio</a></li>
				<li><a href="frutas.php">Frutas</a></li>
				<li><a href="helado.php">Helado</a></li>
				
				<li><a href="domicilios.php">Domicilios</a></li>
				<li><a href="ingresar.php">Ingresar</a></li>       
			</ul>
		</nav>

		<!--div class="contenido"-->
			
			<div class="sup-section">
				<div class="box-section" id="frutas">
					<a href="frutas.php"><img src="img/frutas3.jpg"></a>
					<!--añadir botón-->
				</div>
				<div class="box-section" id="helado">
					<a href="helado.php"><img src="img/helado.jpg"></a>
				</div>
				<div class="box-section" id="carta">
					<a href="carta.php"><img src="img/banana.jpg"></a>				
				</div>
			</div>
			<div class="inf-section">
				<div class="box-section" id="toppings">
					<a href="toppings.php"><img src="img/toppings.jpg"></a>
					<!--añadir botón-->
				</div>
				<div class="box-section" id="contrataciones">
					<a href="domicilios.php"><img src="img/domicilios.jpg"></a>
				</div>
				<div class="box-section" id="ingreso">
					<a href="ingreso.php"><img src="img/ingreso.jpg"></a>				
				</div>
			</div>
		<!--/div-->

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