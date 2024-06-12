<?php 

class usuario{
    private $cedula, $nombre, $clave;

    public function __construct(){
	}

    //setters
    public function setCedula($cedula){
        $this->cedula = $cedula;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setClave($clave){
        $this->descripcion = $clave;
    }

    //getters
    public function getCedula(){
        return $this->cedula;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getClave(){
        return $this->clave;
    }

    //REGISTRAR 
    public function agregarUsuario($cedula, $nombre, $clave){
        include("conexion.php");

        $SQL = "INSERT INTO usuario VALUES (?, ?, ?)";
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