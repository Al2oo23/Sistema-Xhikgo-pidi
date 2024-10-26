<?php

class incendio_vehiculo {
    private $id, $fecha, $seccion, $estacion, $aviso, $haviso, $hsalida, $hllegada, $hregreso, $lugar, $direccion, $modelo, $marca, $año, $placa, 
    $serial, $color, $puestos, $propietario, $ci_propietario, $valor, $conductor, $ci_conductor, $aseguradora, $vigencia, $inicio, $ignicion, $culmino, 
    $causa, $h_reignicion, $clase, $declaracion, $h_lesionados, $lesionados, $acta, $observaciones, $jefe, $gral_servicios, $jefe_deseccion, $comandante,  $ci_pnb, $ci_gnb, $ci_intt, $ci_invity, $ci_pc, $ci_otro;

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

    public function setLugar($lugar){
        $this->lugar = $lugar;
    }

    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }

    public function seModelo($modelo){
        $this->modelo = $modelo;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function setAño($año){
        $this->año = $año;
    }

    public function setPlaca($placa){
        $this->placa = $placa;
    }

    public function setSerial($serial){
        $this->serial = $serial;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function setPuestos($puestos){
        $this->puestos = $puestos;
    }

    public function setPropietario($propietario){
        $this->propietario = $propietario;
    }

    public function setCi_propietario($ci_propietario){
        $this->ci_propietario = $ci_propietario;
    }

    public function setValor($valor){
        $this->valor = $valor;
    }

    public function setConductor($conductor){
        $this->conductor = $conductor;
    }

    public function setCi_conductor($ci_conductor){
        $this->ci_conductor = $ci_conductor;
    }

    public function setAseguradora($aseguradora){
        $this->aseguradora = $aseguradora;
    }

    public function setVigencia($vigencia){
        $this->vigencia = $vigencia;
    }

    public function setInicio($inicio){
        $this->inicio = $inicio;
    }

    public function setIgnicion($ignicion){
        $this->ignicion = $ignicion;
    }

    public function setCulmino($culmino){
        $this->culmino = $culmino;
    }

    public function setCausa($causa){
        $this->causa = $causa;
    }

    public function setH_reignicion($h_reignicion){
        $this->h_reignicion = $h_reignicion;
    }

    public function setClase($clase){
        $this->clase = $clase;
    }

    public function setDeclaracion($declaracion){
        $this->declaracion = $declaracion;
    }

    public function setH_lesionados($h_lesionados){
        $this->h_lesionados = $h_lesionados;
    }

    public function setLesionados($lesionados){
        $this->lesionados = $lesionados;
    }


    public function setActa($acta){
        $this->acta = $acta;
    }

    public function setObservaciones($observaciones){
        $this->observaciones = $observaciones;
    }

    public function setJefe($jefe){
        $this->jefe = $jefe;
    }

    public function setGral_servicios($gral_servicios){
        $this->gral_servicios = $gral_servicios;
    }

    public function setJefe_deseccion($jefe_deseccion){
        $this->jefe_deseccion = $jefe_deseccion;
    }

    public function setComandante($comandante){
        $this->comandante = $comandante;
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

    public function getDireccion(){
        return $this->direccion;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function getAño(){
        return $this->año;
    }

    public function getPlaca(){
        return $this->placa;
    }

    public function getSerial(){
        return $this->serial;
    }

    public function getColor(){
        return $this->color;
    }

    public function getPuestos(){
        return $this->puestos;
    }
 
    public function getPropietario(){
        return $this->propietario;
    }

    public function getCi_propietario(){
        return $this->ci_propietario;
    }

    public function getValor(){
        return $this->valor;
    }

    public function getConductor(){
        return $this->conductor;
    }

    public function getCi_conductor(){
        return $this->ci_conductor;
    }

    public function getAseguradora(){
        return $this->aseguradora;
    }

    public function getVigencia(){
        return $this->vigencia;
    }

    public function getInicio(){
        return $this->inicio;
    }

    public function getCulmino(){
        return $this->culmino;
    }

    public function getCausa(){
        return $this->causa;
    }

    public function getH_reignicion(){
        return $this->h_reignicion;
    }

    public function getClase(){
        return $this->clase;
    }

    public function getDeclaracion(){
        return $this->declaracion;
    }

    public function getH_lesionados(){
        return $this->h_lesionados;
    }




    public function getLugar(){
        return $this->lugar;
    }

    public function getJefe(){
        return $this->jefe;
    }

    public function getActa(){
        return $this->acta;
    }

    public function getObservaciones(){
        return $this->observaciones;
    }

    public function getGral_servicios(){
        return $this->gral_servicios;
    }

    public function getJefe_deseccion(){
        return $this->jefe_deseccion;
    }

    public function getComandante(){
        return $this->comandante;
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

    //Registrar
        public function registrarVegetacion($fecha, $seccion, $estacion, $aviso, $haviso, $hsalida, $hllegada, $hregreso, $incendio, $norte, $sur, $este, $oeste, $direccion,
        $lugar, $jefe, $acta, $observaciones, $gral_servicios, $jefe_deseccion, $comandante, $ci_pnb, $ci_gnb, $ci_intt, $ci_invity, $ci_pc, $ci_otro){
        include("conexion.php");

        $SQL = "INSERT INTO vegetacion VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?, ?)";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([null,$fecha, $seccion, $estacion, $aviso, $haviso, $hsalida, $hllegada, $hregreso, $incendio, $norte, $sur, $este, $oeste, $direccion,
        $lugar, $jefe, $acta, $observaciones, $gral_servicios, $jefe_deseccion, $comandante, $ci_pnb, $ci_gnb, $ci_intt, $ci_invity, $ci_pc, $ci_otro]);
        
        return array($preparado,$conexion->lastInsertId());
        
    }
    // // //Modificar
    // public function modificarVegetacion($id, $fecha, $seccion, $estacion, $aviso, $haviso, $hsalida, $hllegada, $hregreso, $incendio, $norte, $sur, $este, $oeste,  $direccion,
    // $lugar, $jefe, $acta, $observaciones, $gral_servicios, $jefe_deseccion, $comandante,  $ci_pnb, $ci_gnb, $ci_intt, $ci_invity, $ci_pc, $ci_otro){
    //     include("conexion.php");

    //     $SQL = "UPDATE vegetacion SET fecha = ?, seccion = ?, estacion = ?, aviso = ?, hora = ?, salida = ?, llegada = ?, regreso = ?, incendio = ?, norte= ?, sur= ?, este= ?, oeste= ?, 
    //     direccion = ?, lugar = ?,  jefe = ?, acta= ?, observaciones= ?,gral_servicios= ?, jefe_deseccion= ?,  comandante= ?,   ci_pnb = ?, ci_gnb = ?, ci_intt = ?, ci_invity = ?, ci_pc = ?, ci_otro = ? WHERE id = ?";
    //     $preparado = $conexion->prepare($SQL);
    //     $preparado->execute([$fecha, $seccion, $estacion, $aviso, $haviso, $hsalida, $hllegada, $hregreso, $incendio, $norte, $sur, $este, $oeste,  $direccion,
    //     $lugar,  $jefe, $acta, $observaciones, $gral_servicios, $jefe_deseccion, $comandante, $ci_pnb, $ci_gnb, $ci_intt, $ci_invity, $ci_pc, $ci_otro, $id]);


    //     return $preparado;
    // }
}
?>