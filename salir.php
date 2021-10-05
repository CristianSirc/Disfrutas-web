<?php
	session_start();

	session_unset();

	session_destroy();

	header('Location: /Proyecto/Proyecto_Disfrutas/ingresar.php');