<?php 

class Tpersona{
    private $id, $tipo, $descripcion;

    public function __construct(){
	}

    //setters
    public function setId($id){
        $this->id = $id;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    //getters
    public function getId(){
        return $this->id;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }

    //REGISTRAR 
    public function registrarTpersona($tipo, $descripcion){
        include("conexion.php");

        $SQL = "INSERT INTO tipo_persona VALUES (?, ?, ?)";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([null,$tipo, $descripcion]);

        return $preparado;
    }

    //MODIFICAR
    public function modificarTpersona($id, $tipo, $descripcion){
        include("conexion.php");
    
        $SQL = "UPDATE tipo_persona SET tipo = ?, descripcion = ? WHERE id = ?";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$tipo, $descripcion, $id]);
    
        return $preparado;
    }

}