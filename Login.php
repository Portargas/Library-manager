<?php
include("login.html");

$servername="localhost";
$username="root";
$password="";
$myDB="biblioteca";

if(isset($_POST["enviar"])){
	
	try{
		$socio =$_POST["usuario"];
		$pass =$_POST["password"];
		
		$conn = mysql_connect($servername,$username,$password);
		mysql_select_db($myDB,$conn);
		
		$sql ="select * from socio where IDSocio ='$socio' and Password='$pass'";
			
		//Ejecuto la sentencia 
		$rs = mysql_query($sql,$conn);
		
		//compruebo si existe o no
		if (mysql_num_rows($rs)!=0){
				echo "<b>Inicio de sesion</b>";
			
                session_start();
			
                $_SESSION["usuario"]=$socio;
            
                $userSession = $_SESSION["usuario"];
         
				if($userSession == "Admin"){
					header("Location: Inicio.php");
				}else{
					header("Location: usuarios.php");
				}
		 
                
            
            
			}else{ 
				echo "<b>No existe el usuario</b><br/>";
				echo "Puede registrase en este enlace: <a href='Registro.php'>Registrese</a>";
				
			}  
         $conn =  null;
	}
   
	catch(PDOException $e){
		echo "Conexion fallida";
		$e->getMessage();
	}	
}
?>

