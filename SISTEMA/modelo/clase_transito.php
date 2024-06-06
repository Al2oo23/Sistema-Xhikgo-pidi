<?php

class transito{

    private $id, $fecha, $seccion, $estacion, $emergencia, $inspeccion, $incidente, $solicitante, $recibidor, $aviso, $salida, $llegada, $regreso, $niv, $lesionados, $occisos, $observaciones, $incendio, $recursos, $cantidad, $jefe, $efectivos, $unidad, $pnb, $gnb, $intt, $invity, $pc, $otro;

    public function __construct(){
	}

    //setters
    public function setId($id){
        $this->id = $id;
    }
    public function setFecha($fecha){
        $this->fecha = $fecha;
    }
    public function setSeccion($seccion){
        $this->seccion = $seccion;
    }
    public function setEstacion($estacion){
        $this->estacion = $estacion;
    }
    public function setEmergencia($emergencia){
        $this->emergencia = $emergencia;
    }
    public function setInspeccion($inspeccion){
        $this->inspeccion = $inspeccion;
    }
    public function setIncidente($incidente){
        $this->incidente = $incidente;
    }
    public function setSolicitante($solicitante){
        $this->solicitante = $solicitante;
    }
    public function setRecibidor($recibidor){
        $this->recibidor = $recibidor;
    }
    public function setAviso($aviso){
        $this->aviso = $aviso;
    }
    public function setSalida($salida){
        $this->salida = $salida;
    }
    public function setLlegada($llegada){
        $this->llegada = $llegada;
    }
    public function setRegreso($regreso){
        $this->regreso = $regreso;
    }
    public function setNiv($niv){
        $this->niv = $niv;
    }
    public function setLesionados($lesionados){
        $this->lesionados = $lesionados;
    }
    public function setOccisos($occisos){
        $this->occisos = $occisos;
    }
    public function setObservaciones($observaciones){
        $this->observaciones = $observaciones;
    }
    public function setIncendio($incendio){
        $this->incendio = $incendio;
    }
    public function setRecursos($recursos){
        $this->recursos = $recursos;
    }
    public function setCantidad($cantidad){
        $this->cantidad = $cantidad;
    }
    public function setJefe($jefe){
        $this->jefe = $jefe;
    }
    public function setEfectivos($efectivos){
        $this->efectivos = $efectivos;
    }
    public function setUnidad($unidad){
        $this->unidad = $unidad;
    }
    public function setPnb($pnb){
        $this->pnb = $pnb;
    }
    public function setGnb($gnb){
        $this->gnb = $gnb;
    }
    public function setIntt($intt){
        $this->intt = $intt;
    }
    public function setInvity($invity){
        $this->invity = $invity;
    }
    public function setPc($pc){
        $this->pc = $pc;
    }
    public function setOtro($otro){
        $this->otro = $otro;
    }
   
    //getters
    public function getId(){
        return $this->id;
    }
    public function getFecha(){
        return $this->fecha;
    }
    public function getSeccion(){
        return $this->seccion;
    }
    public function getEmergencia(){
        return $this->emergencia;
    }
    public function getInspeccion(){
        return $this->inspeccion;
    }
    public function getIncidente(){
        return $this->incidente;
    }
    public function getSolicitante(){
        return $this->solicitante;
    }
    public function getRecibidor(){
        return $this->recibidor;
    }
    public function getAviso(){
        return $this->aviso;
    }
    public function getSalida(){
        return $this->salida;
    }
    public function getLlegada(){
        return $this->llegada;
    }
    public function getRegreso(){
        return $this->regreso;
    }
    public function getVehiculo(){
        return $this->vehiculo;
    }
    public function getLesionado(){
        return $this->lesionados;
    }
    public function getOccisos(){
        return $this->occisos;
    }
    public function getObservaciones(){
        return $this->observaciones;
    }
    public function getIncendio(){
        return $this->incendio;
    }
    public function getRecrusos(){
        return $this->recursos;
    }
    public function getCantidad(){
        return $this->cantidad;
    }
    public function getJefe(){
        return $this->jefe;
    }
    public function getEfectivos(){
        return $this->efectivos;
    }
    public function getUnidad(){
        return $this->unidad;
    }
    public function getPnb(){
        return $this->pnb;
    }
    public function getGnb(){
        return $this->gnb;
    }
    public function getIntt(){
        return $this->intt;
    }
    public function getInvity(){
        return $this->invity;
    }
    public function getPc(){
        return $this->pc;
    }
    public function getOtro(){
        return $this->otro;
    }
  
    //Registrar
    public function agregarTransito($id, $fecha, $seccion, $estacion, $emergencia, $inspeccion, $incidente, $solicitante, $recibidor, $aviso, $salida, $llegada, $regreso, $niv, $lesionados, $occisos, $observaciones, $incendio, $recursos, $cantidad, $jefe, $efectivos, $unidad, $pnb, $gnb, $intt, $invity, $pc, $otro){
        
        include("conexion.php");

        $SQL = "INSERT INTO aviso VALUES (?,?)";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([null,$aviso]);

        return $preparado;
    }

    //Modificar
    public function modificarAviso($id, $aviso ){
        include("conexion.php");

        $SQL = "UPDATE aviso SET nombre = ? WHERE id = ?";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$aviso,  $id]);

        return $preparado;
    }

    
    //ELIMINAR
    public function eliminarAviso ($id){
        include ("conexion.php");

        $SQL = $conexion->prepare("DELETE FROM aviso WHERE id = ?");
        $SQL->bindParam(1, $id, PDO::PARAM_INT);
        $preparado = $SQL->execute();

        return $preparado;
    }




}
