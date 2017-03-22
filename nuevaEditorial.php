<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Editoriales</title>
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
			<article class="editorial">
				<h2>Añadir Editorial</h2>
				
				<span>
					<form action="Editorial.php" method="POST"> 
						<p>Nombre</p> <input  type="text" name="nombre" value=""/>
					<br/>
						<p>Direccion</p> <input  type="text" name="direccion" value=""/>
					<br/>
						<p>IDEditorial</p> <input  type="text" name="idEditorial" value=""/>
					<br/>
						<p>Telefono</p> <input  type="text" name="telefono" value=""/>
					<br/>

						<input type="submit" name="enviar" value="enviar"/>
					</form>
                </span>
			</article>
			
			<article class="editorial">
				<h2>Lista de editoriales</h2>
			
				<?php 
					include("mostrarEditorial.php");
				?>
				
				
			</article>
        
            <a href="inicio.php">volver</a>
		</section>
    </body>
</html>