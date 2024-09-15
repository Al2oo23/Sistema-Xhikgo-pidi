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

        return $preparado;

    }
}