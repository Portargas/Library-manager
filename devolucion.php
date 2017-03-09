<?php

$servername = "localhost";
$username = "root";
$password = "";
$myDB ="biblioteca";

if(isset($_POST["enviar"])){
		
	try {			
		//guardamos los campos de usuario y contraseña
		
		$idLibro = $_POST["idlibro"];
		$user = $_POST["usuario"];
		$prestado ="Disponible";
		$fechaPrestamo = date("H:m:s Y-m-d");
		
		
		$conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		
		//Insertamos insertamos los valores en la tabla
        
        $actualUbi = " update prestamo set IDUbicacion_actual= '$prestado', Fecha_devolucion ='$fechaPrestamo' where Libro = '$idLibro'";
            
        $conn->exec($actualUbi);
        
        $sqlS = " update libro set Ubicacion= '$prestado' where Titulo = '$idLibro'";
            
        $conn->exec($sqlS);
        
		echo "Libro devuelto correctamente </br>";
      
        
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