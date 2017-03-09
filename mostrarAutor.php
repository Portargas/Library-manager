<?php 
				
	$servername="localhost";
	$username="root";
	$password="";
	$myDB="biblioteca";
				
	try{
						
		$conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);

						
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						
		$sql = $conn->prepare("select * from autor");
						
		//Ejecuto la sentencia 
		$sql -> execute();	

		$resultado = $sql -> fetchAll();
						
		if(isset($resultado)){
			foreach($resultado as $row){
					
				echo $row["Nombre"]."<br/>";
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