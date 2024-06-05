<?php 

class recurso{
    private $id, $nombre, $tipo, $cantidad;

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

    public function setCantidad($cantidad){
        $this->cantidad = $cantidad;
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

    public function getCantidad(){
        return $this->cantidad;
    }

    //REGISTRAR 
    public function registrarRecurso($nombre, $tipo, $cantidad){
        include("conexion.php");

        $SQL = "INSERT INTO recurso VALUES (?, ?, ?, ?)";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([null, $nombre, $tipo, $cantidad]);

        return $preparado;
    }

    //MODIFICAR
    public function modificarRecurso($id, $nombre, $tipo, $cantidad){
        include("conexion.php");
    
        $SQL = "UPDATE recurso SET nombre = ?, tipo = ?, cantidad = ? WHERE id = ?";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$nombre, $tipo, $cantidad, $id]);
    
        return $preparado;
    }
    
    //ELIMINAR
    public function eliminarRecurso ($id){
        include ("conexion.php");

        $SQL = $conexion->prepare("DELETE * FROM recurso WHERE id = ?");
        $SQL->bindParam(1, $id, PDO::PARAM_INT);
        $preparado = $SQL->execute();

        return $preparado;
    }
}