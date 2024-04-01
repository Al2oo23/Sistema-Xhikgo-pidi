<?php 

session_start(); 
include("../modelo/conexion.php");
include("../modelo/clase_sesion.php");

$sesion = new sesion();

if(isset($_POST['login']) && $_POST['login']=="login"){
    
    $sesion->setUsuario($_POST['usuario']);
    $sesion->setClave($_POST['clave']);

    $datos = $sesion->verificarUsuario(
        $sesion->getUsuario(),
        $sesion->getClave()
    );

    if(empty($datos)){

		echo "<script>alert('Usuario o Clave Invalido')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../index.php'>"; 

	}else{		

		$_SESSION['usuarioDatos'] = $datos;
		header("Location: ../vista/inicio.php");
	}
}

if(isset($_POST['logout']) && $_POST['logout']=="logout"){
    
    /*date_default_timezone_set('America/Caracas');

    if(date('d')==27){
        $sesion->respaldo();
        $sesion->vaciarBitacora();
    }*/
    
	header("Location: ../index.php");

}


?>