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