<?php 

class usuario{
    private $cedula, $nombre, $clave, $estado, $pregunta, $respuesta;

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
        $this->clave = $clave;
    }
    public function setEstado($estado){
        $this->estado = $estado;
    }
    public function setPregunta($pregunta){
        $this->pregunta = $pregunta;
    }
    public function setRespuesta($respuesta){
        $this->respuesta = $respuesta;
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
    public function getEstado(){
        return $this->estado;
    }
    public function getPregunta(){
        return $this->pregunta;
    }
    public function getRespuesta(){
        return $this->respuesta;
    }

    //REGISTRAR 
    public function agregarUsuario($cedula, $nombre, $clave, $estado, $pregunta, $respuesta){
        include("conexion.php");

        $SQL = "INSERT INTO usuario VALUES (?, ?, ?, ?, ?, ?)";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$cedula, $nombre, $clave, $estado, $pregunta, $respuesta]);

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