<?php

class aviso{
    private $id, $aviso;

    public function __construct(){
	}

    //setters
    public function setId($id){
        $this->id = $id;
    }
    public function setAviso($aviso){
        $this->aviso = $aviso;
    }
   
    //getters
    public function getId(){
        return $this->id;
    }


    public function getAviso(){
        return $this->aviso;
    }
  

    //Registrar
    public function agregarAviso($aviso){
        include("conexion.php");

        $SQL = "INSERT INTO aviso VALUES (?,?)";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([null,$aviso]);

        return $preparado;
    }

    //Modificar
    public function modificarAviso($id, $aviso ){
        include("conexion.php");

        $SQL = "UPDATE aviso SET aviso = ? WHERE id = ?";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$aviso,  $id]);

        return $preparado;
    }

    
    //ELIMINAR
    public function eliminarAviso ($id){
        include ("conexion.php");

        $SQL = $conexion->prepare("DELETE FROM aviso WHERE id = ?");
        $SQL->bindParam(1, $id, PDO::PARAM_INT);
        $preparado = $SQL->execute();

        return $preparado;
    }




}
