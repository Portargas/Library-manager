<?php

$servername = "localhost";
$username = "root";
$password = "";
$myDB ="biblioteca";

if(isset($_POST["enviar"])){
		
	try {			
		//guardamos los campos de usuario y contraseña
		$autor=$_POST["autor"];
		$categoria=$_POST["categoria"];
        $editorial = $_POST["editorial"];
		$formato = $_POST["formato"];
		$idioma = $_POST["idioma"];
		$idLibro = $_POST["idlibro"];
		$tema = $_POST["tema"];
		$titulo = $_POST["titulo"];
		$ubic = $_POST["ubicacion"];
		
		
		$conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		//Insertamos directamente una fila en la BD
		$sqlSentencia = "   INSERT INTO libro (Autor, Categoria, Editorial, Formato, Idioma, IDLibro, Tema, Titulo, Ubicacion) 
                            VALUES ('$autor','$categoria','$editorial','$formato','$idioma','$idLibro','$tema','$titulo','$ubic')";
							
		$conn->exec($sqlSentencia);
		echo "Libro agregado correctamente </br>";
        
        header("Location: Inicio.php");
		
        $conn = null;
	
	}

	catch(PDOException $e) {						
		echo "Error: " . $e->getMessage();
	}			
}
?>