<?php

header("Location: registro.html");


$servername = "localhost";
$username = "root";
$password = "";
$myDB ="biblioteca";

include("registro.html");

if(isset($_POST["enviar"])){
	if($_POST["passRegistro"]==$_POST["passRegistro2"]){
		
	try {			
		//guardamos los campos de usuario y contraseña
		$socio=$_POST["socio"];
		$pass=$_POST["passRegistro"];
        $nombre = $_POST["nombre"];
		$tlf = $_POST["telefono"];
		$direc = $_POST["direccion"];
		
		
		$conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		//Insertamos directamente una fila en la BD
		$sqlSentencia = "   INSERT INTO socio (Password, IDSocio, Nombre,Telefono, Direccion) 
                            VALUES ('$pass', '$socio', '$nombre','tlf','direc')";
							
		$conn->exec($sqlSentencia);
		header("Location: Login.php");
        
	}

	catch(PDOException $e) {						
		echo "Error: " . $e->getMessage();
		}
	$conn = null;			
		}else{
			echo "<b>ERROR: Las contraseñas deben coindicir<b><br/>";
			echo "<a href='Registro.php'>Volver al registro</a>";
		}
}

?>