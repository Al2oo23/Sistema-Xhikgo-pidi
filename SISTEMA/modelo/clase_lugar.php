<?php

class lugar{
    private $id, $nombre, $municipio, $distancia;

    public function __construct(){
	}

    //setters
    public function setId($id){
        $this->id = $id;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setMunicipio($municipio){
        $this->municipio = $municipio;
    }
    public function setDistancia($distancia){
        $this->distancia = $distancia;
    }
    //getters
    public function getId(){
        return $this->id;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getMunicipio(){
        return $this->municipio;
    }
    public function getDistancia(){
        return $this->distancia;
    }

    //Registrar
    public function agregarLugar($nombre, $municipio, $distancia){
        include("conexion.php");

        $SQL = "INSERT INTO lugar VALUES (?,?,?,?)";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([null,$nombre, $municipio, $distancia]);

         // BITACORA

                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Registró Lugar ".$nombre." el día ",$fecha]);

        return $preparado;
    }

    //Modificar
    public function modificarLugar($id, $nombre, $municipio, $distancia){
        include("conexion.php");

        $SQL = "UPDATE lugar SET nombre = ?, municipio = ?, distancia = ? WHERE id = ?";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$nombre, $municipio, $distancia, $id]);

        return $preparado;
    }
}
?>