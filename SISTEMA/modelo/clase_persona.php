<?php

class Persona{
    private $cedula, $nombre, $edad, $correo, $telefono, $direccion, $genero, $tpersona, $cargo, $seccion, $estacion, $estado;

    public function __construct(){
	}

    //setters
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

    public function setEstado($estado){
        $this->estado = $estado;
    }
   
    //getters
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

    public function getEstado(){
        return $this->estado;
    }


    //Registrar Persona
    public function registrarPersona($cedula, $nombre, $edad, $correo, $telefono, $direccion, $genero, $tpersona, $cargo, $seccion, $estacion, $estado){
        include("conexion.php");

        $SQL = "INSERT INTO persona VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$cedula, $nombre, $edad, $correo, $telefono, $direccion, $genero, $tpersona, $cargo, $seccion, $estacion, $estado]);

          // BITACORA

                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Registró Persona".$cedula, $fecha]);

        return $preparado;
    }

    //Modificar
    public function modificarPersona($cedula, $nombre, $edad, $correo, $telefono, $direccion, $genero, $tpersona, $cargo, $seccion, $estacion, $estado){
        include("conexion.php");

        $SQL = "UPDATE persona SET nombre = ?, edad = ?, correo = ?, telefono = ?, direccion = ?, sexo = ?, tipo_persona = ?, cargo = ?,
        seccion = ?, estacion = ?, estado = ? WHERE cedula = ?";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$nombre, $edad, $correo, $telefono, $direccion, $genero, $tpersona, $cargo, $seccion, $estacion, $estado, $cedula]);

          // BITACORA

                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Modificó Persona".$nombre, $fecha]);


        return $preparado;
    }
}