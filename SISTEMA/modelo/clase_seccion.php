<?php 

class seccion{
    private $id, $numero;

    public function __construct(){
	}

    //setters
    public function setId($id){
        $this->id = $id;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }


    //getters
    public function getId(){
        return $this->id;
    }

    public function getNumero(){
        return $this->numero;
    }



    //REGISTRAR 
    public function registrarSeccion($numero){
        include("conexion.php");

        $SQL = "INSERT INTO seccion (numero) VALUES (?)";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$numero]);

        return $preparado;
    }

   //MODIFICAR
   public function modificarSeccion($id, $numero){
    include("conexion.php");

    $SQL = "UPDATE seccion SET numero = ?  WHERE id = ?";
    $preparado = $conexion->prepare($SQL);
    $preparado->execute([$numero , $id]);

    return $preparado;
}


    //ELIMINAR
    public function eliminarSeccion ($id){
        include ("conexion.php");

        $SQL = $conexion->prepare("DELETE FROM seccion WHERE id = ?");
        $SQL->bindParam(1, $id, PDO::PARAM_INT);
        $preparado = $SQL->execute();

        return $preparado;
    }



}