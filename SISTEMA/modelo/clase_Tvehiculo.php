<?php

class vehiculo{
    private $id, $vehiculo;

    public function __construct(){
	}

    //setters
    public function setId($id){
        $this->id = $id;
    }
    public function setVehiculo($vehiculo){
        $this->vehiculo = $vehiculo;
    }
   
    //getters
    public function getId(){
        return $this->id;
    }


    public function getVehiculo(){
        return $this->vehiculo;
    }
  

    //Registrar
    public function agregarVehiculo($vehiculo){
        include("conexion.php");

        $SQL = "INSERT INTO tipo_vehiculo VALUES (?,?)";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([null,$vehiculo]);

        return $preparado;
    }

    // //Modificar
    public function modificarVehiculo($id,$vehiculo ){
        include("conexion.php");

        $SQL = "UPDATE tipo_vehiculo SET vehiculo = ? WHERE id = ?";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$vehiculo,$id]);

        return $preparado;
    }

    

    //ELIMINAR
    public function eliminarVehiculo ($id){
        include ("conexion.php");

        $SQL = $conexion->prepare("DELETE FROM tipo_vehiculo WHERE id = ?");
        $SQL->bindParam(1, $id, PDO::PARAM_INT);
        $preparado = $SQL->execute();

        return $preparado;
    }




}

