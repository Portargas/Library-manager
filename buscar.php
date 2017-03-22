<?php

$servername = "localhost";
$username = "root";
$password = "";
$myDB ="biblioteca";

session_start();

if(isset($_POST["buscar"])){
		
		try{
		
			$busqueda = $_POST["busqueda"];
		
		
			$conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
						
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						
			$sql = $conn->prepare("select Titulo, Ubicacion, Autor from libro where Titulo = '$busqueda' OR Autor = '$busqueda'");
						
			//Ejecuto la sentencia 
			$sql -> execute();	

			$resultado = $sql -> fetchAll();
						
			if(isset($resultado)){
				foreach($resultado as $row){
					
                    if($row["Titulo"]==$busqueda){
                        echo "Titulo: ".$row["Titulo"]." Estado: ".$row["Ubicacion"]."<br/>";
                    }else{ 
                        echo "Autor: ".$row["Autor"]." Estado: ".$row["Ubicacion"]."<br/>";
                    }
					
				}	
			}else{
				echo "Error no existen libros en la base de datos";
			}
			
		}
					
		catch(PDOException $e) {						
			echo "Error: " . $e->getMessage();
		}
	}
	
	if($_SESSION["usuario"] == "Admin"){
		echo '<a href="inicio.php"><input type="button" value="volver"/></a>';
	}else{
		echo '<a href="usuarios.php"><input type="button" value="volver"/></a>';
	}
	


if($_SESSION["usuario"]=="Admin"){

    if(isset($_POST["borrar"])){
		
		try {			
		//guardamos los campos de busqueda
            $busqueda = $_POST["busqueda"];


            $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //Insertamos directamente una fila en la BD
            $sqlSentencia = "   delete from libro where Titulo ='$busqueda'";

            $conn->exec($sqlSentencia);
            echo "libro borrado correctamente </br>";

            $conn = null;
	   }

	   catch(PDOException $e) {						
		  echo "Error: " . $e->getMessage();
	   }
    
    }
}

?>