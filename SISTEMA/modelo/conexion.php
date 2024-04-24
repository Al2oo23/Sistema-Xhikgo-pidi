<?php 

    // MysSQL:

    $servidor = "localhost";
    $userMySQL = "root";
    $passwordMySQL = "";
    $baseDatos = "chicago_fire";

    // PostgreSQL:
    
    // $servidor = "localhost";
    // $puerto = "5432";
    // $userPostgreSQL = "postgres";
    // $passwordPostgreSQL = "30545345";
    // $baseDatos = "chicago_fire";

    try {

        // Conexion MySQL------------------------------->

        $conexion = new PDO("mysql:host=$servidor;dbname=$baseDatos",$userMySQL,$passwordMySQL);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Conexion PostgreSQL ------------------------->

        // $conexion = new PDO ("pgsql:host=$servidor;dbname=$baseDatos; port=$puerto", $userPostgreSQL, $passwordPostgreSQL);   
        // $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=vista/error-404.html'>"; 
        die();
    }

?>