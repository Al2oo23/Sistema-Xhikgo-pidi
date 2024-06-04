<?php

class municipio{
    private $id, $nombre, $codigo;

    public function __construct(){
	}

    //setters
    public function setId($id){
        $this->id = $id;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    //getters
    public function getId(){
        return $this->id;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getCodigo(){
        return $this->codigo;
    }

    //Registrar
    public function agregarMunicipio($nombre, $codigo){
        include("conexion.php");

        $SQL = "INSERT INTO municipio VALUES (?,?,?)";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([null,$nombre, $codigo]);

        return $preparado;
    }

    //Modificar
    public function modificarMunicipio($id, $nombre, $codigo){
        include("conexion.php");

        $SQL = "UPDATE municipio SET nombre = ?, codigo = ? WHERE id = ?";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$nombre, $codigo, $id]);

        return $preparado;
    }
}
?>