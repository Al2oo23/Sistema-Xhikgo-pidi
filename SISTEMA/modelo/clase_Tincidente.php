<?php

class incidente{
    private $id, $incidente;

    public function __construct(){
	}

    //setters
    public function setId($id){
        $this->id = $id;
    }
    public function setIncidente($incidente){
        $this->incidente = $incidente;
    }
   
    //getters
    public function getId(){
        return $this->id;
    }


    public function getIncidente(){
        return $this->incidente;
    }
  

    //Registrar
    public function agregarIncidente($incidente){
        include("conexion.php");

        $SQL = "INSERT INTO tipo_incidente VALUES (?,?)";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([null,$incidente]);

        return $preparado;
    }

    // //Modificar
    public function modificarIncidente($id,$incidente ){
        include("conexion.php");

        $SQL = "UPDATE tipo_incidente SET incidente = ? WHERE id = ?";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$incidente,$id]);

        return $preparado;
    }

    

    //ELIMINAR
    public function eliminarIncidente ($id){
        include ("conexion.php");

        $SQL = $conexion->prepare("DELETE FROM tipo_incidente WHERE id = ?");
        $SQL->bindParam(1, $id, PDO::PARAM_INT);
        $preparado = $SQL->execute();

        return $preparado;
    }




}

