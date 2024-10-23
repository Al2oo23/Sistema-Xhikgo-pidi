<?php

class Vegetacion{
    private $id, $fecha, $seccion, $estacion, $aviso, $haviso, $hsalida, $hllegada, $hregreso, $incendio, $norte, $sur, $este, $oeste, $direccion,
    $lugar, $jefe, $acta, $observaciones, $gral_servicios, $jefe_deseccion, $comandante,  $ci_pnb, $ci_gnb, $ci_intt, $ci_invity, $ci_pc, $ci_otro;

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

    public function setIncendio($incendio){
        $this->incendio = $incendio;
    }

    public function setNorte($norte){
        $this->norte = $norte;
    }

    public function setSur($sur){
        $this->sur = $sur;
    }

    public function setEste($este){
        $this->este = $este;
    }

    public function setOeste($oeste){
        $this->oeste = $oeste;
    }

    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }

    public function setLugar($lugar){
        $this->lugar = $lugar;
    }

    public function setJefe($jefe){
        $this->jefe = $jefe;
    }

    public function setActa($acta){
        $this->acta = $acta;
    }

    public function setObservaciones($observaciones){
        $this->observaciones = $observaciones;
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

    public function getIncendio(){
        return $this->incendio;
    }

    public function getNorte(){
        return $this->norte;
    }

    public function getSur(){
        return $this->sur;
    }

    public function getEste(){
        return $this->este;
    }

    public function getOeste(){
        return $this->oeste;
    }

    public function getDireccion(){
        return $this->direccion;
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
        
         // BITACORA
                // // Fecha y hora actual
                // $fecha = date('Y-m-d H:i:s');
            
                // // Preparar la consulta SQL
                // $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                // $resultado2 = $conexion->prepare($sql);

                // // Ejecutar la consulta
                // $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Registró Abejas", $fecha]);


        // $SQL = "INSERT INTO mantenimiento VALUES (?,?,?,?,?)";
        // $preparado = $conexion->prepare($SQL);
        // $preparado->execute([null, $unidad,"abejas", $fecha,"pendiente"]);
        
        return array($preparado,$conexion->lastInsertId());
        
    }
    // //Modificar
    public function modificarVegetacion($id, $fecha, $seccion, $estacion, $aviso, $haviso, $hsalida, $hllegada, $hregreso, $incendio, $norte, $sur, $este, $oeste,  $direccion,
    $lugar, $jefe, $acta, $observaciones, $gral_servicios, $jefe_deseccion, $comandante,  $ci_pnb, $ci_gnb, $ci_intt, $ci_invity, $ci_pc, $ci_otro){
        include("conexion.php");

        $SQL = "UPDATE vegetacion SET fecha = ?, seccion = ?, estacion = ?, aviso = ?, hora = ?, salida = ?, llegada = ?, regreso = ?, incendio = ?, norte= ?, sur= ?, este= ?, oeste= ?, 
        direccion = ?, lugar = ?,  jefe = ?, acta= ?, observaciones= ?,gral_servicios= ?, jefe_deseccion= ?,  comandante= ?,   ci_pnb = ?, ci_gnb = ?, ci_intt = ?, ci_invity = ?, ci_pc = ?, ci_otro = ? WHERE id = ?";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$fecha, $seccion, $estacion, $aviso, $haviso, $hsalida, $hllegada, $hregreso, $incendio, $norte, $sur, $este, $oeste,  $direccion,
        $lugar,  $jefe, $acta, $observaciones, $gral_servicios, $jefe_deseccion, $comandante, $ci_pnb, $ci_gnb, $ci_intt, $ci_invity, $ci_pc, $ci_otro, $id]);

    // //      // BITACORA
    //             // Fecha y hora actual
    //             $fecha = date('Y-m-d H:i:s');
            
    //             // Preparar la consulta SQL
    //             $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
    //             $resultado2 = $conexion->prepare($sql);

    //             // Ejecutar la consulta
    //             $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Modificó Abejas", $fecha]);

        return $preparado;
    }
}
?>