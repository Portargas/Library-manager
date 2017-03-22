<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Inicio</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<link rel="stylesheet" type="text/css" href="usuario.css"/>
	</head>
    <body>
		<header>
			<h1> Biblioteca municipal</h1>
			<span> <?php echo $_SESSION["usuario"]; ?></span>	
		</header>
		<section>
			<aside>
				<h2> Lista de libros</h2>
				<br/>
				
				<div>
					<?php 
						include("lista.php");
					?>
					
					<br/>
					
				<form action="buscar.php" method="POST"> 	
					<p>Buscar Libro o Autor</p><input type="text" name="busqueda" value=""/>	
					<input type="submit" name="buscar" value="Buscar"/>
				</form>
				</div>
			</aside>
            <form action="salir.php" method="POST"> 	
					<input id="salirUsuario" type="submit" name="salirUsuario" value="Salir"/>
            </form>
			<a href="nuevoTema.php"> Foro</a>
		</section>
    </body>
</html>