<?php

class Abejas{
    private $id, $fecha, $seccion, $estacion, $aviso, $solicitante, $haviso, $hsalida, $hllegada, $hregreso, $panal, $direccion,
    $lugar, $inmueble, $ci_pnb, $ci_gnb, $ci_intt, $ci_invity, $ci_pc, $ci_otro, $jefe_comision, $jefe_general, $jefe_seccion, $comandante, $acta, $observaciones;

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

    public function setTipoAviso($aviso){
        $this->aviso = $aviso;
    }

    public function setSolicitante($solicitante){
        $this->solicitante = $solicitante;
    }

    public function setHaviso($haviso){
        $this->haviso = $haviso;
    }

    public function setHsalida($hsalida){
        $this->hsalida = $hsalida;
    }
    
    public function setHllegada($hllegada){
        $this->hllegada = $hllegada;
    }

    public function setHregreso($hregreso){
        $this->hregreso = $hregreso;
    }

    public function setPanal($panal){
        $this->panal = $panal;
    }

    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }

    public function setLugar($lugar){
        $this->lugar = $lugar;
    }
    
    public function setInmueble($inmueble){
        $this->inmueble = $inmueble;
    }

    public function setCi_pnb($ci_pnb){
        $this->ci_pnb = $ci_pnb;
    }

    public function setCi_gnb($ci_gnb){
        $this->ci_gnb = $ci_gnb;
    }

    public function setCi_intt($ci_intt){
        $this->ci_intt = $ci_intt;
    }

    public function setCi_invity($ci_invity){
        $this->ci_invity = $ci_invity;
    }

    public function setCi_pc($ci_pc){
        $this->ci_pc = $ci_pc;
    }

    public function setCi_otro($ci_otro){
        $this->ci_otro = $ci_otro;
    }

    public function setJefeComision($jefe_comision) {
        $this->jefe_comision = $jefe_comision;
    }
    
    public function setJefeGeneral($jefe_general) {
        $this->jefe_general = $jefe_general;
    }
    
    public function setJefeSeccion($jefe_seccion) {
        $this->jefe_seccion = $jefe_seccion;
    }
    
    public function setComandante($comandante) {
        $this->comandante = $comandante;
    }


    public function setActa($acta){
        $this->acta = $acta;
    }

    public function setObservaciones($observaciones){
        $this->observaciones = $observaciones;
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

    public function getEstacion(){
        return $this->estacion;
    }

    public function getTipoAviso(){
        return $this->aviso;
    }

    public function getSolicitante(){
        return $this->solicitante;
    }

    public function getHaviso(){
        return $this->haviso;
    }

    public function getHsalida(){
        return $this->hsalida;
    }

    public function getHllegada(){
        return $this->hllegada;
    }

    public function getHregreso(){
        return $this->hregreso;
    }

    public function getPanal(){
        return $this->panal;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function getLugar(){
        return $this->lugar;
    }

    public function getInmueble(){
        return $this->inmueble;
    }

    public function getCi_pnb(){
        return $this->ci_pnb;
    }

    public function getCi_gnb(){
        return $this->ci_gnb;
    }

    public function getCi_intt(){
        return $this->ci_intt;
    }

    public function getCi_invity(){
        return $this->ci_invity;
    }

    public function getCi_pc(){
        return $this->ci_pc;
    }

    public function getCi_otro(){
        return $this->ci_otro;
    }

    public function getJefeComision() {
        return $this->jefe_comision;
    }
    
    public function getJefeGeneral() {
        return $this->jefe_general;
    }
    
    public function getJefeSeccion() {
        return $this->jefe_seccion;
    }
    
    public function getComandante() {
        return $this->comandante;
    }

    public function getActa(){
        return $this->acta;
    }

    public function getObservaciones(){
        return $this->observaciones;
    }

    //Registrar
    public function registrarAbejas($fecha, $seccion, $estacion, $aviso, $solicitante, $haviso, $hsalida, $hllegada, $hregreso, $panal, $direccion,
    $lugar, $inmueble, $ci_pnb, $ci_gnb, $ci_intt, $ci_invity, $ci_pc, $ci_otro, $jefe_comision, $jefe_general, $jefe_seccion, $comandante, $acta, $observaciones){
        include("conexion.php");

        $SQL = "INSERT INTO abejas VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([null,$fecha, $seccion, $estacion, $aviso, $solicitante, $haviso, $hsalida, $hllegada, $hregreso, $panal, $direccion,
        $lugar, $inmueble, $ci_pnb, $ci_gnb, $ci_intt, $ci_invity, $ci_pc, $ci_otro, $jefe_comision, $jefe_general, $jefe_seccion, $comandante, $acta, $observaciones]);
        
        return array($preparado,$conexion->lastInsertId());
        
    }

    //Modificar
    public function modificarAbejas($id, $fecha, $seccion, $estacion, $aviso, $solicitante, $haviso, $hsalida, $hllegada, $hregreso, $panal, $direccion,
    $lugar, $inmueble, $ci_pnb, $ci_gnb, $ci_intt, $ci_invity, $ci_pc, $ci_otro, $jefe_comision, $jefe_general, $jefe_seccion, $comandante, $acta, $observaciones){
        include("conexion.php");

        $SQL = "UPDATE abejas SET fecha = ?, seccion = ?, estacion = ?, aviso = ?, solicitante = ?, hora = ?, salida = ?, llegada = ?, regreso = ?, panal = ?, 
        direccion = ?, lugar = ?, inmueble = ?, ci_pnb = ?, ci_gnb = ?, ci_intt = ?,
        ci_invity = ?, ci_pc = ?, ci_otro = ?, jefe_comision = ?, jefe_general = ?, jefe_seccion = ?, comandante = ?, acta = ?, observaciones = ? WHERE id = ?";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$fecha, $seccion, $estacion, $aviso, $solicitante, $haviso, $hsalida, $hllegada, $hregreso, $panal, $direccion,
        $lugar, $inmueble, $ci_pnb, $ci_gnb, $ci_intt, $ci_invity, $ci_pc, $ci_otro, $jefe_comision, $jefe_general, $jefe_seccion, $comandante, $acta, $observaciones, $id]);

        return $preparado;
    }

    public function errorRegistro($id){
        include("conexion.php");
        // ELIMINAR INCIDENTE DE ABEJAS
        $sentencia = $conexion->prepare("DELETE FROM abejas WHERE id = ?");
        $sentencia->execute([$id]);

        // ELIMINAR RECURSO ASIGNADO
        $sentencia = $conexion->prepare("DELETE FROM recurso_asignado WHERE id_incidente = ?");
        $sentencia->execute([$id]);

        // ELIMINAR UNIDAD ASIGNADA
        $sentencia = $conexion->prepare("DELETE FROM unidad_asignada WHERE id_incidente = ?");
        $sentencia->execute([$id]);
        
        // ELIMINAR EFECTIVO ASIGNADO
        $sentencia = $conexion->prepare("DELETE FROM efectivo_asignado WHERE id_incidente = ?");
        $sentencia->execute([$id]);
    }
}
?>