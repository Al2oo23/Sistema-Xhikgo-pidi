<?php

class asigIncidente{
    private $id, $cedula, $incidente_asignado;

    public function __construct(){
	}

    //setters
    public function setId($id){
        $this->id = $id;
    }
    public function setCedula($cedula){
        $this->cedula = $cedula;
    }
   
    public function setIncidente($incidente_asignado){
        $this->incidente_asignado = $incidente_asignado;
    }
   
    //getters
    public function getId(){
        return $this->id;
    }
    public function getCedula(){
        return $this->cedula;
    }

    public function getIncidente(){
        return $this->incidente_asignado;
    }

    //Registrar
    public function registrarAsignacion($cedula, $incidente_asignado){
        include("conexion.php");

        $SQL = "INSERT INTO tabla VALUES (?,?,?)";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([null,$cedula, $incidente_asignado]);

        return $preparado;
    }
}
?>