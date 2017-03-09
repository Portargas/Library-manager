<?php
if(isset($_POST["salir"])){
    
    try{
    
        $userSession=$_SESSION["usuario"];
        
        //borramos la sesion
        session_unset();
        
        //Destruimos la session completamente
        session_destroy();
        
        //volvemos al login
        header ("Location: login.php");
        
        $conn = null;
    
    }
    
    catch(PDOException $e){
		echo "Conexion fallida";
		$e->getMessage();
	}

}

if(isset($_POST["volver"])){
    
header("Location: Inicio.php");

}


?>