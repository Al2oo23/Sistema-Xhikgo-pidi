<?php

class recursoAsignado{

    private $id, $idIncidente, $tipo, $idRecurso, $cantidad;

    public function __construct(){
	}

    //setters
    public function setId($id){
        $this->id = $id;
    }
    public function setIdIncidente($idIncidente){
        $this->idIncidente = $idIncidente;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    public function setIdRecurso($idRecurso){
        $this->idRecurso = $idRecurso;
    }
    public function setCantidad($cantidad){
        $this->cantidad = $cantidad;
    }
    //getters
    public function getId(){
        return $this->id;
    }
    public function getIdIncidente(){
        return $this->idIncidente;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function getIdRecurso(){
        return $this->idRecurso;
    }
    public function getCantidad(){
        return $this->cantidad;
    }

    public function agregarRecurso($idIncidente, $tipo, $idRecurso, $cantidad){
        include("conexion.php");

        $SQL = "INSERT INTO recurso_asignado VALUES (?,?,?,?,?)";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([null, $idIncidente, $tipo, $idRecurso, $cantidad]);

         // Verificar si el recurso es no reutilizable y restar la cantidad
         $this->RecursoNoReutilizable($idRecurso, $cantidad);
         $this->RecursoReutilizable($idRecurso, $cantidad);
        
        return $preparado;

    }

    private function recursoReutilizable($idRecurso, $cantidad) {
        include("conexion.php");
    
        // Verificar el tipo de recurso
        $consultaTipo = "SELECT tipo FROM recurso WHERE id = ?";
        $preparado = $conexion->prepare($consultaTipo);
        $preparado->execute([$idRecurso]);
        $tipo = $preparado->fetchColumn();
    
        // Si el recurso es no reutilizable, restar la cantidad
        if ($tipo == 'SI') {
            $this->validarCantidad($idRecurso, $cantidad);
        }
    }

    private function RecursoNoReutilizable($idRecurso, $cantidad) {
        include("conexion.php");
    
        // Verificar el tipo de recurso
        $consultaTipo = "SELECT tipo FROM recurso WHERE id = ?";
        $preparado = $conexion->prepare($consultaTipo);
        $preparado->execute([$idRecurso]);
        $tipo = $preparado->fetchColumn();
    
        // Si el recurso es no reutilizable, restar la cantidad
        if ($tipo === 'NO') {
            $this->restarRecurso($idRecurso, $cantidad);
        }
    }

    private function validarCantidad($idRecurso, $cantidad) {
        include("conexion.php");
    
        // Obtener la cantidad actual del recurso
        $consultaCantidad = "SELECT cantidad FROM recurso WHERE id = ?";
        $CantidadActual = $conexion->prepare($consultaCantidad);
        $CantidadActual->execute([$idRecurso]);
        $cantidadActual = $CantidadActual->fetchColumn();
    
        // Verificar si la cantidad actual es mayor que la cantidad a restar
        if ($cantidadActual >= $cantidad) {
            return true;
        }else{
            return false;
        }
    }
    
    private function restarRecurso($idRecurso, $cantidad) {
        include("conexion.php");
    
        // Obtener la cantidad actual del recurso
        $consultaCantidad = "SELECT cantidad FROM recurso WHERE id = ?";
        $CantidadActual = $conexion->prepare($consultaCantidad);
        $CantidadActual->execute([$idRecurso]);
        $cantidadActual = $CantidadActual->fetchColumn();
    
        // Verificar si la cantidad actual es mayor que la cantidad a restar
        if ($cantidadActual >= $cantidad) {
            // Calcular la nueva cantidad restando la proporcionada
            $nuevaCantidad = max(0, $cantidadActual - $cantidad);
    
            // Actualizar la cantidad en la base de datos
            $SQL = "UPDATE recurso SET cantidad = ? WHERE id = ?";
            $preparado = $conexion->prepare($SQL);
            $preparado->execute([$nuevaCantidad, $idRecurso]);
            return $preparado;
        }else{
           return false;
        }
    }

    public function eliminarRecurso($idIncidente, $tipo){
        include("conexion.php");

        $SQL = "DELETE FROM recurso_asignado WHERE id_incidente = ? AND tipo_incidente = ?";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$idIncidente, $tipo]);

        return $preparado;

    }

    public function restauradorRecurso($idIncidente, $tipo){
        include("conexion.php");

        $SQL = "SELECT * FROM recurso_asignado WHERE id_incidente = ? AND tipo_incidente = ?";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$idIncidente, $tipo]);
        $resultado = $preparado->fetchAll(PDO::FETCH_ASSOC);

        foreach($resultado as $recurso){
             // Verificar el tipo de recurso
        $consultaTipo = "SELECT tipo FROM recurso WHERE id = ?";
        $preparado = $conexion->prepare($consultaTipo);
        $preparado->execute([$recurso['id_recurso']]);
        $tipo = $preparado->fetchAll(PDO::FETCH_ASSOC)[0];
        print_r($tipo);
        echo "<br>";
        // Si el recurso es no reutilizable, sumar la cantidad
        if ($tipo['tipo'] == "NO") {
            echo "hola";
            $this->SumarRecurso($recurso['id_recurso'], $recurso['cantidad']);
 
        }
        
        }
    }

    private function SumarRecurso($idRecurso, $cantidad) {
        include("conexion.php");
    
        // Obtener la cantidad actual del recurso
        $consultaCantidad = "SELECT cantidad FROM recurso WHERE id = ?";
        $CantidadActual = $conexion->prepare($consultaCantidad);
        $CantidadActual->execute([$idRecurso]);
        $cantidadActual = $CantidadActual->fetchColumn();
    
        // Verificar si la cantidad actual es mayor que la cantidad a restar
        if ($cantidadActual >= $cantidad) {
            // Calcular la nueva cantidad restando la proporcionada
            $nuevaCantidad = max(0, $cantidadActual + $cantidad);
    
            // Actualizar la cantidad en la base de datos
            $SQL = "UPDATE recurso SET cantidad = ? WHERE id = ?";
            $preparado = $conexion->prepare($SQL);
            $preparado->execute([$nuevaCantidad, $idRecurso]);
    
            return $preparado;
        }
    }
    
}