<?php

class leva{
    private $id, $fecha, $seccion, $estacion, $taviso, $solicitante, $recibidor, $aviso, $salida, $llegada, $regreso, $direccion, $municipio, $lugar, $estado, $jefe, $occiso, $estadoEncontrado, $desmembrado, $partes, $causa, $putrefacto, $autorizador, $norte, $sur, $este, $oeste, $clima, $pavimento, $recibidor, $acta, $observaciones, $pnb, $gnb, $intt, $invity, $pc, $otros, $jefeGeneral, $jefeSeccion, $comandante;

    public function __construct(){
	}

    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getFecha(){
		return $this->fecha;
	}

	public function setFecha($fecha){
		$this->fecha = $fecha;
	}

	public function getSeccion(){
		return $this->seccion;
	}

	public function setSeccion($seccion){
		$this->seccion = $seccion;
	}

	public function getEstacion(){
		return $this->estacion;
	}

	public function setEstacion($estacion){
		$this->estacion = $estacion;
	}

	public function getTaviso(){
		return $this->taviso;
	}

	public function setTaviso($taviso){
		$this->taviso = $taviso;
	}

	public function getSolicitante(){
		return $this->solicitante;
	}

	public function setSolicitante($solicitante){
		$this->solicitante = $solicitante;
	}

	public function getRecibidor(){
		return $this->recibidor;
	}

	public function setRecibidor($recibidor){
		$this->recibidor = $recibidor;
	}

	public function getAviso(){
		return $this->aviso;
	}

	public function setAviso($aviso){
		$this->aviso = $aviso;
	}

	public function getSalida(){
		return $this->salida;
	}

	public function setSalida($salida){
		$this->salida = $salida;
	}

	public function getLlegada(){
		return $this->llegada;
	}

	public function setLlegada($llegada){
		$this->llegada = $llegada;
	}

	public function getRegreso(){
		return $this->regreso;
	}

	public function setRegreso($regreso){
		$this->regreso = $regreso;
	}

	public function getDireccion(){
		return $this->direccion;
	}

	public function setDireccion($direccion){
		$this->direccion = $direccion;
	}

	public function getMunicipio(){
		return $this->municipio;
	}

	public function setMunicipio($municipio){
		$this->municipio = $municipio;
	}

	public function getLugar(){
		return $this->lugar;
	}

	public function setLugar($lugar){
		$this->lugar = $lugar;
	}

	public function getEstado(){
		return $this->estado;
	}

	public function setEstado($estado){
		$this->estado = $estado;
	}

	public function getJefe(){
		return $this->jefe;
	}

	public function setJefe($jefe){
		$this->jefe = $jefe;
	}

	public function getOcciso(){
		return $this->occiso;
	}

	public function setOcciso($occiso){
		$this->occiso = $occiso;
	}

	public function getEstadoEncontrado(){
		return $this->estadoEncontrado;
	}

	public function setEstadoEncontrado($estadoEncontrado){
		$this->estadoEncontrado = $estadoEncontrado;
	}

	public function getDesmembrado(){
		return $this->desmembrado;
	}

	public function setDesmembrado($desmembrado){
		$this->desmembrado = $desmembrado;
	}

	public function getPartes(){
		return $this->partes;
	}

	public function setPartes($partes){
		$this->partes = $partes;
	}

	public function getCausa(){
		return $this->causa;
	}

	public function setCausa($causa){
		$this->causa = $causa;
	}

	public function getPutrefacto(){
		return $this->putrefacto;
	}

	public function setPutrefacto($putrefacto){
		$this->putrefacto = $putrefacto;
	}

	public function getAutorizador(){
		return $this->autorizador;
	}

	public function setAutorizador($autorizador){
		$this->autorizador = $autorizador;
	}

	public function getNorte(){
		return $this->norte;
	}

	public function setNorte($norte){
		$this->norte = $norte;
	}

	public function getSur(){
		return $this->sur;
	}

	public function setSur($sur){
		$this->sur = $sur;
	}

	public function getEste(){
		return $this->este;
	}

	public function setEste($este){
		$this->este = $este;
	}

	public function getOeste(){
		return $this->oeste;
	}

	public function setOeste($oeste){
		$this->oeste = $oeste;
	}

	public function getClima(){
		return $this->clima;
	}

	public function setClima($clima){
		$this->clima = $clima;
	}

	public function getPavimento(){
		return $this->pavimento;
	}

	public function setPavimento($pavimento){
		$this->pavimento = $pavimento;
	}

	public function getRecibidor(){
		return $this->recibidor;
	}

	public function setRecibidor($recibidor){
		$this->recibidor = $recibidor;
	}

	public function getActa(){
		return $this->acta;
	}

	public function setActa($acta){
		$this->acta = $acta;
	}

	public function getObservaciones(){
		return $this->observaciones;
	}

	public function setObservaciones($observaciones){
		$this->observaciones = $observaciones;
	}

	public function getPnb(){
		return $this->pnb;
	}

	public function setPnb($pnb){
		$this->pnb = $pnb;
	}

	public function getGnb(){
		return $this->gnb;
	}

	public function setGnb($gnb){
		$this->gnb = $gnb;
	}

	public function getIntt(){
		return $this->intt;
	}

	public function setIntt($intt){
		$this->intt = $intt;
	}

	public function getInvity(){
		return $this->invity;
	}

	public function setInvity($invity){
		$this->invity = $invity;
	}

	public function getPc(){
		return $this->pc;
	}

	public function setPc($pc){
		$this->pc = $pc;
	}

	public function getOtros(){
		return $this->otros;
	}

	public function setOtros($otros){
		$this->otros = $otros;
	}

	public function getJefeGeneral(){
		return $this->jefeGeneral;
	}

	public function setJefeGeneral($jefeGeneral){
		$this->jefeGeneral = $jefeGeneral;
	}

	public function getJefeSeccion(){
		return $this->jefeSeccion;
	}

	public function setJefeSeccion($jefeSeccion){
		$this->jefeSeccion = $jefeSeccion;
	}

	public function getComandante(){
		return $this->comandante;
	}

	public function setComandante($comandante){
		$this->comandante = $comandante;
	}

    //Registrar
    public function agregarLeva($fecha, $seccion, $estacion, $taviso, $solicitante, $recibidor, $aviso, $salida, $llegada, $regreso, $direccion, $municipio, $lugar, $estado, $jefe, $occiso, $estadoEncontrado, $desmembrado, $partes, $causa, $putrefacto, $autorizador, $norte, $sur, $este, $oeste, $clima, $pavimento, $recibidor, $acta, $observaciones, $pnb, $gnb, $intt, $invity, $pc, $otros, $jefeGeneral, $jefeSeccion, $comandante){
        include("conexion.php");

        $SQL = "INSERT INTO leva VALUES (?,?,?,?)";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([null,$nombre, $municipio, $distancia]);

         // BITACORA

                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Registró Lugar ".$nombre." el día ",$fecha]);

        return $preparado;
    }

    //Modificar
    public function modificarLugar($id, $nombre, $municipio, $distancia){
        include("conexion.php");

        $SQL = "UPDATE lugar SET nombre = ?, municipio = ?, distancia = ? WHERE id = ?";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$nombre, $municipio, $distancia, $id]);


         // BITACORA

                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Modificó  Lugar ".$nombre." el día ",$fecha]);
        return $preparado;
    }
}
?>