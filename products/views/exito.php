<!DOCTYPE html>
<html>
	<head>
		<title>Portada</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="/css/ampliada.css">
		<link rel="stylesheet" type="text/css" href="/css/templates.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="/js/templates.js"></script>
	</head>
	<body>
		<?php

			Template::menu();
		?>		
		<div class="contenido">
			<h1 class="info">Exito!</h1>
			<p class="mensaje"><?=$mensaje?></p>
		</div>		
		<?PHP Template::footer($usuario);?>
	</body>
</html>