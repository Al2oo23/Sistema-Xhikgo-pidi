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

   //------------------ MUNICIPIO ------------------
    $SQL = "CREATE TABLE IF NOT EXISTS municipio (
        id INT PRIMARY KEY AUTO_INCREMENT,
        nombre VARCHAR(25) NOT NULL,
        codigo VARCHAR(4) NOT NULL
    )";
    $conexion->exec($SQL);

    //------------------ LUGAR ------------------

    $SQL = "CREATE TABLE IF NOT EXISTS lugar (
        id INT PRIMARY KEY AUTO_INCREMENT,
        nombre VARCHAR(25) NOT NULL,
        municipio VARCHAR(25) NOT NULL,
        distancia VARCHAR(25) NOT NULL/*,
        FOREIGN KEY (municipio) REFERENCES municipio(nombre)*/ 
    )";
    $conexion->exec($SQL);
   
    
    //------------------ SECCION ------------------

    $SQL = "CREATE TABLE IF NOT EXISTS seccion (
        id INT PRIMARY KEY AUTO_INCREMENT,
        numero INT(3) NOT NULL
    )";
    $conexion->exec($SQL);

    //------------------ ESTACION ------------------

    $SQL = "CREATE TABLE IF NOT EXISTS estacion (
        id INT PRIMARY KEY AUTO_INCREMENT,
        nombre VARCHAR(50) NOT NULL
    )";
    $conexion->exec($SQL);

    //------------------ CARGO ------------------

    $SQL = "CREATE TABLE IF NOT EXISTS cargo (
        id INT PRIMARY KEY AUTO_INCREMENT,
        nombre VARCHAR(20) NOT NULL
    )";
    $conexion->exec($SQL);
   
    //------------------ PERSONA ------------------

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
        estacion VARCHAR(20) NOT NULL
    )";
    $conexion->exec($SQL);

    //------------------ TIPO DE PERSONA ------------------

    $SQL = "CREATE TABLE IF NOT EXISTS tipo_persona (
        id INT PRIMARY KEY AUTO_INCREMENT,
        tipo VARCHAR(20) NOT NULL,
        descripcion VARCHAR(20) NOT NULL
    )";
    $conexion->exec($SQL);

    //------------------ USUARIO ------------------

    $SQL = "CREATE TABLE IF NOT EXISTS usuario (
        cedula INT(10) PRIMARY KEY NOT NULL,
        tipo VARCHAR(25) NOT NULL,
        nombre VARCHAR(40) NOT NULL,
        clave VARCHAR(40) NOT NULL,
        estado VARCHAR(2) NOT NULL,
        FOREIGN KEY (cedula) REFERENCES persona(cedula)  
    )";
    $conexion->exec($SQL);

    //¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿ COFLA ?????????????????

    $SQL = "INSERT IGNORE INTO persona VALUES(?,?,?,?,?,?,?,?,?,?,?)";
    $preparado = $conexion->prepare($SQL);
    $preparado->execute([0,"Cofla",0,"?",0,"?","?","Supervisor","?",99,"?"]);

    $SQL = "INSERT IGNORE INTO usuario VALUES(?,?,?,?,?)";
    $preparado = $conexion->prepare($SQL);
    $preparado->execute([0,"Supervisor","Cofla","Cofla","A"]);

    //------------------ MARCA ------------------

    $SQL = "CREATE TABLE IF NOT EXISTS marca (
        id INT PRIMARY KEY AUTO_INCREMENT,
        nombre VARCHAR(20) NOT NULL 
    )";
    $conexion->exec($SQL);


      //------------------ Tipo de Aviso------------------

      $SQL = "CREATE TABLE IF NOT EXISTS aviso (
        id INT PRIMARY KEY AUTO_INCREMENT,
        nombre VARCHAR(20) NOT NULL 
    )";
    $conexion->exec($SQL);



    //------------------ MODELO ------------------

    $SQL = "CREATE TABLE IF NOT EXISTS modelo (
        id INT PRIMARY KEY AUTO_INCREMENT,
        nombre VARCHAR(20) NOT NULL,
        marca VARCHAR(20) NOT NULL
    )";
    $conexion->exec($SQL);

     //------------------ ASEGURADORA ------------------

     $SQL = "CREATE TABLE IF NOT EXISTS seguro (
        id INT PRIMARY KEY AUTO_INCREMENT,
        nombre VARCHAR(20) NOT NULL,
        tipo VARCHAR(20) NOT NULL
    )";
    $conexion->exec($SQL);

     //------------------ RECURSO ------------------

     $SQL = "CREATE TABLE IF NOT EXISTS recurso (
        id INT PRIMARY KEY AUTO_INCREMENT,
        nombre VARCHAR(20) NOT NULL,
        tipo VARCHAR(20) NOT NULL,
        cantidad INT(20) NOT NULL
    )";
    $conexion->exec($SQL);

    //------------------ VEHICULO ------------------

    $SQL = "CREATE TABLE IF NOT EXISTS vehiculo (
        niv INT(100) PRIMARY KEY,
        marca VARCHAR(20) NOT NULL,
        modelo INT(20) NOT NULL,
        seria INT(20) NOT NULL,
        carburante VARCHAR(20) NOT NULL,
        seguro VARCHAR(20) NOT NULL,
        cedula VARCHAR(20) NOT NULL,
        tipo VARCHAR(20) NOT NULL,
        unidad INT(20) NOT NULL
    )";
    $conexion->exec($SQL);

        //Abejas

    $SQL = "CREATE TABLE IF NOT EXISTS abejas (
        id INT PRIMARY KEY AUTO_INCREMENT,
        fecha VARCHAR(100) NOT NULL,
        seccion VARCHAR(20) NOT NULL,
        estacion VARCHAR(20) NOT NULL,
        aviso VARCHAR(20) NOT NULL,
        hora VARCHAR(20) NOT NULL,
        salida VARCHAR(20) NOT NULL,
        llegada VARCHAR(20) NOT NULL,
        regreso VARCHAR(20) NOT NULL,
        panal VARCHAR(20) NOT NULL,
        direccion VARCHAR(100) NOT NULL,
        lugar VARCHAR(20) NOT NULL,
        inmueble INT(20) NOT NULL,
        jefe INT(20) NOT NULL,
        recurso VARCHAR(20) NOT NULL,
        cantidad INT(20) NOT NULL,
        efectivo VARCHAR(20) NOT NULL,
        unidad VARCHAR(20) NOT NULL,
        autoridades VARCHAR(20) NOT NULL
    )";
    $conexion->exec($SQL);


} catch (PDOException $e) {
    echo $e->getMessage();
}


// $servidor = "localhost";
// $puerto = "5432";
// $userPostgreSQL = "postgres";
// $passwordPostgreSQL = "30545345";
// $baseDatos = "chicago_fire";

// /*=============================CREAR BASE DE DATOS=================================*/

// try {

//     $conexion = new PDO("pgsql:host=$servidor; port=$puerto", $userPostgreSQL, $passwordPostgreSQL);
//     $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     $SQL = "SELECT 1 FROM pg_database WHERE datname = '$baseDatos'";
//     $existe = $conexion->query($SQL)->fetchColumn();

//     if (!$existe) {
//         $SQL = "CREATE DATABASE $baseDatos";
//         $conexion->exec($SQL);
//     }


// } catch (PDOException $e) {
//     echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=vista/error-404.html'>"; 
//     die();
// }

// /*==============================================CREAR TABLAS=================================================*/

// try {
//     $conexion = new PDO ("pgsql:host=$servidor;dbname=$baseDatos; port=$puerto", $userPostgreSQL, $passwordPostgreSQL);   
//     $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     /*------------------ SECCION ------------------*/

//     $SQL = "CREATE TABLE IF NOT EXISTS seccion (
//         nombre INT PRIMARY KEY NOT NULL
//     )";
//     $conexion->exec($SQL);

//     /*------------------ ESTACION ------------------*/

//     $SQL = "CREATE TABLE IF NOT EXISTS estacion (
//         nombre VARCHAR(50) PRIMARY KEY NOT NULL
//     )";
//     $conexion->exec($SQL);
   
//     /*------------------ PERSONA ------------------*/

//     $SQL = "CREATE TABLE IF NOT EXISTS persona (
//         cedula INT PRIMARY KEY NOT NULL,
//         nombre VARCHAR(100) NOT NULL,
//         edad INT NOT NULL,
//         correo VARCHAR(40) NOT NULL,
//         telefono INT NOT NULL,
//         direccion VARCHAR(100) NOT NULL,
//         sexo VARCHAR(2) NOT NULL,
//         tipo_persona VARCHAR(20) NOT NULL,
//         cargo VARCHAR(20) NOT NULL,
//         seccion INT,
//         estacion VARCHAR(50)
//         /*FOREIGN KEY (seccion) REFERENCES seccion(nombre) ON DELETE SET NULL,
//           FOREIGN KEY (estacion) REFERENCES estacion(nombre) ON DELETE SET NULL*/
//     )";
//     $conexion->exec($SQL);

//     /*------------------ USUARIO ------------------*/

//     $SQL = "CREATE TABLE IF NOT EXISTS usuario (
//         cedula INT PRIMARY KEY NOT NULL,
//         tipo VARCHAR(25) NOT NULL,
//         nombre VARCHAR(40) NOT NULL,
//         clave VARCHAR(40) NOT NULL,
//         estado VARCHAR(2) NOT NULL,
//         FOREIGN KEY (cedula) REFERENCES persona(cedula) ON DELETE CASCADE
//     )";
//     $conexion->exec($SQL);

//      /*------------------ COFLA ???????????????????? ------------------*/

//     $SQL = "INSERT INTO persona (cedula, nombre, edad, correo, telefono, direccion, sexo, tipo_persona, cargo, seccion, estacion) VALUES(?,?,?,?,?,?,?,?,?,?,?) ON CONFLICT (cedula) DO NOTHING";
//     $preparado = $conexion->prepare($SQL);
//     $preparado->execute([0,"Cofla",0,"?",0,"?","?","Supervisor","?",99,"?"]);

   
    
//     $SQL = "INSERT INTO usuario (cedula, tipo, nombre, clave, estado) VALUES(?,?,?,?,?) ON CONFLICT (cedula) DO NOTHING";
//     $preparado = $conexion->prepare($SQL);
//     $preparado->execute([0,"Supervisor","Cofla","Cofla","A"]);
    

//     /*------------------ MUNICIPIO ------------------*/
//     $SQL = "CREATE TABLE IF NOT EXISTS municipio (
//         nombre VARCHAR(25) PRIMARY KEY NOT NULL,
//         estado VARCHAR(25) NOT NULL
//     )";
//     $conexion->exec($SQL);

//     /*------------------ LUGAR ------------------*/

//     $SQL = "CREATE TABLE IF NOT EXISTS lugar (
//         nombre VARCHAR(25) PRIMARY KEY NOT NULL,
//         tipo_lugar VARCHAR(20) NOT NULL,
//         municipio VARCHAR(25) NOT NULL,
//         estado VARCHAR(25) NOT NULL,
//         FOREIGN KEY (municipio) REFERENCES municipio(nombre) ON DELETE SET NULL
//     )";
//     $conexion->exec($SQL);

//     /*------------------ MARCA ------------------*/

//     $SQL = "CREATE TABLE IF NOT EXISTS marca (
//         nombre VARCHAR(20) PRIMARY KEY NOT NULL 
//     )";
//     $conexion->exec($SQL);

//     /*------------------ MODELO ------------------*/

//     $SQL = "CREATE TABLE IF NOT EXISTS modelo (
//         nombre VARCHAR(20) PRIMARY KEY NOT NULL,
//         marca VARCHAR(20) NOT NULL,
//         FOREIGN KEY (marca) REFERENCES marca(nombre) ON DELETE CASCADE
//     )";
//     $conexion->exec($SQL);
    

//     /*------------------ VEHICULO ------------------*/

//     $SQL = "CREATE TABLE IF NOT EXISTS vehiculo (
//         niv INT PRIMARY KEY NOT NULL,
//         tipo VARCHAR(20) NOT NULL,
//         unidad INT NOT NULL,
//         cedula INT NOT NULL,
//         marca VARCHAR(20) NOT NULL,
//         modelo VARCHAR(20) NOT NULL,
//         seri INT NOT NULL,
//         cilindro VARCHAR(20) NOT NULL,
//         carburante VARCHAR(20) NOT NULL,
//         seguro VARCHAR(15) NOT NULL,
//         FOREIGN KEY (cedula) REFERENCES persona(cedula) ON DELETE SET NULL,
//         FOREIGN KEY (marca) REFERENCES marca(nombre) ON DELETE SET NULL,
//         FOREIGN KEY (modelo) REFERENCES modelo(nombre) ON DELETE SET NULL
//     )";
//     $conexion->exec($SQL); 

//     /*------------------ RECURSO ------------------*/

//     $SQL = "CREATE TABLE IF NOT EXISTS recurso (
//         id_recurso INT PRIMARY KEY NOT NULL,
//         tipo VARCHAR(20) NOT NULL,
//         nombre VARCHAR(20) NOT NULL,
//         cantidad INT NOT NULL
//     )";
//     $conexion->exec($SQL);

//     /*------------------ INCIDENTE ------------------*/

//     $SQL = "CREATE TABLE IF NOT EXISTS incidente (
//         id INT PRIMARY KEY NOT NULL,
//         tipo_incidente VARCHAR(20) NOT NULL,
//         fecha VARCHAR(15) NOT NULL,
//         seccion INT NOT NULL,
//         estacion VARCHAR(50) NOT NULL,
//         unidades VARCHAR(20) NOT NULL,  /*REVISION */
//         tipo_aviso VARCHAR(20) NOT NULL,
//         cedula_aviso INT NOT NULL,
//         tipo VARCHAR(20) NOT NULL,
//         aviso VARCHAR(20) NOT NULL, /*HORA*/
//         salida VARCHAR(20) NOT NULL,
//         llegada VARCHAR(20) NOT NULL,
//         regreso VARCHAR(20) NOT NULL,
//         localidad VARCHAR(25) NOT NULL,
//         municipio VARCHAR(25) NOT NULL,
//         direccion VARCHAR(20) NOT NULL,
//         ruta VARCHAR(25) NOT NULL,
//         recursos VARCHAR(50) NOT NULL,
//         FOREIGN KEY (cedula_aviso) REFERENCES persona(cedula) ON DELETE SET NULL,
//         FOREIGN KEY (seccion) REFERENCES seccion(nombre) ON DELETE SET NULL,
//         FOREIGN KEY (estacion) REFERENCES estacion(nombre) ON DELETE SET NULL,
//         FOREIGN KEY (localidad) REFERENCES lugar(nombre) ON DELETE SET NULL,
//         FOREIGN KEY (municipio) REFERENCES municipio(nombre) ON DELETE SET NULL,
//         FOREIGN KEY (ruta) REFERENCES lugar(nombre) ON DELETE SET NULL
//     )";
//     $conexion->exec($SQL);

//     $conexion = null;

// } catch (PDOException $e) {
//     echo $e->getMessage();
// }

?>