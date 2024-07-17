<?php
include('../modelo/conexion.php');
include('../modelo/clase_criterioPer.php');
$persona = new CriterioPer();

if(isset($_POST['registrar']) && $_POST['registrar'] == "registrar"){
    
    $persona->setCedula($_POST['cedula']);
    $persona->setNombre($_POST['nombre']);
    $persona->setEdad($_POST['edad']);
    $persona->setCorreo($_POST['correo']);
    $persona->setTelefono($_POST['telefono']);
    $persona->setDireccion($_POST['direccion']);
    $persona->setGenero($_POST['genero']);
    $persona->setTpersona($_POST['tipo_persona']);
    $persona->setCargo($_POST['cargo']);
    $persona->setSeccion($_POST['seccion']);
    $persona->setEstacion($_POST['estacion']);
 
    $datos = $persona->registrarCriterio(
        $persona->getCedula(), 
        $persona->getNombre(),
        $persona->getEdad(),
        $persona->getCorreo(),
        $persona->getTelefono(),
        $persona->getDireccion(),
        $persona->getGenero(),
        $persona->getTpersona(),
        $persona->getCargo(),
        $persona->getSeccion(),
        $persona->getEstacion()
    );

    if(empty($datos)){
        echo "<script>alert('No se pudo registrar el Criterio')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/criterioPersona.php'>"; 
    }else{
        echo "<script>alert('Criterio registrada con exito')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/criterioPersona.php'>"; 
    }
}

if(isset($_POST['modificar']) && $_POST['modificar'] == "modificar"){
   
    $persona->setId($_POST['id']);
    $persona->setCedula($_POST['cedula']);
    $persona->setNombre($_POST['nombre']);
    $persona->setEdad($_POST['edad']);
    $persona->setCorreo($_POST['correo']);
    $persona->setTelefono($_POST['telefono']);
    $persona->setDireccion($_POST['direccion']);
    $persona->setGenero($_POST['genero']);
    $persona->setTpersona($_POST['tipo_persona']);
    $persona->setCargo($_POST['cargo']);
    $persona->setSeccion($_POST['seccion']);
    $persona->setEstacion($_POST['estacion']);
    
 
    $datos = $persona->modificarCriterio(
        $persona->getId(), 
        $persona->getCedula(), 
        $persona->getNombre(),
        $persona->getEdad(),
        $persona->getCorreo(),
        $persona->getTelefono(),
        $persona->getDireccion(),
        $persona->getGenero(),
        $persona->getTpersona(),
        $persona->getCargo(),
        $persona->getSeccion(),
        $persona->getEstacion()
    );

    if(empty($datos)){
        echo "<script>alert('No se pudo Modificar el Criterio')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/criterioPersona.php'>"; 
    }else{
        echo "<script>alert('Criterio Modificada con exito')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../vista/criterioPersona.php'>"; 
    }
}

if (isset($_POST['id_criterio'])) {
    $id_busqueda = $_POST['id_criterio'];

    if ($id_busqueda == '') {
        // Obtener todos los registros si no se selecciona ningún criterio
        $SQL_P = "SELECT * FROM persona";
        $preparado_persona = $conexion->prepare($SQL_P);
        $preparado_persona->execute();
        $resultados = $preparado_persona->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($resultados);
    } else {
        // Obtener criterio de búsqueda
        $SQL_C = "SELECT * FROM criterio_persona WHERE id = ?";
        $preparado_criterio = $conexion->prepare($SQL_C);
        $preparado_criterio->execute([$id_busqueda]);
        $criterio = $preparado_criterio->fetch(PDO::FETCH_ASSOC);

        if ($criterio) {
            $cedula = $criterio['cedula'] ?? '';
            $nombre = $criterio['nombre'] ?? '';
            $edad = $criterio['edad'] ?? '';
            $correo = $criterio['correo'] ?? '';
            $telefono = $criterio['telefono'] ?? '';
            $direccion = $criterio['direccion'] ?? '';
            $sexo = $criterio['sexo'] ?? '';
            $tipo_persona = $criterio['tipo_persona'] ?? '';
            $cargo = $criterio['cargo'] ?? '';
            $seccion = $criterio['seccion'] ?? '';
            $estacion = $criterio['estacion'] ?? '';

            // Obtener resultados basados en el criterio
            $SQL_P = "SELECT * FROM persona WHERE cedula LIKE ? AND nombre LIKE ? AND edad LIKE ? AND correo LIKE ? AND telefono LIKE ? AND direccion LIKE ? AND sexo LIKE ? AND tipo_persona LIKE ? AND cargo LIKE ? AND seccion LIKE ? AND estacion LIKE ?";
            $valores = [
                '%' . $cedula . '%',
                '%' . $nombre . '%',
                '%' . $edad . '%',
                '%' . $correo . '%',
                '%' . $telefono . '%',
                '%' . $direccion . '%',
                '%' . $sexo . '%',
                '%' . $tipo_persona . '%',
                '%' . $cargo . '%',
                '%' . $seccion . '%',
                '%' . $estacion . '%',
            ];
            $preparado_persona = $conexion->prepare($SQL_P);
            $preparado_persona->execute($valores);
            $resultados = $preparado_persona->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($resultados);
        } else {
            echo json_encode([]);
        }
    }
}
?>
