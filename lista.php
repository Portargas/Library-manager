<?php 
				
	$servername="localhost";
	$username="root";
	$password="";
	$myDB="biblioteca";
				
	try{
						
		$conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);

						
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						
		$sql = $conn->prepare("select Titulo, IDLibro, Ubicacion from libro");
						
		//Ejecuto la sentencia 
		$sql -> execute();	

		$resultado = $sql -> fetchAll();
						
		if(isset($resultado)){
			foreach($resultado as $row){
					
				echo "Titulo del libro: ".$row["Titulo"]." IDLibro: ".$row["IDLibro"]." Estado: ".$row["Ubicacion"]."<br/>";
			}	
		}else{
			echo "Error no existen libros en la base de datos";
		}
			
		$conn =  null;
		
		}
					
		catch(PDOException $e) {						
			echo "Error: " . $e->getMessage();
		}
?>