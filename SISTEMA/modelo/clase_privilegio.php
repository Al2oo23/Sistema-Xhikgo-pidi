<?php 

class privilegio{
    private $cedula, $insti, $confi, $municipio, $lugar, $estacion, $seccion, $tipoPersona, $cargo, $persona, $usuario, $aseguradora, $marca, $modelo, $vehiculo, $mantenimiento, $recurso, $incidente;

    public function __construct(){
	}

    //setters
    public function setCedula($cedula){
        $this->cedula = $cedula;
    }
    public function setInsti($insti){
        $this->insti = $insti;
    }
    public function setConfi($confi){
        $this->confi = $confi;
    }
    public function setMunicipio($municipio){
        $this->municipio = $municipio;
    }
    public function setLugar($lugar){
        $this->lugar = $lugar;
    }
    public function setEstacion($estacion){
        $this->estacion = $estacion;
    }
    public function setSeccion($seccion){
        $this->seccion = $seccion;
    }
    public function setTipoPersona($tipoPersona){
        $this->tipoPersona = $tipoPersona;
    }
    public function setCargo($cargo){
        $this->cargo = $cargo;
    }
    public function setPersona($persona){
        $this->persona = $persona;
    }
    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }
    public function setAseguradora($aseguradora){
        $this->aseguradora = $aseguradora;
    }
    public function setMarca($marca){
        $this->marca = $marca;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function setVehiculo($vehiculo){
        $this->vehicul = $vehiculo;
    }
    public function setMantenimiento($mantenimiento){
        $this->mantenimiento = $mantenimiento;
    }
    public function setRecurso($recurso){
        $this->recurso = $recurso;
    }
    public function setIncidente($incidente){
        $this->incidente = $incidente;
    }

    //getters
    public function getCedula(){
        return $this->cedula;
    }
    public function getInsti(){
        return $this->insti;
    }
    public function getConfi(){
        return $this->confi;
    }
    public function getMunicipio(){
        return $this->municipio;
    }
    public function getLugar(){
        return $this->lugar;
    }
    public function getEstacion(){
        return $this->estacion;
    }
    public function getSeccion(){
        return $this->seccion;
    }
    public function getTipoPersona(){
        return $this->tipoPersona;
    }
    public function getCargo(){
        return $this->cargo;
    }
    public function getPersona(){
        return $this->persona;
    }
    public function getUsuario(){
        return $this->usuario;
    }
    public function getAseguradora(){
        return $this->aseguradora;
    }
    public function getMarca(){
        return $this->marca;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function getVehiculo(){
        return $this->vehiculo;
    }
    public function getMantenimiento(){
        return $this->mantenimiento;
    }
    public function getRecurso(){
        return $this->recurso;
    }
    public function getIncidente(){
        return $this->incidente;
    }

    //MODIFICAR
    public function modificarPriv($cedula, $insti, $confi, $municipio, $lugar, $estacion, $seccion, $tipoPersona, $cargo, $persona, $usuario, $aseguradora, $marca, $modelo, $vehiculo, $mantenimiento, $recurso, $incidente){
        include("conexion.php");
       
        $SQL = "UPDATE privilegio SET institucion = ?, configuracion = ?, municipio = ?, lugar = ?, estacion = ?, seccion = ?, tipo_persona = ?, cargo = ?, persona = ?, usuario = ?, aseguradora = ?, marcas = ?, modelo = ?, vehiculo = ?, mantenimiento = ?, recurso = ?, incidente = ? WHERE cedula = ?";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$insti, $confi, $municipio, $lugar, $estacion, $seccion, $tipoPersona, $cargo, $persona, $usuario, $aseguradora, $marca, $modelo, $vehiculo, $mantenimiento, $recurso, $incidente, $cedula]);
    
        return $preparado;
    }

}