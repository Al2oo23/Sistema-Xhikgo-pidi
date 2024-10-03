<?php

class unidad{

    private $id, $idIncidente, $tipo, $niv;

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
    public function getTipo(){
        return $this->tipo;
    }
    public function getNiv(){
        return $this->niv;
    }

    public function agregarUnidad($idIncidente, $tipo, $niv){
        include("conexion.php");

        $SQL = "INSERT INTO unidad_asignada VALUES (?,?,?,?)";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([null, $idIncidente, $tipo, $niv]);

        return $preparado;

    }
    public function eliminarUnidad($idIncidente, $tipo){
        include("conexion.php");

        $SQL = "DELETE FROM unidad_asignada WHERE id_incidente = ? AND tipo_incidente = ?";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$idIncidente, $tipo]);

        return $preparado;

    }
}