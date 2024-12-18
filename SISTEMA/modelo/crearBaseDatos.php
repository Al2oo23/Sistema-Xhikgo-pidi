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

    //------------------ INSTITUCIÓN ------------------
    $SQL = "CREATE TABLE IF NOT EXISTS institucion (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
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
            comandante VARCHAR(255) NOT NULL,
            acta VARCHAR(5) NOT NULL
        )";
    $conexion->exec($SQL);

    // //------------------ SERVICIOS ESPECIALES ------------------
    $SQL = "CREATE TABLE IF NOT EXISTS servicios (
        id INT PRIMARY KEY AUTO_INCREMENT,
        fecha VARCHAR(100) NOT NULL,
        seccion VARCHAR(20) NOT NULL,
        estacion VARCHAR(20) NOT NULL,
        aviso VARCHAR(20) NOT NULL,
        solicitante VARCHAR(100) NOT NULL,
        hora VARCHAR(20) NOT NULL,
        salida VARCHAR(20) NOT NULL,
        llegada VARCHAR(20) NOT NULL,
        regreso VARCHAR(20) NOT NULL,
        causa VARCHAR(100) NOT NULL,
        direccion VARCHAR(100) NOT NULL,
        ci_pnb varchar(100) DEFAULT NULL,
        ci_gnb varchar(100) DEFAULT NULL,
        ci_intt varchar(100) DEFAULT NULL,
        ci_invity varchar(100) DEFAULT NULL,
        ci_pc varchar(100) DEFAULT NULL,
        ci_otro varchar(100) DEFAULT NULL,
        jefe_comision VARCHAR(255) NOT NULL,
        jefe_general VARCHAR(255) NOT NULL,
        jefe_seccion VARCHAR(255) NOT NULL,
        comandante VARCHAR(255) NOT NULL,
        acta VARCHAR(5) NOT NULL,
        observaciones VARCHAR(200) NOT NULL
    )";
    $conexion->exec($SQL);

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
        tipo VARCHAR(40) NOT NULL,
        descripcion VARCHAR(100) NOT NULL
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

    //------------------ TIPO DE INCENDIO------------------

    $SQL = "CREATE TABLE IF NOT EXISTS tipo_incendio (
        id INT PRIMARY KEY AUTO_INCREMENT,
        incendio VARCHAR(20) NOT NULL 
        )";
    $conexion->exec($SQL);

    //------------------ TIPO DE VEHICULO------------------

    $SQL = "CREATE TABLE IF NOT EXISTS tipo_vehiculo (
        id INT PRIMARY KEY AUTO_INCREMENT,
        vehiculo VARCHAR(20) NOT NULL 
        )";
    $conexion->exec($SQL);

    //------------------ ESTADO CADAVER------------------

    $SQL = "CREATE TABLE IF NOT EXISTS estado_cadaver (
        id INT PRIMARY KEY AUTO_INCREMENT,
        ecadaver VARCHAR(20) NOT NULL 
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
        nombre VARCHAR(40) NOT NULL,
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
        propiedad VARCHAR(20) NOT NULL,
        marca VARCHAR(20) NOT NULL,
        modelo VARCHAR(20) NOT NULL,
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
        solicitante VARCHAR(100) NOT NULL,
        hora VARCHAR(20) NOT NULL,
        salida VARCHAR(20) NOT NULL,
        llegada VARCHAR(20) NOT NULL,
        regreso VARCHAR(20) NOT NULL,
        panal VARCHAR(20) NOT NULL,
        direccion VARCHAR(100) NOT NULL,
        lugar VARCHAR(20) NOT NULL,
        inmueble VARCHAR(20) NOT NULL,
        ci_pnb VARCHAR(20) NULL,
        ci_gnb VARCHAR(20) NULL,
        ci_intt VARCHAR(20) NULL,
        ci_invity VARCHAR(20) NULL,
        ci_pc VARCHAR(20) NULL,
        ci_otro VARCHAR(20) NULL,
        jefe_comision VARCHAR(20) NOT NULL,
        jefe_general VARCHAR(40) NOT NULL,
        jefe_seccion VARCHAR(40) NOT NULL,
        comandante VARCHAR(40) NOT NULL,
        acta VARCHAR(5) NOT NULL,
        observaciones VARCHAR(200) NOT NULL
    )";
    $conexion->exec($SQL);
    //-------------- Vegetacion ----------------------

    $SQL = "CREATE TABLE IF NOT EXISTS vegetacion (
        id INT PRIMARY KEY AUTO_INCREMENT,
        fecha VARCHAR(100) NOT NULL,
        seccion VARCHAR(20) NOT NULL,
        estacion VARCHAR(20) NOT NULL,
        aviso VARCHAR(20) NOT NULL,
        hora VARCHAR(20) NOT NULL,
        salida VARCHAR(20) NOT NULL,
        llegada VARCHAR(20) NOT NULL,
        regreso VARCHAR(20) NOT NULL,
        incendio VARCHAR(20) NOT NULL,
        norte VARCHAR(20) NOT NULL,
        sur VARCHAR(20) NOT NULL,
        este VARCHAR(20) NOT NULL,
        oeste VARCHAR(20) NOT NULL,
        direccion VARCHAR(100) NOT NULL,
        lugar VARCHAR(20) NOT NULL,
        acta VARCHAR(3) NOT NULL,
        observaciones VARCHAR(50) NOT NULL,
        jefe_comision VARCHAR(20) NOT NULL,
        jefe_general VARCHAR(40) NOT NULL,
        jefe_seccion VARCHAR(40) NOT NULL,
        comandante VARCHAR(40) NOT NULL,
        ci_pnb VARCHAR(20) NULL,
        ci_gnb VARCHAR(20) NULL,
        ci_intt VARCHAR(20) NULL,
        ci_invity VARCHAR(20) NULL,
        ci_pc VARCHAR(20) NULL,
        ci_otro VARCHAR(20) NULL
    )";
    $conexion->exec($SQL);


    //-------------- incendio vehiculo ----------------------

    $SQL = "CREATE TABLE IF NOT EXISTS incendio_vehiculo (
    id INT PRIMARY KEY AUTO_INCREMENT,
    fecha VARCHAR(100) NOT NULL,
    seccion VARCHAR(20) NOT NULL,
    estacion VARCHAR(20) NOT NULL,
    aviso VARCHAR(20) NOT NULL,
    hora VARCHAR(20) NOT NULL,
    salida VARCHAR(20) NOT NULL,
    llegada VARCHAR(20) NOT NULL,
    regreso VARCHAR(20) NOT NULL,
    lugar VARCHAR(20) NOT NULL,
    direccion VARCHAR(100) NOT NULL,
    modelo VARCHAR(20) NOT NULL,
    marca VARCHAR(20) NOT NULL,
    año VARCHAR(20) NOT NULL,
    placa VARCHAR(20) NOT NULL,
    serial  VARCHAR(20) NOT NULL,
    color VARCHAR(20) NOT NULL,
    puestos VARCHAR(20) NOT NULL,
    propietario VARCHAR(20) NOT NULL,
    ci_propietario VARCHAR(20) NOT NULL,
    valor VARCHAR(20) NOT NULL,
    conductor VARCHAR(20) NOT NULL,
    ci_conductor VARCHAR(20) NOT NULL,
    aseguradora VARCHAR(20) NOT NULL,
    vigencia VARCHAR(20) NOT NULL,
    inicio VARCHAR(20) NOT NULL,
    ignicion VARCHAR(20) NOT NULL,
    culmino VARCHAR(20) NOT NULL,
    causa VARCHAR(20) NOT NULL,
    h_reignicion VARCHAR(20) NOT NULL,
    clase VARCHAR(20) NOT NULL,
    declaracion VARCHAR(20) NOT NULL,
    h_lesionados VARCHAR(20) NOT NULL,
    lesionados INT (4) NOT NULL,
    acta VARCHAR(20) NOT NULL,
    observaciones VARCHAR(50) NOT NULL,
    jefe_comision VARCHAR(20) NOT NULL,
    jefe_general VARCHAR(40) NOT NULL,
    jefe_seccion VARCHAR(40) NOT NULL,
    comandante VARCHAR(40) NOT NULL,
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
        pnb VARCHAR(11) NOT NULL,
        gnb VARCHAR(11) NOT NULL,
        intt VARCHAR(11) NOT NULL,
        invity VARCHAR(11) NOT NULL,
        pc VARCHAR(11) NOT NULL,
        otros VARCHAR(11) NOT NULL,
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
        lugar varchar(100) NOT NULL,
        direccion varchar(100) NOT NULL,
        paredes varchar(100) NOT NULL,
        techo varchar(100) NOT NULL,
        piso varchar(100) NOT NULL,
        ventanas varchar(100) NOT NULL,
        puertas varchar(100) NOT NULL,
        propietario varchar(100) NOT NULL,
        valor_inmueble varchar(100) NOT NULL,
        num_residenciados varchar(100) NOT NULL,
        ninos varchar(100) NOT NULL,
        adolescentes varchar(100) NOT NULL,
        adultos varchar(100) NOT NULL,
        info_adicional varchar(100) NOT NULL,
        asegurado VARCHAR(5) NOT NULL,
        aseguradora varchar(100) DEFAULT NULL,
        num_poliza varchar(100) DEFAULT NULL,
        valor_asegurado varchar(100) DEFAULT NULL,
        valor_perdido varchar(100) NOT NULL,
        valor_salvado varchar(100) NOT NULL,
        fuente_ignicion varchar(100) NOT NULL,
        causa_incendio varchar(100) NOT NULL,
        lugar_inicio varchar(100) NOT NULL,
        lugar_fin varchar(100) NOT NULL,
        reignicion VARCHAR(5) NOT NULL,
        tipo_combustible varchar(100) NOT NULL,
        declaracion varchar(100) NOT NULL,
        lesionados varchar(100) NOT NULL,
        num_lesionados varchar(100) DEFAULT NULL,
        ci_pnb varchar(100) DEFAULT NULL,
        ci_gnb varchar(100) DEFAULT NULL,
        ci_intt varchar(100) DEFAULT NULL,
        ci_invity varchar(100) DEFAULT NULL,
        ci_pc varchar(100) DEFAULT NULL,
        ci_otro varchar(100) DEFAULT NULL,
        jefe_comision VARCHAR(20) NOT NULL,
        jefe_general VARCHAR(40) NOT NULL,
        jefe_seccion VARCHAR(40) NOT NULL,
        comandante VARCHAR(40) NOT NULL,
        acta VARCHAR(5) NOT NULL,
        observaciones varchar(100) NOT NULL
      )";
    $conexion->exec($SQL);

    //------------------ Criterio -------------------

    $SQL = "CREATE TABLE IF NOT EXISTS criterio (
        id VARCHAR(20) PRIMARY KEY NOT NULL,
        tabla VARCHAR(20) NOT NULL,
        sentencia VARCHAR(100) 
    )";
    $conexion->exec($SQL);

    $SQL = "INSERT IGNORE INTO criterio VALUES(?,?,?)";
    $preparado = $conexion->prepare($SQL);
    $preparado->execute(["usuario", "usuario", "SELECT * FROM usuario"]);

    $SQL = "INSERT IGNORE INTO criterio VALUES(?,?,?)";
    $preparado = $conexion->prepare($SQL);
    $preparado->execute(["persona", "persona", "SELECT * FROM persona"]);

    $SQL = "INSERT IGNORE INTO criterio VALUES(?,?,?)";
    $preparado = $conexion->prepare($SQL);
    $preparado->execute(["vehiculo", "vehiculo", "SELECT * FROM vehiculo"]);

    $SQL = "INSERT IGNORE INTO criterio VALUES(?,?,?)";
    $preparado = $conexion->prepare($SQL);
    $preparado->execute(["modelo", "modelo", "SELECT * FROM modelo"]);

    $SQL = "INSERT IGNORE INTO criterio VALUES(?,?,?)";
    $preparado = $conexion->prepare($SQL);
    $preparado->execute(["recurso", "recurso", "SELECT * FROM recurso"]);

    $SQL = "INSERT IGNORE INTO criterio VALUES(?,?,?)";
    $preparado = $conexion->prepare($SQL);
    $preparado->execute(["marca", "marca", "SELECT * FROM marca"]);

    $SQL = "INSERT IGNORE INTO criterio VALUES(?,?,?)";
    $preparado = $conexion->prepare($SQL);
    $preparado->execute(["municipio", "municipio", "SELECT * FROM municipio"]);

    $SQL = "INSERT IGNORE INTO criterio VALUES(?,?,?)";
    $preparado = $conexion->prepare($SQL);
    $preparado->execute(["lugar", "lugar", "SELECT * FROM lugar"]);

    //     //------------------ BITÁCORA -------------------

    $SQL = "CREATE TABLE IF NOT EXISTS bitacora (
    id INT PRIMARY KEY AUTO_INCREMENT,
    idUsuario INT NOT NULL,
    movimiento VARCHAR(50) NOT NULL,
    tabla VARCHAR(50) NOT NULL,
    fechaBitacora TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    antesM TEXT,
    despuesM TEXT
)";
    $conexion->exec($SQL);

    //------------------ TRIGGER REGISTRO PERSONA -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_persona_registro";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_persona_registro
AFTER INSERT ON persona 
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;

    INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
    VALUES (sessionUserId, 'registro', 'persona', NOW(), 'N/A', CONCAT_WS(', ', NEW.cedula, NEW.nombre, NEW.edad, NEW.correo, NEW.telefono, NEW.direccion, NEW.sexo, 
                          NEW.tipo_persona, NEW.cargo, NEW.seccion, NEW.estacion, NEW.estado));
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER MODIFICACIÓN PERSONA -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_persona_modificar";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_persona_modificar
AFTER UPDATE ON persona
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;

    IF (NEW.cedula <> OLD.cedula OR NEW.nombre <> OLD.nombre OR NEW.edad <> OLD.edad OR NEW.correo <> OLD.correo OR 
        NEW.telefono <> OLD.telefono OR NEW.direccion <> OLD.direccion OR NEW.sexo <> OLD.sexo OR 
        NEW.tipo_persona <> OLD.tipo_persona OR NEW.cargo <> OLD.cargo OR NEW.seccion <> OLD.seccion OR 
        NEW.estacion <> OLD.estacion OR NEW.estado <> OLD.estado) THEN  
        
        INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
        VALUES (sessionUserId, 'Actualización de datos personales', 'persona', NOW(),
                CONCAT_WS(', ', OLD.cedula, OLD.nombre, OLD.edad, OLD.correo, OLD.telefono, OLD.direccion, OLD.sexo, 
                          OLD.tipo_persona, OLD.cargo, OLD.seccion, OLD.estacion, OLD.estado),
                CONCAT_WS(', ', NEW.cedula, NEW.nombre, NEW.edad, NEW.correo, NEW.telefono, NEW.direccion, NEW.sexo, 
                          NEW.tipo_persona, NEW.cargo, NEW.seccion, NEW.estacion, NEW.estado));
    END IF;
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER ELIMINACIÓN PERSONA -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_persona_eliminar";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_persona_eliminar
AFTER DELETE ON persona
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;
    
    INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
    VALUES (sessionUserId, 'Eliminación', 'persona', NOW(),
            CONCAT_WS(', ', OLD.cedula, OLD.nombre, OLD.edad, OLD.correo, OLD.telefono, OLD.direccion, OLD.sexo, 
                      OLD.tipo_persona, OLD.cargo, OLD.seccion, OLD.estacion, OLD.estado), 'N/A');
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER REGISTRO USUARIO -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_usuario_registro";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_usuario_registro
AFTER INSERT ON usuario 
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;

    INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
    VALUES (sessionUserId, 'registro', 'usuario', NOW(), 'N/A', CONCAT_WS(', ', NEW.cedula, NEW.nombre, NEW.clave, NEW.estado, NEW.pregunta, NEW.respuesta));
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER MODIFICACIÓN USUARIO -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_usuario_modificar";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_usuario_modificar
AFTER UPDATE ON usuario
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;

    IF (NEW.cedula <> OLD.cedula OR NEW.nombre <> OLD.nombre OR NEW.clave <> OLD.clave OR NEW.estado <> OLD.estado OR 
        NEW.pregunta <> OLD.pregunta OR NEW.respuesta <> OLD.respuesta) THEN  
        
        INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
        VALUES (sessionUserId, 'Actualización de datos de usuario', 'usuario', NOW(),
                CONCAT_WS(', ', OLD.cedula, OLD.nombre, OLD.clave, OLD.estado, OLD.pregunta, OLD.respuesta),
                CONCAT_WS(', ', NEW.cedula, NEW.nombre, NEW.clave, NEW.estado, NEW.pregunta, NEW.respuesta));
    END IF;
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER ELIMINACIÓN USUARIO -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_usuario_eliminar";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_usuario_eliminar
AFTER DELETE ON usuario
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;
    
    INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
    VALUES (sessionUserId, 'Eliminación', 'usuario', NOW(),
            CONCAT_WS(', ', OLD.cedula, OLD.nombre, OLD.clave, OLD.estado, OLD.pregunta, OLD.respuesta), 'N/A');
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER REGISTRO VEHICULO -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_vehiculo_registro";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_vehiculo_registro
AFTER INSERT ON vehiculo 
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;

    INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
    VALUES (sessionUserId, 'registro', 'vehiculo', NOW(), 'N/A', CONCAT_WS(', ', NEW.niv, NEW.tipo, NEW.unidad, NEW.marca, NEW.modelo, NEW.carburante, NEW.seguro, NEW.cedula));
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER MODIFICACIÓN VEHICULO -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_vehiculo_modificar";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_vehiculo_modificar
AFTER UPDATE ON vehiculo
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;

    IF (NEW.niv <> OLD.niv OR NEW.tipo <> OLD.tipo OR NEW.unidad <> OLD.unidad OR NEW.marca <> OLD.marca OR 
        NEW.modelo <> OLD.modelo OR NEW.carburante <> OLD.carburante OR NEW.seguro <> OLD.seguro OR NEW.cedula <> OLD.cedula) THEN  
        
        INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
        VALUES (sessionUserId, 'Actualización de datos de vehiculo', 'vehiculo', NOW(),
                CONCAT_WS(', ', OLD.niv, OLD.tipo, OLD.unidad, OLD.marca, OLD.modelo, OLD.carburante, OLD.seguro, OLD.cedula),
                CONCAT_WS(', ', NEW.niv, NEW.tipo, NEW.unidad, NEW.marca, NEW.modelo, NEW.carburante, NEW.seguro, NEW.cedula));
    END IF;
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER ELIMINACIÓN VEHICULO -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_vehiculo_eliminar";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_vehiculo_eliminar
AFTER DELETE ON vehiculo
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;
    
    INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
    VALUES (sessionUserId, 'Eliminación', 'vehiculo', NOW(),
            CONCAT_WS(', ', OLD.niv, OLD.tipo, OLD.unidad, OLD.marca, OLD.modelo, OLD.carburante, OLD.seguro, OLD.cedula), 'N/A');
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER REGISTRO RECURSO -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_recurso_registro";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_recurso_registro
AFTER INSERT ON recurso 
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;

    INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
    VALUES (sessionUserId, 'registro', 'recurso', NOW(), 'N/A', CONCAT_WS(', ', NEW.id, NEW.nombre, NEW.tipo, NEW.cantidad));
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER MODIFICACIÓN RECURSO -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_recurso_modificar";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_recurso_modificar
AFTER UPDATE ON recurso
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;

    IF (NEW.id <> OLD.id OR NEW.nombre <> OLD.nombre OR NEW.tipo <> OLD.tipo OR NEW.cantidad <> OLD.cantidad) THEN  
        
        INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
        VALUES (sessionUserId, 'Actualización de datos de recurso', 'recurso', NOW(),
                CONCAT_WS(', ', OLD.id, OLD.nombre, OLD.tipo, OLD.cantidad),
                CONCAT_WS(', ', NEW.id, NEW.nombre, NEW.tipo, NEW.cantidad));
    END IF;
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER ELIMINACIÓN RECURSO -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_recurso_eliminar";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_recurso_eliminar
AFTER DELETE ON recurso
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;
    
    INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
    VALUES (sessionUserId, 'Eliminación', 'recurso', NOW(),
            CONCAT_WS(', ', OLD.id, OLD.nombre, OLD.tipo, OLD.cantidad), 'N/A');
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER REGISTRO ESTACIÓN -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_estacion_registro";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_estacion_registro
AFTER INSERT ON estacion 
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;

    INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
    VALUES (sessionUserId, 'registro', 'estacion', NOW(), 'N/A', CONCAT_WS(', ', NEW.id, NEW.nombre));
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER MODIFICACIÓN ESTACIÓN -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_estacion_modificar";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_estacion_modificar
AFTER UPDATE ON estacion
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;

    IF (NEW.id <> OLD.id OR NEW.nombre <> OLD.nombre) THEN  
        
        INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
        VALUES (sessionUserId, 'Actualización de datos de estación', 'estacion', NOW(),
                CONCAT_WS(', ', OLD.id, OLD.nombre),
                CONCAT_WS(', ', NEW.id, NEW.nombre));
    END IF;
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER ELIMINACIÓN ESTACIÓN -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_estacion_eliminar";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_estacion_eliminar
AFTER DELETE ON estacion
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;
    
    INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
    VALUES (sessionUserId, 'Eliminación', 'estacion', NOW(),
            CONCAT_WS(', ', OLD.id, OLD.nombre), 'N/A');
END;";
    $conexion->exec($SQL);


    //------------------ TRIGGER REGISTRO LUGAR -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_lugar_registro";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_lugar_registro
AFTER INSERT ON lugar 
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;

    INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
    VALUES (sessionUserId, 'registro', 'lugar', NOW(), 'N/A', CONCAT_WS(', ', NEW.id, NEW.nombre, NEW.municipio, NEW.distancia));
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER MODIFICACIÓN LUGAR -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_lugar_modificar";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_lugar_modificar
AFTER UPDATE ON lugar
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;

    IF (NEW.id <> OLD.id OR NEW.nombre <> OLD.nombre OR NEW.municipio <> OLD.municipio OR NEW.distancia <> OLD.distancia) THEN  
        
        INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
        VALUES (sessionUserId, 'Actualización de datos de estación', 'lugar', NOW(),
                CONCAT_WS(', ', OLD.id, OLD.nombre, OLD.municipio, OLD.distancia),
                CONCAT_WS(', ', NEW.id, NEW.nombre, NEW.municipio, NEW.distancia));
    END IF;
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER ELIMINACIÓN LUGAR -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_lugar_eliminar";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_lugar_eliminar
AFTER DELETE ON lugar
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;
    
    INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
    VALUES (sessionUserId, 'Eliminación', 'lugar', NOW(),
            CONCAT_WS(', ', OLD.id, OLD.nombre, OLD.municipio, OLD.distancia), 'N/A');
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER REGISTRO SECCIÓN -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_seccion_registro";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_seccion_registro
AFTER INSERT ON seccion 
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;

    INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
    VALUES (sessionUserId, 'registro', 'seccion', NOW(), 'N/A', CONCAT_WS(', ', NEW.id, NEW.numero));
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER MODIFICACIÓN SECCIÓN -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_seccion_modificar";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_seccion_modificar
AFTER UPDATE ON seccion
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;

    IF (NEW.id <> OLD.id OR NEW.numero <> OLD.numero) THEN  
        
        INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
        VALUES (sessionUserId, 'Actualización de datos de estación', 'seccion', NOW(),
                CONCAT_WS(', ', OLD.id, OLD.numero),
                CONCAT_WS(', ', NEW.id, NEW.numero));
    END IF;
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER ELIMINACIÓN SECCIÓN -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_seccion_eliminar";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_seccion_eliminar
AFTER DELETE ON seccion
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;
    
    INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
    VALUES (sessionUserId, 'Eliminación', 'seccion', NOW(),
            CONCAT_WS(', ', OLD.id, OLD.numero), 'N/A');
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER REGISTRO MUNICIPIO -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_municipio_registro";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_municipio_registro
AFTER INSERT ON municipio 
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;

    INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
    VALUES (sessionUserId, 'registro', 'municipio', NOW(), 'N/A', CONCAT_WS(', ', NEW.id, NEW.nombre, NEW.codigo));
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER MODIFICACIÓN MUNICIPIO -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_municipio_modificar";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_municipio_modificar
AFTER UPDATE ON municipio
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;

    IF (NEW.id <> OLD.id OR NEW.nombre <> OLD.nombre OR NEW.codigo <> OLD.codigo) THEN  
        
        INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
        VALUES (sessionUserId, 'Actualización de datos de estación', 'municipio', NOW(),
                CONCAT_WS(', ', OLD.id, OLD.nombre, OLD.codigo),
                CONCAT_WS(', ', NEW.id, NEW.nombre, NEW.codigo));
    END IF;
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER ELIMINACIÓN MUNICIPIO -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_municipio_eliminar";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_municipio_eliminar
AFTER DELETE ON municipio
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;
    
    INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
    VALUES (sessionUserId, 'Eliminación', 'municipio', NOW(),
            CONCAT_WS(', ', OLD.id, OLD.nombre, OLD.codigo), 'N/A');
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER REGISTRO TIPO PERSONA -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_tipo_persona_registro";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_tipo_persona_registro
AFTER INSERT ON tipo_persona 
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;

    INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
    VALUES (sessionUserId, 'registro', 'tipo_persona', NOW(), 'N/A', CONCAT_WS(', ', NEW.id, NEW.tipo, NEW.descripcion));
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER MODIFICACIÓN TIPO PERSONA -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_tipo_persona_modificar";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_tipo_persona_modificar
AFTER UPDATE ON tipo_persona
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;

    IF (NEW.id <> OLD.id OR NEW.tipo <> OLD.tipo OR NEW.descripcion <> OLD.descripcion) THEN  
        
        INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
        VALUES (sessionUserId, 'Actualización de datos de estación', 'tipo_persona', NOW(),
                CONCAT_WS(', ', OLD.id, OLD.tipo, OLD.descripcion),
                CONCAT_WS(', ', NEW.id, NEW.tipo, NEW.descripcion));
    END IF;
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER ELIMINACIÓN TIPO PERSONA -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_tipo_persona_eliminar";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_tipo_persona_eliminar
AFTER DELETE ON tipo_persona
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;
    
    INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
    VALUES (sessionUserId, 'Eliminación', 'tipo_persona', NOW(),
            CONCAT_WS(', ', OLD.id, OLD.tipo, OLD.descripcion), 'N/A');
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER REGISTRO CARGO -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_cargo_registro";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_cargo_registro
AFTER INSERT ON cargo 
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;

    INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
    VALUES (sessionUserId, 'registro', 'cargo', NOW(), 'N/A', CONCAT_WS(', ', NEW.id, NEW.nombre));
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER MODIFICACIÓN CARGO -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_cargo_modificar";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_cargo_modificar
AFTER UPDATE ON cargo
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;

    IF (NEW.id <> OLD.id OR NEW.nombre <> OLD.nombre) THEN  
        
        INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
        VALUES (sessionUserId, 'Actualización de datos de estación', 'cargo', NOW(),
                CONCAT_WS(', ', OLD.id, OLD.nombre),
                CONCAT_WS(', ', NEW.id, NEW.nombre));
    END IF;
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER ELIMINACIÓN CARGO -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_cargo_eliminar";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_cargo_eliminar
AFTER DELETE ON cargo
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;
    
    INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
    VALUES (sessionUserId, 'Eliminación', 'cargo', NOW(),
            CONCAT_WS(', ', OLD.id, OLD.nombre), 'N/A');
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER REGISTRO RECURSO ASIGNADO -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_recurso_asignado_registro";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_recurso_asignado_registro
AFTER INSERT ON recurso_asignado 
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;

    INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
    VALUES (sessionUserId, 'registro', 'recurso_asignado', NOW(), 'N/A', CONCAT_WS(', ', NEW.id, NEW.id_incidente, NEW.tipo_incidente, NEW.id_recurso, NEW.cantidad));
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER MODIFICACIÓN RECURSO ASIGNADO -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_recurso_asignado_modificar";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_recurso_asignado_modificar
AFTER UPDATE ON recurso_asignado
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;

    IF (NEW.id <> OLD.id OR NEW.id_incidente <> OLD.id_incidente OR NEW.tipo_incidente <> OLD.tipo_incidente OR NEW.id_recurso <> OLD.id_recurso OR NEW.cantidad <> OLD.cantidad) THEN  
        
        INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
        VALUES (sessionUserId, 'Actualización de datos de estación', 'recurso_asignado', NOW(),
                CONCAT_WS(', ', OLD.id, OLD.id_incidente, OLD.tipo_incidente, OLD.id_recurso, OLD.cantidad),
                CONCAT_WS(', ', NEW.id, NEW.id_incidente, NEW.tipo_incidente, NEW.id_recurso, NEW.cantidad));
    END IF;
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER ELIMINACIÓN RECURSO ASIGNADO -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_recurso_asignado_eliminar";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_recurso_asignado_eliminar
AFTER DELETE ON recurso_asignado
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;
    
    INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
    VALUES (sessionUserId, 'Eliminación', 'recurso_asignado', NOW(),
            CONCAT_WS(', ', OLD.id, OLD.id_incidente, OLD.tipo_incidente, OLD.id_recurso, OLD.cantidad), 'N/A');
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER REGISTRO MARCA -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_marca_registro";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_marca_registro
AFTER INSERT ON marca 
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;

    INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
    VALUES (sessionUserId, 'registro', 'marca', NOW(), 'N/A', CONCAT_WS(', ', NEW.id, NEW.nombre));
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER MODIFICACIÓN MARCA -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_marca_modificar";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_marca_modificar
AFTER UPDATE ON marca
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;

    IF (NEW.id <> OLD.id OR NEW.nombre <> OLD.nombre) THEN  
        
        INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
        VALUES (sessionUserId, 'Actualización de datos de estación', 'marca', NOW(),
                CONCAT_WS(', ', OLD.id, OLD.nombre),
                CONCAT_WS(', ', NEW.id, NEW.nombre));
    END IF;
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER ELIMINACIÓN MARCA -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_marca_eliminar";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_marca_eliminar
AFTER DELETE ON marca
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;
    
    INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
    VALUES (sessionUserId, 'Eliminación', 'marca', NOW(),
            CONCAT_WS(', ', OLD.id, OLD.nombre), 'N/A');
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER REGISTRO MODELO -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_modelo_registro";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_modelo_registro
AFTER INSERT ON modelo 
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;

    INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
    VALUES (sessionUserId, 'registro', 'modelo', NOW(), 'N/A', CONCAT_WS(', ', NEW.id, NEW.marca, NEW.nombre));
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER MODIFICACIÓN MODELO -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_modelo_modificar";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_modelo_modificar
AFTER UPDATE ON modelo
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;

    IF (NEW.id <> OLD.id OR NEW.marca <> OLD.marca OR NEW.nombre <> OLD.nombre) THEN  
        
        INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
        VALUES (sessionUserId, 'Actualización de datos de estación', 'modelo', NOW(),
                CONCAT_WS(', ', OLD.id, OLD.marca, OLD.nombre),
                CONCAT_WS(', ', NEW.id, NEW.marca, NEW.nombre));
    END IF;
END;";
    $conexion->exec($SQL);

    //------------------ TRIGGER ELIMINACIÓN MODELO -------------------

    // Eliminar el trigger si ya existe para poder crearlo nuevamente.
    $SQL = "DROP TRIGGER IF EXISTS bitacora_modelo_eliminar";
    $conexion->exec($SQL);

    $SQL = "CREATE TRIGGER bitacora_modelo_eliminar
AFTER DELETE ON modelo
FOR EACH ROW
BEGIN
    DECLARE sessionUserId INT;
    SET sessionUserId = 123;
    
    INSERT INTO bitacora (idUsuario, movimiento, tabla, fechaBitacora, antesM, despuesM)
    VALUES (sessionUserId, 'Eliminación', 'modelo', NOW(),
            CONCAT_WS(', ', OLD.id, OLD.marca, OLD.nombre), 'N/A');
END;";
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
