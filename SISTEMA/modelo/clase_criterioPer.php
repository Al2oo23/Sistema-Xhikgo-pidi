<?php

class CriterioPer{
    private $id, $cedula, $nombre, $edad, $correo, $telefono, $direccion, $genero, $tpersona, $cargo, $seccion, $estacion;

    public function __construct(){
	}

    //setters

    public function setId($id){
        $this->id = $id;
    }

    public function setCedula($cedula){
        $this->cedula = $cedula;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }

    public function setCorreo($correo){
        $this->correo = $correo;
    }

    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }

    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }

    public function setGenero($genero){
        $this->genero = $genero;
    }

    public function setTpersona($tpersona){
        $this->tpersona = $tpersona;
    }

    public function setCargo($cargo){
        $this->cargo = $cargo;
    }

    public function setSeccion($seccion){
        $this->seccion = $seccion;
    }

    public function setEstacion($estacion){
        $this->estacion = $estacion;
    }
   
    //getters

    public function getId(){
        return $this->id;
    }

    public function getCedula(){
        return $this->cedula;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function getCorreo(){
        return $this->correo;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function getDireccion(){
        return $this->direccion;
    }
    
    public function getGenero(){
        return $this->genero;
    }

    public function getTpersona(){
        return $this->tpersona;
    }

    public function getCargo(){
        return $this->cargo;
    }

    public function getSeccion(){
        return $this->seccion;
    }

    public function getEstacion(){
        return $this->estacion;
    }

    //Registrar Persona
    public function registrarCriterio($cedula, $nombre, $edad, $correo, $telefono, $direccion, $genero, $tpersona, $cargo, $seccion, $estacion){
        include("conexion.php");

        $SQL = "INSERT INTO criterio_persona VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([null, $cedula, $nombre, $edad, $correo, $telefono, $direccion, $genero, $tpersona, $cargo, $seccion, $estacion]);

        return $preparado;
    }

    //Modificar
    public function modificarCriterio($id, $cedula, $nombre, $edad, $correo, $telefono, $direccion, $genero, $tpersona, $cargo, $seccion, $estacion){
        include("conexion.php");

        $SQL = "UPDATE criterio_persona SET nombre = ?, edad = ?, correo = ?, telefono = ?, direccion = ?, sexo = ?, tipo_persona = ?, cargo = ?,
        seccion = ?, estacion = ? WHERE cedula = ?";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$nombre, $edad, $correo, $telefono, $direccion, $genero, $tpersona, $cargo, $seccion, $estacion, $cedula, $id]);

        return $preparado;
    }
}