<?php

class recuperacion{
    private $cedula, $clave;

    public function __construct(){
	}

    //setters
    public function setCedula($cedula){
        $this->cedula = $cedula;
    }
    public function setClave($clave){
        $this->clave = $clave;
    }
   
    //getters
    public function getCedula(){
        return $this->cedula;
    }
    public function getClave(){
        return $this->clave;
    }

    //Registrar
    public function recuperacion($cedula){
        include("conexion.php");

        $SQL = "SELECT * FROM usuario WHERE cedula = ?";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$cedula]);
        $resultado = $preparado->fetchAll(PDO::FETCH_ASSOC)[0];

        return $resultado;
    }

    //Modificar
    public function nuevaClave($cedula, $clave){
        include("conexion.php");

        $SQL = "UPDATE usuario SET clave = ? WHERE cedula = ?";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$clave, $cedula]);

        return $preparado;
    }
}
?>