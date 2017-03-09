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
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
    <body>
		<header>
			<h1> Biblioteca municipal</h1>
			<span> <?php echo $_SESSION["usuario"]; ?></span>
		</header>
		<section>	
			<article>
				<h2> Lista de libros</h2>
				<br/>
				
				<div>
					<?php 
						include("lista.php");
					?>
					
					<br/>
					
				<form action="lista.php" method="POST"> 	
					<p>Buscar Libro o Autor</p><input type="text" name="busqueda" value=""/>	

					<input type="submit" name="buscar" value="Buscar"/>
				</form>
				</div>
			</article>
            <form action="salir.php" method="POST"> 	
					<input type="submit" name="salir" value="Salir"/>
            </form>
		</section>
    </body>
</html>