<?php 

    $servidor = "localhost";
    $userMySQL = "root";
    $passwordMySQL = "";
    $baseDatos = "chicago_fire";

    try {

        $conexion = new PDO("mysql:host=$servidor;dbname=$baseDatos",$userMySQL,$passwordMySQL);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



    } catch (PDOException $e) {
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=vista/error-404.html'>"; 
        die();
    }

?>