<?php

class cadaver{
    private $id, $cadaver;

    public function __construct(){
	}

    //setters
    public function setId($id){
        $this->id = $id;
    }
    public function setCadaver($cadaver){
        $this->cadaver = $cadaver;
    }
   
    //getters
    public function getId(){
        return $this->id;
    }


    public function getCadaver(){
        return $this->cadaver;
    }
  

    //Registrar
    public function agregarCadaver($cadaver){
        include("conexion.php");

        $SQL = "INSERT INTO estado_cadaver VALUES (?,?)";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([null,$cadaver]);

        return $preparado;
    }

    // //Modificar
    public function modificarCadaver($id,$cadaver ){
        include("conexion.php");

        $SQL = "UPDATE estado_cadaver SET cadaver = ? WHERE id = ?";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$cadaver,$id]);

        return $preparado;
    }

    

    //ELIMINAR
    public function eliminarCadaver ($id){
        include ("conexion.php");

        $SQL = $conexion->prepare("DELETE FROM estado_cadaver WHERE id = ?");
        $SQL->bindParam(1, $id, PDO::PARAM_INT);
        $preparado = $SQL->execute();

        return $preparado;
    }




}

