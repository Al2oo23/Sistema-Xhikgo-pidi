<?php

Class servicio{
    private $id, $fecha, $seccion, $estacion, $taviso, $solicitante, $hora, $salida, $llegada, $regreso, $causa, $direccion, $ci_pnb, $ci_gnb, $ci_intt, $ci_invity, $ci_pc, $ci_otro, $jefe_comision, $jefe_general, $jefe_seccion, $comandante, $acta, $observaciones;

    public function __construct(){
	
    }

// Setters
public function setId($id) {
    $this->id = $id;
}

public function setFecha($fecha) {
    $this->fecha = $fecha;
}

public function setSeccion($seccion) {
    $this->seccion = $seccion;
}

public function setEstacion($estacion) {
    $this->estacion = $estacion;
}

public function setTipoAviso($taviso) {
    $this->taviso = $taviso;
}

public function setSolicitante($solicitante) {
    $this->solicitante = $solicitante;
}

public function setHoraAviso($hora) {
    $this->hora = $hora;
}

public function setHoraSalida($salida) {
    $this->salida = $salida;
}

public function setHoraLlegada($llegada) {
    $this->llegada = $llegada;
}

public function setHoraRegreso($regreso) {
    $this->regreso = $regreso;
}

public function setCausa($causa) {
    $this->causa = $causa;
}

public function setDireccion($direccion) {
    $this->direccion = $direccion;
}

public function setCiPnb($ci_pnb) {
    $this->ci_pnb = $ci_pnb;
}

public function setCiGnb($ci_gnb) {
    $this->ci_gnb = $ci_gnb;
}

public function setCiIntt($ci_intt) {
    $this->ci_intt = $ci_intt;
}

public function setCiInvity($ci_invity) {
    $this->ci_invity = $ci_invity;
}

public function setCiPc($ci_pc) {
    $this->ci_pc = $ci_pc;
}

public function setCiOtro($ci_otro) {
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

public function setActa($acta) {
    $this->acta = $acta;
}

public function setObservaciones($observaciones) {
    $this->observaciones = $observaciones;
}

// Getters
public function getId() {
    return $this->id;
}

public function getFecha() {
    return $this->fecha;
}

public function getSeccion() {
    return $this->seccion;
}

public function getEstacion() {
    return $this->estacion;
}

public function getTipoAviso() {
    return $this->taviso;
}

public function getSolicitante() {
    return $this->solicitante;
}

public function getHoraAviso() {
    return $this->hora;
}

public function getHoraSalida() {
    return $this->salida;
}

public function getHoraLlegada() {
    return $this->llegada;
}

public function getHoraRegreso() {
    return $this->regreso;
}

public function getCausa() {
    return $this->causa;
}

public function getDireccion() {
    return $this->direccion;
}

public function getCiPnb() {
    return $this->ci_pnb;
}

public function getCiGnb() {
    return $this->ci_gnb;
}

public function getCiIntt() {
    return $this->ci_intt;
}

public function getCiInvity() {
    return $this->ci_invity;
}

public function getCiPc() {
    return $this->ci_pc;
}

public function getCiOtro() {
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

public function getActa() {
    return $this->acta;
}

public function getObservaciones() {
    return $this->observaciones;
}


    //Registrar
    public function registrarServicio($fecha, $seccion, $estacion, $taviso, $solicitante, $hora, $salida, $llegada, $regreso, $causa, $direccion, $ci_pnb, $ci_gnb, $ci_intt, $ci_invity, $ci_pc, $ci_otro, $jefe_comision, $jefe_general, $jefe_seccion, $comandante, $acta, $observaciones){
        include("conexion.php");

        $SQL = "INSERT INTO servicios VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([null, $fecha, $seccion, $estacion, $taviso, $solicitante, $hora, $salida, $llegada, $regreso, $causa, $direccion, $ci_pnb, $ci_gnb, $ci_intt, $ci_invity, $ci_pc, $ci_otro, $jefe_comision, $jefe_general, $jefe_seccion, $comandante, $acta, $observaciones]);
        
         // BITACORA
                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Registró Servicio", $fecha]);


        // $SQL = "INSERT INTO mantenimiento VALUES (?,?,?,?,?)";
        // $preparado = $conexion->prepare($SQL);
        // $preparado->execute([null, $unidad,"abejas", $fecha,"pendiente"]);
        
        return array($preparado,$conexion->lastInsertId());
        
    }

    //Modificar
    public function modificarServicio($id, $fecha, $seccion, $estacion, $taviso, $solicitante, $hora, $salida, $llegada, $regreso, $causa, $direccion, $ci_pnb, $ci_gnb, $ci_intt, $ci_invity, $ci_pc, $ci_otro, $jefe_comision, $jefe_general, $jefe_seccion, $comandante, $acta, $observaciones){
        include("conexion.php");

        $SQL = "UPDATE servicios SET fecha = ?, seccion = ?, estacion = ?, aviso = ?, solicitante = ?, hora = ?, salida = ?, llegada = ?, regreso = ?, causa = ?, direccion = ?, ci_pnb = ?, ci_gnb = ?, 
        ci_intt = ?,ci_invity = ?, ci_pc = ?, ci_otro = ?, jefe_comision = ?,  jefe_general = ?,  jefe_seccion = ?, comandante = ?, acta = ?, observaciones = ? WHERE id = ?";

        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$fecha, $seccion, $estacion, $taviso, $solicitante, $hora, $salida, $llegada, $regreso, $causa, $direccion, $ci_pnb, $ci_gnb, $ci_intt, $ci_invity, $ci_pc, $ci_otro, $jefe_comision, $jefe_general, $jefe_seccion, $comandante, $acta, $observaciones, $id]);

         // BITACORA
                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Modificó Servicio", $fecha]);

        return $preparado;
    }

    public function reporte($id){
        include("conexion.php");
        
        $SQL = "SELECT * FROM servicios WHERE id = :id";
        $preparado = $conexion->prepare($SQL);
        $preparado->bindParam(':id', $id, PDO::PARAM_INT); 
        $preparado->execute();

        return $preparado->fetch(PDO::FETCH_ASSOC);
    }
}
?>