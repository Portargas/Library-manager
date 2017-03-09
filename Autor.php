<?php

$servername = "localhost";
$username = "root";
$password = "";
$myDB ="biblioteca";

if(isset($_POST["enviar"])){
		
	try {			
		//guardamos los campos de usuario y contraseña
		$autor=$_POST["nombre"];
		$fechaNac=$_POST["fecha"];
        $idAutor = $_POST["idAutor"];
		
		
		$conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		//Insertamos directamente una fila en la BD
		$sqlSentencia = "   INSERT INTO autor (IDAutor, Fecha_nacimiento, Nombre) 
                            VALUES ('$idAutor','$fechaNac','$autor')";
							
		$conn->exec($sqlSentencia);
		echo "Autor agregado correctamente </br>";
      
		$conn = null;
	}

	catch(PDOException $e) {						
		echo "Error: " . $e->getMessage();
	}			
}
?>
        <form action="salir.php" method="POST"> 	
            <input type="submit" name="volver" value="Volver"/>
        </form>
    <?php

?>