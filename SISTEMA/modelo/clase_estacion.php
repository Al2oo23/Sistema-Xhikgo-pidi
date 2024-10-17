<?php

class Estacion{
    private $id, $nombre;

    public function __construct(){
	}

    //setters
    public function setId($id){
        $this->id = $id;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
   
    //getters
    public function getId(){
        return $this->id;
    }
    public function getNombre(){
        return $this->nombre;
    }

    //Registrar
    public function registrarEstacion($nombre){
        include("conexion.php");
        
        $SQL = "INSERT INTO estacion VALUES (?,?)";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([null,$nombre]);

         // BITACORA

                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Agregó  Estacion ".$nombre." el día ",$fecha]);

        return $preparado;
    }

    //Modificar
    public function modificarEstacion($id, $nombre){
        include("conexion.php");

        $SQL = "UPDATE estacion SET nombre = ? WHERE id = ?";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$nombre, $id]);

         // BITACORA

                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Modificó  Estacion".$nombre." el día ",$fecha]);

        return $preparado;
    }
}
?>