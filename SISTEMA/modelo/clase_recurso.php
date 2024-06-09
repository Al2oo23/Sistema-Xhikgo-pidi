<?php 

class recurso{
    private $id, $nombre, $tipo;

    public function __construct(){
	}

    //setters
    public function setId($id){
        $this->id = $id;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }


    //getters
    public function getId(){
        return $this->id;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getTipo(){
        return $this->tipo;
    }

    //REGISTRAR 
    public function registrarRecurso($nombre, $tipo){
        include("conexion.php");

        $SQL = "INSERT INTO recurso VALUES (?, ?, ?, ?)";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([null, $nombre, $tipo]);

        return $preparado;
    }

    //MODIFICAR
    public function modificarRecurso($id, $nombre, $tipo){
        include("conexion.php");
    
        $SQL = "UPDATE recurso SET nombre = ?, tipo = ? WHERE id = ?";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$nombre, $tipo, $id]);
    
        return $preparado;
    }
    
    //ELIMINAR
    public function eliminarRecurso ($id){
        include ("conexion.php");

        $SQL = $conexion->prepare("DELETE FROM recurso WHERE id = ?");
        $SQL->bindParam(1, $id, PDO::PARAM_INT);
        $preparado = $SQL->execute();

        return $preparado;
    }
}