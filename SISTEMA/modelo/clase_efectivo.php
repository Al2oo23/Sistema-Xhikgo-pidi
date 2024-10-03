<?php

class efectivo{

    private $id, $idIncidente, $tipo, $cedula;

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
    public function setCedula($cedula){
        $this->cedula = $cedula;
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
    public function getCedula(){
        return $this->cedula;
    }

    public function agregarEfectivo($idIncidente, $tipo,$cedula){
        include("conexion.php");

        $SQL = "INSERT INTO efectivo_asignado VALUES (?,?,?,?)";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([null, $idIncidente, $tipo, $cedula]);

        return $preparado;

    }
    public function eliminarEfectivo($idIncidente, $tipo){
        include("conexion.php");

        $SQL = "DELETE FROM efectivo_asignado WHERE id_incidente = ? AND tipo_incidente = ?";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$idIncidente, $tipo]);

        return $preparado;

    }
}