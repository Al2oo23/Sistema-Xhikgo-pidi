<?php

class incendio{
    private $id, $incendio;

    public function __construct(){
	}

    //setters
    public function setId($id){
        $this->id = $id;
    }
    public function setIncendio($incendio){
        $this->incendio = $incendio;
    }
   
    //getters
    public function getId(){
        return $this->id;
    }


    public function getIncendio(){
        return $this->incendio;
    }
  

    //Registrar
    public function agregarIncendio($incendio){
        include("conexion.php");

        $SQL = "INSERT INTO tipo_incendio VALUES (?,?)";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([null,$incendio]);

        return $preparado;
    }

    // //Modificar
    public function modificarIncendio($id,$incendio ){
        include("conexion.php");

        $SQL = "UPDATE tipo_incendio SET incendio = ? WHERE id = ?";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$incendio,$id]);

        return $preparado;
    }

    

    //ELIMINAR
    public function eliminarIncendio ($id){
        include ("conexion.php");

        $SQL = $conexion->prepare("DELETE FROM tipo_incendio WHERE id = ?");
        $SQL->bindParam(1, $id, PDO::PARAM_INT);
        $preparado = $SQL->execute();

        return $preparado;
    }




}

