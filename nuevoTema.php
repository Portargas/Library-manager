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
			<article class="tema">
				<h2>Añadir Tema</h2>
					<form action="temas.php" method="POST"> 
						<p>Nombre</p> <input  type="text" name="nombre" value=""/>
					<br/>
						<p>Tema</p> <input  type="text" name="tema" value=""/>
					<br/>

						<input type="submit" name="enviar" value="enviar"/>
					</form>
			</article>
			
			<article class="tema">
				<h2>Lista de autores</h2>
			
				<?php 
					include("mostrarTemas.php");
				?>
				
				
			</article>
            
        <form action="salir.php" method="POST"> 	
            <input class="tema" type="submit" name="volver" value="Volver"/>
        </form>
			
		</section>
    </body>
</html>