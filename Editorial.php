<?php

$servername = "localhost";
$username = "root";
$password = "";
$myDB ="biblioteca";

if(isset($_POST["enviar"])){
		
	try {			
		//guardamos los campos de usuario y contraseña
		$editorial=$_POST["nombre"];
		$direc=$_POST["direccion"];
        $idEdi = $_POST["idEditorial"];
		$tlf = $_POST["telefono"];
		
		
		$conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		//Insertamos directamente una fila en la BD
		$sqlSentencia = "   INSERT INTO editorial (IDEditorial, Direccion, Nombre, Telefono) 
                            VALUES ('$idEdi','$direc','$editorial','$tlf')";
							
		$conn->exec($sqlSentencia);
		echo "editorial agregado correctamente </br>";
      
		$conn = null;
	}

	catch(PDOException $e) {						
		echo "Error: " . $e->getMessage();
	}
    
    ?>
        <form action="salir.php" method="POST"> 	
            <input type="submit" name="volver" value="Volver"/>
        </form>
    <?php
}
?>