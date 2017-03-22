<?php

$servername = "localhost";
$username = "root";
$password = "";
$myDB ="biblioteca";

if(isset($_POST["enviar"])){
		
	try {			
		//guardamos los campos de usuario y contraseña
		
		$Libro = $_POST["libro"];
		$user = $_POST["usuario"];
		$prestado ="En prestamo";
		$fechaPrestamo = date("H:m:s Y-m-d");
		
		
		$conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		
		//Insertamos insertamos los valores en la tabla
		$sqlSentencia = "   INSERT INTO prestamo (Fecha_prestamo ,Ubicacion_actual, Prestamista, Libro) 
                            VALUES ('$fechaPrestamo', '$prestado', '$user', '$Libro')";
        
        $conn->exec($sqlSentencia);
        
        
        $sqlS = " update libro set Ubicacion= '$prestado' where Titulo = '$Libro'";
            
        $conn->exec($sqlS);
        
							
		
		echo "Libro agregado correctamente </br>";
      

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