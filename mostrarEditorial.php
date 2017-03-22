<?php 
				
	$servername="localhost";
	$username="root";
	$password="";
	$myDB="biblioteca";
				
	try{
						
		$conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);

						
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						
		$sql = $conn->prepare("select * from editorial");
						
		//Ejecuto la sentencia 
		$sql -> execute();	

		$resultado = $sql -> fetchAll();
						
		if(isset($resultado)){
			foreach($resultado as $row){
					
				echo "Nombre: ".$row["Nombre"]." Direccion: ".$row["Direccion"]." Telefono ".$row["Telefono"]." IDEditorial ".$row["IDEditorial"]."<br/>";
			}	
		}else{
			echo "Error no existe ese autor en nuestra base de datos";
		}
			
		$conn =  null;
		
	}
					
	catch(PDOException $e) {						
		echo "Error: " . $e->getMessage();
	}

?>