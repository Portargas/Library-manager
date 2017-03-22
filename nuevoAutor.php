<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Autores</title>
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
			<article class="autor">
				<h2>Añadir Autor</h2>
					<form action="Autor.php" method="POST"> 
						<p>Nombre</p> <input  type="text" name="nombre" value=""/>
					<br/>
						<p>Fecha de Nacimiento</p> <input  type="text" name="fecha" value=""/>
					<br/>
						<p>IDAutor</p> <input  type="text" name="idAutor" value=""/>
					<br/>
							
						<input type="submit" name="enviar" value="enviar"/>
					</form>
			</article>
			
			<article class="autor">
				<h2>Lista de autores</h2>
			
				<?php 
					include("mostrarAutor.php");
				?>
				
				
			</article>
            
        <a href="inicio.php">volver</a>
			
		</section>
    </body>
</html>