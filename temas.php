<?php

$servername = "localhost";
$username = "root";
$password = "";
$myDB ="biblioteca";

if(isset($_POST["enviar"])){
		
	try {			
		//guardamos los campos de usuario y contraseña
		$autor=$_POST["nombre"];
		$descrip=$_POST["tema"];
		
		
		$conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		//Insertamos directamente una fila en la BD
		$sqlSentencia = "   INSERT INTO tema (IDTema, Nombre) 
                            VALUES ('$autor','$descrip')";
							
		$conn->exec($sqlSentencia);
		echo "Tema agregado correctamente </br>";
      
		$conn = null;
	}

	catch(PDOException $e) {						
		echo "Error: " . $e->getMessage();
	}			
}
?>

<a href="nuevoTema.php">volver</a>  