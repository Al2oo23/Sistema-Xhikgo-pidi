<?php

$servidor = "localhost";
$userMySQL = "root";
$passwordMySQL = "";
$baseDatos = "chicago_fire";

/*============================= CREAR BASE DE DATOS =================================*/

try {

    $conexion = new PDO("mysql:host=$servidor", $userMySQL, $passwordMySQL);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $SQL = "CREATE DATABASE IF NOT EXISTS chicago_fire";
    $conexion->exec($SQL);
} catch (PDOException $e) {
    echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=vista/error-404.html'>";
    die();
}

/*============================================== CREAR TABLAS =================================================*/

try {

    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDatos", $userMySQL, $passwordMySQL);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //------------------ BITACORA ------------------
    $SQL = "CREATE TABLE IF NOT EXISTS bitacora (
        id INT PRIMARY KEY AUTO_INCREMENT,
        usuario VARCHAR(225) NOT NULL,
        accion VARCHAR(225) NOT NULL,
        fecha DATETIME NOT NULL
        )";
    $conexion->exec($SQL);

    //------------------ INSTITUCION ------------------
    $SQL = "CREATE TABLE IF NOT EXISTS institucion (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(25) NOT NULL,
    rif VARCHAR(25) NOT NULL,
    descripcion VARCHAR(20),
    logo VARCHAR(255) DEFAULT 'ruta/logo-por-defecto.png',
    firma VARCHAR(255) DEFAULT 'ruta/firma-por-defecto.pdf'
    )";
    $conexion->exec($SQL);

    //------------------ REPRESENTACIÓN INSTITUCIONAL ------------------
    $SQL = "CREATE TABLE IF NOT EXISTS representacion_institucional (
        id INT PRIMARY KEY AUTO_INCREMENT,
            fecha VARCHAR(100) NOT NULL,
            seccion VARCHAR(20) NOT NULL,
            estacion VARCHAR(20) NOT NULL,
            aviso VARCHAR(20) NOT NULL,
            hora VARCHAR(20) NOT NULL,
            salida VARCHAR(20) NOT NULL,
            llegada VARCHAR(20) NOT NULL,
            regreso VARCHAR(20) NOT NULL,
            causa VARCHAR(100) NOT NULL,
            direccion VARCHAR(100) NOT NULL,
            num_efectivos VARCHAR (20) NOT NULL,
            material VARCHAR (255) NOT NULL,
            explicacion VARCHAR(255) NOT NULL,
            ci_pnb varchar(100) DEFAULT NULL,
            ci_gnb varchar(100) DEFAULT NULL,
            ci_intt varchar(100) DEFAULT NULL,
            ci_invity varchar(100) DEFAULT NULL,
            ci_pc varchar(100) DEFAULT NULL,
            ci_otro varchar(100) DEFAULT NULL,
            jefe_comision VARCHAR(255) NOT NULL,
            jefe_generales VARCHAR(255) NOT NULL,
            jefe_seccion VARCHAR(255) NOT NULL,
            comandante VARCHAR(255) NOT NULL
        )";
    $conexion->exec($SQL);

    // //------------------ SERVICIOS ESPECIALES ------------------
    // $SQL = "CREATE TABLE IF NOT EXISTS servicios (
    //         id INT PRIMARY KEY AUTO_INCREMENT,
    //         fecha VARCHAR(100) NOT NULL,
    //         seccion VARCHAR(20) NOT NULL,
    //         estacion VARCHAR(20) NOT NULL,
    //         aviso VARCHAR(20) NOT NULL,
    //         hora VARCHAR(20) NOT NULL,
    //         salida VARCHAR(20) NOT NULL,
    //         llegada VARCHAR(20) NOT NULL,
    //         regreso VARCHAR(20) NOT NULL,
    //         causa VARCHAR(100) NOT NULL,
    //         direccion VARCHAR(100) NOT NULL,
    //         num_efectivos VARCHAR (20) NOT NULL,
    //         unidad VARCHAR(20) NOT NULL,
    //         material VARCHAR (255) NOT NULL,
    //         explicacion VARCHAR(255) NOT NULL,
    //         ci_pnb varchar(100) DEFAULT NULL,
    //         ci_gnb varchar(100) DEFAULT NULL,
    //         ci_intt varchar(100) DEFAULT NULL,
    //         ci_invity varchar(100) DEFAULT NULL,
    //         ci_pc varchar(100) DEFAULT NULL,
    //         ci_otro varchar(100) DEFAULT NULL,
    //         jefe_comision VARCHAR(255) NOT NULL,
    //         jefe_generales VARCHAR(255) NOT NULL,
    //         jefe_seccion VARCHAR(255) NOT NULL,
    //         comandante VARCHAR(255) NOT NULL
    //     )";
    // $conexion->exec($SQL);

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
        cedula VARCHAR(15) PRIMARY KEY NOT NULL,
        nombre VARCHAR(100) NOT NULL,
        edad INT(4) NOT NULL,
        correo VARCHAR(40) NOT NULL,
        telefono VARCHAR(15) NOT NULL,
        direccion VARCHAR(100) NOT NULL,
        sexo VARCHAR(2) NOT NULL,
        tipo_persona VARCHAR(20) NOT NULL,
        cargo VARCHAR(20) NOT NULL,
        seccion VARCHAR(3) NOT NULL,
        estacion VARCHAR(20) NOT NULL,
        estado VARCHAR(2) NOT NULL
    )";
    $conexion->exec($SQL);

    //------------------ CRITERIO_PERSONA ------------------

    $SQL = "CREATE TABLE IF NOT EXISTS criterio_persona (
        id INT PRIMARY KEY AUTO_INCREMENT,
        cedula VARCHAR(15) NOT NULL,
        nombre VARCHAR(100) NOT NULL,
        edad INT(4) NOT NULL,
        correo VARCHAR(40) NOT NULL,
        telefono VARCHAR(15) NOT NULL,
        direccion VARCHAR(100) NOT NULL,
        sexo VARCHAR(2) NOT NULL,
        tipo_persona VARCHAR(20) NOT NULL,
        cargo VARCHAR(20) NOT NULL,
        seccion VARCHAR(3) NOT NULL,
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
        cedula VARCHAR(15) PRIMARY KEY NOT NULL,
        nombre VARCHAR(40) NOT NULL,
        clave VARCHAR(40) NOT NULL,
        estado VARCHAR(2) NOT NULL,
        pregunta VARCHAR(20) NOT NULL,
        respuesta VARCHAR(20) NOT NULL/*,
        FOREIGN KEY (cedula) REFERENCES persona(cedula) */ 
    )";
    $conexion->exec($SQL);

    //------------------ PRIVILEGIO ------------------

    $SQL = "CREATE TABLE IF NOT EXISTS privilegio (
        cedula VARCHAR(10) PRIMARY KEY NOT NULL,
        institucion VARCHAR(10) NOT NULL,
        municipio VARCHAR(10) NOT NULL,
        lugar VARCHAR(10) NOT NULL,
        estacion VARCHAR(10) NOT NULL,
        seccion VARCHAR(10) NOT NULL,
        tipo VARCHAR(10) NOT NULL,
        cargo VARCHAR(10) NOT NULL,   
        persona VARCHAR(10) NOT NULL, 
        usuario VARCHAR(10) NOT NULL,
        aseguradora VARCHAR(10) NOT NULL,
        marca VARCHAR(10) NOT NULL,
        modelo VARCHAR(10) NOT NULL,
        vehiculo VARCHAR(10) NOT NULL,
        mantenimiento VARCHAR(10) NOT NULL,
        recurso VARCHAR(10) NOT NULL,
        incidente VARCHAR(10) NOT NULL/*,
        FOREIGN KEY (cedula) REFERENCES persona(cedula)  */
    )";
    $conexion->exec($SQL);

    //¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿ COFLA ?????????????????

    $SQL = "INSERT IGNORE INTO persona VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
    $preparado = $conexion->prepare($SQL);
    $preparado->execute(["0", "Cofla", 0, "?", 0, "?", "?", "Supervisor", "?", 99, "?", "A"]);

    $SQL = "INSERT IGNORE INTO usuario VALUES(?,?,?,?,?,?)";
    $preparado = $conexion->prepare($SQL);
    $preparado->execute(["0", "Cofla", "Cofla", "A", "que paso", "nada"]);

    $SQL = "SELECT * FROM privilegio WHERE cedula = ?";
    $preparado = $conexion->prepare($SQL);
    $preparado->execute(["0"]);
    $resultados = $preparado->fetchAll(PDO::FETCH_ASSOC);

    if (empty($resultados)) {
        $SQL = "INSERT INTO privilegio VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $preparado1 = $conexion->prepare($SQL);
        $preparado1->execute(["0", "si", "si", "si", "si", "si", "si", "si", "si", "si", "si", "si", "si", "si", "si", "si", "si"]);
    }

    //------------------ MARCA ------------------

    $SQL = "CREATE TABLE IF NOT EXISTS marca (
        id INT PRIMARY KEY AUTO_INCREMENT,
        nombre VARCHAR(20) NOT NULL 
    )";
    $conexion->exec($SQL);


    //------------------ TIPO DE AVISO ------------------

    $SQL = "CREATE TABLE IF NOT EXISTS aviso (
        id INT PRIMARY KEY AUTO_INCREMENT,
        nombre VARCHAR(20) NOT NULL 
    )";
    $conexion->exec($SQL);


    //------------------ TIPO DE INCIDENTE------------------

    $SQL = "CREATE TABLE IF NOT EXISTS tipo_incidente (
    id INT PRIMARY KEY AUTO_INCREMENT,
    incidente VARCHAR(20) NOT NULL 
    )";
    $conexion->exec($SQL);


    //------------------ MODELO ------------------

    $SQL = "CREATE TABLE IF NOT EXISTS modelo (
        id INT PRIMARY KEY AUTO_INCREMENT,
        marca VARCHAR(20) NOT NULL,
        nombre VARCHAR(20) NOT NULL
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
        tipo VARCHAR(20) NOT NULL,
        unidad VARCHAR(20) NOT NULL,
        marca VARCHAR(20) NOT NULL,
        modelo VARCHAR(20) NOT NULL,
        serial_vehiculo INT(20) NOT NULL,
        cilindrada VARCHAR(20) NOT NULL,
        carburante VARCHAR(20) NOT NULL,
        seguro VARCHAR(20) NOT NULL,
        cedula VARCHAR(20) NOT NULL
    )";
    $conexion->exec($SQL);

    //------------------ MANTENIMIENTO------------------

    $SQL = "CREATE TABLE IF NOT EXISTS mantenimiento (
        id INT PRIMARY KEY AUTO_INCREMENT,
        unidad INT(100) NOT NULL,
        incidente VARCHAR(20) NOT NULL,
        fecha VARCHAR(100) NOT NULL,
        estado VARCHAR(20) NOT NULL
    )";
    $conexion->exec($SQL);

    //-------------- ABEJAS ----------------------

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
            inmueble VARCHAR(20) NOT NULL,
            jefe VARCHAR(20) NOT NULL,
            ci_pnb VARCHAR(20) NULL,
            ci_gnb VARCHAR(20) NULL,
            ci_intt VARCHAR(20) NULL,
            ci_invity VARCHAR(20) NULL,
            ci_pc VARCHAR(20) NULL,
            ci_otro VARCHAR(20) NULL
        )";
    $conexion->exec($SQL);

    //------------------ TRANSITO -------------------

    $SQL = "CREATE TABLE IF NOT EXISTS transito (
        id INT PRIMARY KEY AUTO_INCREMENT,
        fecha VARCHAR(100) NOT NULL,
        seccion int(7) NOT NULL,
        estacion VARCHAR(20) NOT NULL,
        emergencia VARCHAR(40) NOT NULL,
        inspeccion VARCHAR(4) NOT NULL,
        incidente VARCHAR(20) NOT NULL,
        taviso VARCHAR(20) NOT NULL,
        solicitante VARCHAR(11) NOT NULL,
        recibidor VARCHAR(11) NOT NULL,
        aviso VARCHAR(20) NOT NULL,
        salida VARCHAR(20) NOT NULL,
        llegada VARCHAR(20) NOT NULL,
        regreso VARCHAR(20) NOT NULL,
       
        lesionados INT(3) NOT NULL,
        occisos INT(3) NOT NULL,
        observaciones VARCHAR(20) NOT NULL,
        incendio VARCHAR(3) NOT NULL,
        
        jefe VARCHAR(20) NOT NULL,
        
        pnb INT(11) NOT NULL,
        gnb INT(11) NOT NULL,
        intt INT(11) NOT NULL,
        invity INT(11) NOT NULL,
        pc INT(11) NOT NULL,
        otros INT(11) NOT NULL
    )";
    $conexion->exec($SQL);

    //------------------ LEVANTAMIENTO -------------------

    $SQL = "CREATE TABLE IF NOT EXISTS levantamiento (
        id INT PRIMARY KEY AUTO_INCREMENT,
        fecha VARCHAR(100) NOT NULL,
        seccion int(7) NOT NULL,
        estacion VARCHAR(20) NOT NULL,
        taviso VARCHAR(20) NOT NULL,
        solicitante VARCHAR(11) NOT NULL,
        recibidor VARCHAR(11) NOT NULL,
        aviso VARCHAR(20) NOT NULL,
        salida VARCHAR(20) NOT NULL,
        llegada VARCHAR(20) NOT NULL,
        regreso VARCHAR(20) NOT NULL,
        direccion VARCHAR(70) NOT NULL,
        municipio VARCHAR(20) NOT NULL,
        lugar VARCHAR(4) NOT NULL,
        estado VARCHAR(20) NOT NULL,
        jefe VARCHAR(20) NOT NULL,
        occiso VARCHAR(20) NOT NULL,
        estado_encontrado VARCHAR(20) NOT NULL, /*Maestro pendiente */
        desmembrado VARCHAR(3) NOT NULL,
        partes INT(3) NOT NULL,
        causa VARCHAR(20) NOT NULL,
        putrefacto VARCHAR(20) NOT NULL,
        autorizador VARCHAR(11) NOT NULL,

        norte VARCHAR(20) NOT NULL,
        sur VARCHAR(20) NOT NULL,
        este VARCHAR(20) NOT NULL,
        oeste VARCHAR(20) NOT NULL,
        clima VARCHAR(4) NOT NULL, 
        pavimento VARCHAR(4) NOT NULL,
        acta VARCHAR(3) NOT NULL,
        observaciones VARCHAR(50) NOT NULL,
        pnb INT(11) NOT NULL,
        gnb INT(11) NOT NULL,
        intt INT(11) NOT NULL,
        invity INT(11) NOT NULL,
        pc INT(11) NOT NULL,
        otros INT(11) NOT NULL,
        jefe_general VARCHAR(20) NOT NULL,
        jefe_deseccion VARCHAR(20) NOT NULL,
        comandante VARCHAR(20) NOT NULL
    )";
    $conexion->exec($SQL);

    //------------------ VEHICULO INCIDENTE -------------------

    $SQL = "CREATE TABLE IF NOT EXISTS vehiculo_incidente (
        id INT PRIMARY KEY AUTO_INCREMENT,
        id_incidente INT NOT NULL,
        niv VARCHAR(20) NOT NULL  
    )";
    $conexion->exec($SQL);

    //------------------ RECURSO USADO -------------------

    $SQL = "CREATE TABLE IF NOT EXISTS recurso_asignado (
        id INT PRIMARY KEY AUTO_INCREMENT,
        id_incidente INT NOT NULL,
        tipo_incidente VARCHAR(20) NOT NULL,
        id_recurso INT NOT NULL,
        cantidad INT (100) NOT NULL  
    )";
    $conexion->exec($SQL);

    //------------------ EFECTIVO ASIGNADO-------------------

    $SQL = "CREATE TABLE IF NOT EXISTS efectivo_asignado (
        id INT PRIMARY KEY AUTO_INCREMENT,
        id_incidente INT NOT NULL,
        tipo_incidente VARCHAR(20) NOT NULL,
        cedula VARCHAR(20) NOT NULL  
    )";
    $conexion->exec($SQL);

    //------------------ UNIDAD ASIGNADO-------------------

    $SQL = "CREATE TABLE IF NOT EXISTS unidad_asignada (
        id INT PRIMARY KEY AUTO_INCREMENT,
        id_incidente INT NOT NULL,
        tipo_incidente VARCHAR(20) NOT NULL,
        niv VARCHAR(20) NOT NULL  
    )";
    $conexion->exec($SQL);

    //------------------ INCENDIO -------------------

    $SQL = "CREATE TABLE IF NOT EXISTS incendio (
        id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        fecha varchar(100) NOT NULL,
        seccion varchar(100) NOT NULL,
        estacion varchar(100) NOT NULL,
        tipo_aviso varchar(100) NOT NULL,
        solicitante varchar(100) NOT NULL,
        receptor varchar(100) NOT NULL,
        aprobador varchar(100) NOT NULL,
        hora_aviso varchar(100) NOT NULL,
        hora_salida varchar(100) NOT NULL,
        hora_llegada varchar(100) NOT NULL,
        hora_regreso varchar(100) NOT NULL,
        municipio varchar(100) NOT NULL,
        localidad varchar(100) NOT NULL,
        direccion varchar(100) NOT NULL,
        paredes varchar(100) NOT NULL,
        techo varchar(100) NOT NULL,
        piso varchar(100) NOT NULL,
        ventanas varchar(100) NOT NULL,
        puertas varchar(100) NOT NULL,
        otros_materiales varchar(100) NOT NULL,
        propietario varchar(100) NOT NULL,
        valor_inmueble varchar(100) NOT NULL,
        num_residenciados varchar(100) NOT NULL,
        ninos varchar(100) NOT NULL,
        adolescentes varchar(100) NOT NULL,
        adultos varchar(100) NOT NULL,
        info_adicional varchar(100) NOT NULL,
        asegurado varchar(100) NOT NULL,
        aseguradora varchar(100) NOT NULL,
        num_poliza varchar(100) NOT NULL,
        valor_asegurado varchar(100) NOT NULL,
        valor_perdido varchar(100) NOT NULL,
        valor_salvado varchar(100) NOT NULL,
        fuente_ignicion varchar(100) NOT NULL,
        causa_incendio varchar(100) NOT NULL,
        lugar_inicio varchar(100) NOT NULL,
        lugar_fin varchar(100) NOT NULL,
        reignicion varchar(100) NOT NULL,
        tipo_combustible varchar(100) NOT NULL,
        declaracion varchar(100) NOT NULL,
        lesionados varchar(100) NOT NULL,
        num_lesionados varchar(100) NOT NULL,
        datos_lesionados varchar(100) NOT NULL,
        jefe_comision varchar(100) NOT NULL,
        ci_pnb varchar(100) DEFAULT NULL,
        ci_gnb varchar(100) DEFAULT NULL,
        ci_intt varchar(100) DEFAULT NULL,
        ci_invity varchar(100) DEFAULT NULL,
        ci_pc varchar(100) DEFAULT NULL,
        ci_otro varchar(100) DEFAULT NULL,
        observaciones varchar(100) NOT NULL
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

// } catch (PDOException $e) {
//     echo $e->getMessage();
// }
