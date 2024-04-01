<?php 

$servidor = "localhost";
$userMySQL = "root";
$passwordMySQL = "";
$baseDatos = "chicago_fire";

/*=============================CREAR BASE DE DATOS=================================*/

try {

    $conexion = new PDO("mysql:host=$servidor",$userMySQL,$passwordMySQL);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $SQL = "CREATE DATABASE IF NOT EXISTS chicago_fire";
    $conexion->exec($SQL);


} catch (PDOException $e) {
    echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=vista/error-404.html'>"; 
    die();
}

/*==============================================CREAR TABLAS=================================================*/

try {

    $conexion = new PDO ("mysql:host=$servidor;dbname=$baseDatos",$userMySQL,$passwordMySQL);   
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   /*------------------ SECCION ------------------*/

    $SQL = "CREATE TABLE IF NOT EXISTS seccion (
        nombre INT(3) PRIMARY KEY NOT NULL
    )";
    $conexion->exec($SQL);

    /*------------------ ESTACION ------------------*/

    $SQL = "CREATE TABLE IF NOT EXISTS estacion (
        nombre VARCHAR(50) PRIMARY KEY NOT NULL
    )";
    $conexion->exec($SQL);
   
    /*------------------ PERSONA ------------------*/

    $SQL = "CREATE TABLE IF NOT EXISTS persona (
        cedula INT(10) PRIMARY KEY NOT NULL,
        nombre VARCHAR(100) NOT NULL,
        edad INT(4) NOT NULL,
        correo VARCHAR(40) NOT NULL,
        telefono INT(15) NOT NULL,
        direccion VARCHAR(100) NOT NULL,
        sexo VARCHAR(2) NOT NULL,
        tipo_persona VARCHAR(20) NOT NULL,
        cargo VARCHAR(20) NOT NULL,
        seccion INT(3) NOT NULL,
        estacion VARCHAR(20) NOT NULL/*,
        FOREIGN KEY (seccion) REFERENCES seccion(nombre),
        FOREIGN KEY (estacion) REFERENCES estacion(nombre)*/  
    )";
    $conexion->exec($SQL);

    /*------------------ USUARIO ------------------*/

    $SQL = "CREATE TABLE IF NOT EXISTS usuario (
        cedula INT(10) PRIMARY KEY NOT NULL,
        tipo VARCHAR(25) NOT NULL,
        nombre VARCHAR(40) NOT NULL,
        clave VARCHAR(40) NOT NULL,
        estado VARCHAR(2) NOT NULL,
        FOREIGN KEY (cedula) REFERENCES persona(cedula)  
    )";
    $conexion->exec($SQL);

    /*¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿ COFLA ?????????????????*/

    $SQL = "INSERT IGNORE INTO persona VALUES(?,?,?,?,?,?,?,?,?,?,?)";
    $preparado = $conexion->prepare($SQL);
    $preparado->execute([0,"Cofla",0,"?",0,"?","?","Supervisor","?",99,"?"]);

    $SQL = "INSERT IGNORE INTO usuario VALUES(?,?,?,?,?)";
    $preparado = $conexion->prepare($SQL);
    $preparado->execute([0,"Supervisor","Cofla","Cofla","A"]);
   
    /*------------------ MUNICIPIO ------------------*/
    $SQL = "CREATE TABLE IF NOT EXISTS municipio (
        nombre VARCHAR(25) PRIMARY KEY NOT NULL,
        estado VARCHAR(25) NOT NULL
    )";
    $conexion->exec($SQL);

    /*------------------ LUGAR ------------------*/

    $SQL = "CREATE TABLE IF NOT EXISTS lugar (
        nombre VARCHAR(25) PRIMARY KEY NOT NULL,
        tipo_lugar VARCHAR(20) NOT NULL,
        municipio VARCHAR(25) NOT NULL,
        estado VARCHAR(25) NOT NULL,
        FOREIGN KEY (municipio) REFERENCES municipio(nombre) 
    )";
    $conexion->exec($SQL);

    /*------------------ MARCA ------------------*/

    $SQL = "CREATE TABLE IF NOT EXISTS marca (
        nombre VARCHAR(20) PRIMARY KEY NOT NULL 
    )";
    $conexion->exec($SQL);

    /*------------------ MODELO ------------------*/

    $SQL = "CREATE TABLE IF NOT EXISTS modelo (
        nombre VARCHAR(20) PRIMARY KEY NOT NULL,
        marca VARCHAR(20) NOT NULL,
        FOREIGN KEY (marca) REFERENCES marca(nombre)
    )";
    $conexion->exec($SQL);
    

    /*------------------ VEHICULO ------------------*/

    $SQL = "CREATE TABLE IF NOT EXISTS vehiculo (
        niv INT(30) PRIMARY KEY NOT NULL,
        tipo VARCHAR(20) NOT NULL,
        unidad INT(3) NOT NULL,
        cedula INT(10) NOT NULL,
        marca VARCHAR(25) NOT NULL,
        modelo VARCHAR(25) NOT NULL,
        seri INT(15) NOT NULL,
        cilindro VARCHAR(20) NOT NULL,
        carburante VARCHAR(20) NOT NULL,
        seguro VARCHAR(15) NOT NULL/*,
        FOREIGN KEY (cedula) REFERENCES persona(cedula),
        FOREIGN KEY (marca) REFERENCES marca(nombre),
        FOREIGN KEY (modelo) REFERENCES modelo(nombre)*/
    )";
    $conexion->exec($SQL); 

    /*------------------ RECURSO ------------------*/

    $SQL = "CREATE TABLE IF NOT EXISTS recurso (
        id_recurso INT(9) PRIMARY KEY NOT NULL,
        tipo VARCHAR(20) NOT NULL,
        nombre VARCHAR(20) NOT NULL,
        cantidad INT(9) NOT NULL
    )";
    $conexion->exec($SQL);

    /*------------------ INCIDENTE ------------------*/

    $SQL = "CREATE TABLE IF NOT EXISTS incidente (
        id INT(9) PRIMARY KEY NOT NULL,
        tipo_incidente VARCHAR(20) NOT NULL,
        fecha VARCHAR(15) NOT NULL,
        seccion INT(3) NOT NULL,
        estacion VARCHAR(20) NOT NULL,
        unidades VARCHAR(20) NOT NULL,  /*REVISION */
        tipo_aviso VARCHAR(20) NOT NULL,
        cedula_aviso INT(10) NOT NULL,
        tipo VARCHAR(20) NOT NULL,
        aviso VARCHAR(20) NOT NULL, /*HORA*/
        salida VARCHAR(20) NOT NULL,
        llegada VARCHAR(20) NOT NULL,
        regreso VARCHAR(20) NOT NULL,
        localidad VARCHAR(20) NOT NULL,
        municipio VARCHAR(20) NOT NULL,
        direccion VARCHAR(20) NOT NULL,
        ruta VARCHAR(20) NOT NULL,
        recursos VARCHAR(50) NOT NULL,
        FOREIGN KEY (cedula_aviso) REFERENCES persona(cedula),
        FOREIGN KEY (seccion) REFERENCES seccion(nombre),
        FOREIGN KEY (estacion) REFERENCES estacion(nombre),
        FOREIGN KEY (localidad) REFERENCES lugar(nombre),
        FOREIGN KEY (municipio) REFERENCES municipio(nombre),
        FOREIGN KEY (ruta) REFERENCES lugar(nombre)

    )";
    $conexion->exec($SQL);

    $conexion = null;

} catch (PDOException $e) {
    echo $e->getMessage();
}

?>