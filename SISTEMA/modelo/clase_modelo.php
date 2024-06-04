<?php

class modelo{
    private $id, $nombre, $marca;

    public function __construct(){
	}

    //setters
    public function setId($id){
        $this->id = $id;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setMarca($marca){
        $this->marca = $marca;
    }

    //getters
    public function getId(){
        return $this->id;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getMarca(){
        return $this->marca;
    }

    //Registrar
    public function agregarModelo($nombre, $marca){
        include("conexion.php");

        $SQL = "INSERT INTO modelo VALUES (?,?,?)";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([null,$nombre, $marca]);

        return $preparado;
    }

    //Modificar
    public function modificarModelo($id, $nombre, $marca){
        include("conexion.php");
        

        $SQL = "UPDATE modelo SET nombre = ?, marca = ? WHERE id = ?";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$nombre, $marca, $id]);

        return $preparado;
    }  
}
?>