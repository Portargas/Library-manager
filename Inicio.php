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
			<span>Usuario: <?php echo $_SESSION["usuario"]; ?></span>
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
                    <input type="submit" name="borrar" value="Borrar"/>
				</form>
				</div>
			</aside>

			<article id="centro">
				<h3>Libro nuevo.</h3>
                
				<form action="alta.php" method="POST"> 
						<p>Autor</p> <input  type="text" name="autor" value=""/>
					<br/>
						<p>Categoria</p> <input  type="text" name="categoria" value=""/>
					<br/>
						<p>Editorial</p> <input  type="text" name="editorial" value=""/>
					<br/>
						<p>Formato</p><input  type="text" name="formato" value=""/>
					<br/>
						<p>Idioma</p><input  type="text" name="idioma" value=""/>
					<br/>
						<p>IDLibro</p><input  type="text" name="idlibro" value=""/>
					<br/>	
						<p>Tema</p><input type="text" name="tema" value=""/>
					<br/>
						<p>Titulo</p><input type="text" name="titulo" value=""/>
					<br/>
						<p>Estado</p><input type="text" name="ubicacion" value=""/>	

					<input type="submit" name="enviar" value="enviar" id="boton"/>
				</form>
			</article>
			<article id="prestamo">
				<h3> Prestamo </h3>
				<form action="prestamo.php" method="POST"> 
				
						<p>Libro</p><input  type="text" name="libro" value=""/>
					<br/>	
						<p>Usuario</p><input type="text" name="usuario" value=""/>	

					<input type="submit" name="enviar" value="enviar"/>
				</form>
			</article>
			
			<article id="devolucion">
				<h3> Devolución </h3>
				<form action="devolucion.php" method="POST"> 
				
						<p>Libro</p><input  type="text" name="idlibro" value=""/>
					<br/>	
						<p>Usuario</p><input type="text" name="usuario" value=""/>	

					<input type="submit" name="enviar" value="enviar"/>
				</form>
			</article>
            
            <form action="salir.php" method="POST"> 	
					<input id="salir" type="submit" name="salir" value="Salir"/>
            </form>
            <a href="nuevoAutor.php"> Añadir Autor</a>
            <a href="nuevaEditorial.php">Añadir Editorial</a>
            <a href="nuevoTema.php"> Añadir tema</a>
		</section>
    </body>
</html>