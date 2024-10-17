<?php 

class recurso{
    private $id, $nombre, $tipo, $cantidad;

    public function __construct(){
	}

    //setters
    public function setId($id){
        $this->id = $id;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function setCantidad($cantidad){
        $this->cantidad = $cantidad;
    }


    //getters
    public function getId(){
        return $this->id;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function getCantidad(){
        return $this->cantidad;
    }

    //REGISTRAR 
    public function registrarRecurso($nombre, $tipo){
        include("conexion.php");

        $SQL = "SELECT * FROM recurso WHERE nombre = :nombre";
        $preparado = $conexion->prepare($SQL);
        $preparado->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $preparado->execute();

        $recurso = $preparado->fetch(PDO::FETCH_ASSOC);

        if(!$recurso){
        $SQL = "INSERT INTO recurso VALUES (?, ?, ?, ?)";
        $resultado = $conexion->prepare($SQL);
        $resultado->execute([null, $nombre, $tipo, 0]);

         // BITACORA
                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Registró Recurso".$nombre, $fecha]);

        return $resultado;
        }else{
            echo "<script>alert('El Recurso ya está registrado')</script>";
        }
    }

    //MODIFICAR
    public function modificarRecurso($id, $nombre, $tipo){
        include("conexion.php");
        
        // $SQL = "SELECT * FROM recurso WHERE nombre = :nombre";
        // $preparado = $conexion->prepare($SQL);
        // $preparado->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        // $preparado->execute();

        // $recurso = $preparado->fetch(PDO::FETCH_ASSOC);

        // if(!$recurso){
            $SQL = "UPDATE recurso SET nombre = ?, tipo = ? WHERE id = ?";
            $preparado = $conexion->prepare($SQL);
            $preparado->execute([$nombre, $tipo, $id]);
             // BITACORA
                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Modificó Recurso".$nombre, $fecha]);

            return $preparado;
        // }else{
            // echo "<script>alert('El Nombre del recurso ya está registrado')</script>";
        // }
    }

    //AGREGAR
    public function agregarRecurso($nombre, $cantidad){
        include("conexion.php");
    
       // Obtener la cantidad actual del recurso
    $consultaCantidad = "SELECT cantidad FROM recurso WHERE nombre = ?";
    $CantidadActual = $conexion->prepare($consultaCantidad);
    $CantidadActual->execute([$nombre]);
    $cantidadActual = $CantidadActual->fetchColumn();

    // Calcular la nueva cantidad sumando la actual con la proporcionada
    $nuevaCantidad = $cantidadActual + $cantidad;

    // Actualizar la cantidad en la base de datos
    $SQL = "UPDATE recurso SET cantidad = ? WHERE nombre = ?";
    $preparado = $conexion->prepare($SQL);
    $preparado->execute([$nuevaCantidad, $nombre]);

     // BITACORA
                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Agregó Recurso".$nombre, $fecha]);


    return $preparado;
}

// RESTAR

public function restarRecurso($nombre, $cantidad){
    include("conexion.php");

    // Obtener la cantidad actual del recurso
    $consultaCantidad = "SELECT cantidad FROM recurso WHERE nombre = ?";
    $CantidadActual = $conexion->prepare($consultaCantidad);
    $CantidadActual->execute([$nombre]);
    $cantidadActual = $CantidadActual->fetchColumn();

    // Verificar si la cantidad actual es mayor que la cantidad a restar
    if ($cantidadActual >= $cantidad) {
        // Calcular la nueva cantidad restando la proporcionada

        $nuevaCantidad = max(0, $cantidadActual - $cantidad);

        // Actualizar la cantidad en la base de datos
        $SQL = "UPDATE recurso SET cantidad = ? WHERE nombre = ?";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$nuevaCantidad, $nombre]);

         // BITACORA
                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Resto Recurso".$nombre, $fecha]);


        return $preparado;
    } 
}
    
    //ELIMINAR
    public function eliminarRecurso ($id){
        include ("conexion.php");

        $SQL = $conexion->prepare("DELETE FROM recurso WHERE id = ?");
        $SQL->bindParam(1, $id, PDO::PARAM_INT);
        $preparado = $SQL->execute();

         // BITACORA
                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Eliminó Recurso con id".$id, $fecha]);


        return $preparado;
    }
}