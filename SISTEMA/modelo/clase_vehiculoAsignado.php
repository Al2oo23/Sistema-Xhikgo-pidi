<?php

class vehiculoAsignado{

    private $id, $idIncidente, $niv;

    public function __construct(){
	}

    //setters
    public function setId($id){
        $this->id = $id;
    }
    public function setIdIncidente($idIncidente){
        $this->idIncidente = $idIncidente;
    }
    public function setNiv($niv){
        $this->niv = $niv;
    }
    //getters
    public function getId(){
        return $this->id;
    }
    public function getIdIncidente(){
        return $this->idIncidente;
    }
    public function getNiv(){
        return $this->niv;
    }

    public function agregarVehiculoAsignado($idIncidente, $niv){
        include("conexion.php");

        $SQL = "INSERT INTO vehiculo_incidente VALUES (?,?,?)";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([null, $idIncidente, $niv]);

        return $preparado;

    }
}