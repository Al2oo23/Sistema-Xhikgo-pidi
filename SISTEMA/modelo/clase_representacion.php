<?php

class representacion
{
    private $id;
    private $fecha;
    private $seccion;
    private $estacion;
    private $tipo_aviso;
    private $hora_aviso;
    private $hora_salida;
    private $hora_llegada;
    private $hora_regreso;
    private $causa;
    private $direccion;
    private $num_efectivos;
    private $maletin;
    private $explicacion;
    private $ci_pnb;
    private $ci_gnb;
    private $ci_intt;
    private $ci_invity;
    private $ci_pc;
    private $ci_otro;
    private $jefe_comision;
    private $jefe_general;
    private $jefe_seccion;
    private $comandante;

    public function __construct() {}

    // Setters
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function setSeccion($seccion)
    {
        $this->seccion = $seccion;
    }

    public function setEstacion($estacion)
    {
        $this->estacion = $estacion;
    }

    public function setTipoAviso($tipo_aviso)
    {
        $this->tipo_aviso = $tipo_aviso;
    }

    public function setHoraAviso($hora_aviso)
    {
        $this->hora_aviso = $hora_aviso;
    }

    public function setHoraSalida($hora_salida)
    {
        $this->hora_salida = $hora_salida;
    }

    public function setHoraLlegada($hora_llegada)
    {
        $this->hora_llegada = $hora_llegada;
    }

    public function setHoraRegreso($hora_regreso)
    {
        $this->hora_regreso = $hora_regreso;
    }

    public function setCausa($causa)
    {
        $this->causa = $causa;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function setNumEfectivos($num_efectivos)
    {
        $this->num_efectivos = $num_efectivos;
    }

    public function setMaletin($maletin)
    {
        $this->maletin = $maletin;
    }

    public function setExplicacion($explicacion)
    {
        $this->explicacion = $explicacion;
    }

    public function setCiPNB($ci_pnb)
    {
        $this->ci_pnb = $ci_pnb;
    }

    public function setCiGNB($ci_gnb)
    {
        $this->ci_gnb = $ci_gnb;
    }

    public function setCiINTT($ci_intt)
    {
        $this->ci_intt = $ci_intt;
    }

    public function setCiINVITY($ci_invity)
    {
        $this->ci_invity = $ci_invity;
    }

    public function setCiPC($ci_pc)
    {
        $this->ci_pc = $ci_pc;
    }

    public function setCiOtro($ci_otro)
    {
        $this->ci_otro = $ci_otro;
    }

    public function setJefeComision($jefe_comision)
    {
        $this->jefe_comision = $jefe_comision;
    }

    public function setJefeGeneral($jefe_general)
    {
        $this->jefe_general = $jefe_general;
    }

    public function setJefeSeccion($jefe_seccion)
    {
        $this->jefe_seccion = $jefe_seccion;
    }

    public function setComandante($comandante)
    {
        $this->comandante = $comandante;
    }

    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function getSeccion()
    {
        return $this->seccion;
    }

    public function getEstacion()
    {
        return $this->estacion;
    }

    public function getTipoAviso()
    {
        return $this->tipo_aviso;
    }

    public function getHoraAviso()
    {
        return $this->hora_aviso;
    }

    public function getHoraSalida()
    {
        return $this->hora_salida;
    }

    public function getHoraLlegada()
    {
        return $this->hora_llegada;
    }

    public function getHoraRegreso()
    {
        return $this->hora_regreso;
    }

    public function getCausa()
    {
        return $this->causa;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function getNumEfectivos()
    {
        return $this->num_efectivos;
    }

    public function getMaletin()
    {
        return $this->maletin;
    }
    public function getExplicacion()
    {
        return $this->explicacion;
    }

    public function getCIPNB()
    {
        return $this->ci_pnb;
    }

    public function getCIGNB()
    {
        return $this->ci_gnb;
    }

    public function getCIINTT()
    {
        return $this->ci_intt;
    }

    public function getCIINVITY()
    {
        return $this->ci_invity;
    }

    public function getCIPC()
    {
        return $this->ci_pc;
    }

    public function getCIOtro()
    {
        return $this->ci_otro;
    }

    public function getJefeComision()
    {
        return $this->jefe_comision;
    }

    public function getJefeGeneral()
    {
        return $this->jefe_general;
    }

    public function getJefeSeccion()
    {
        return $this->jefe_seccion;
    }

    public function getComandante()
    {
        return $this->comandante;
    }





    //REGISTRAR
    public function registrarRepresentacion($fecha, $seccion, $estacion, $tipo_aviso, $hora_aviso, $hora_salida, $hora_llegada, $hora_regreso, $causa, $direccion, $num_efectivos, $maletin, $explicacion, $ci_pnb, $ci_gnb, $ci_intt, $ci_invity, $ci_pc, $ci_otro, $jefe_comision, $jefe_general, $jefe_seccion, $comandante)
    {

        include("conexion.php");

        $SQL = "INSERT INTO representacion_institucional VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $preparado = $conexion->prepare($SQL);

        $preparado->execute([
            null,
            $fecha,
            $seccion,
            $estacion,
            $tipo_aviso,
            $hora_aviso,
            $hora_salida,
            $hora_llegada,
            $hora_regreso,
            $causa,
            $direccion,
            $num_efectivos,
            $maletin,
            $explicacion,
            $ci_pnb,
            $ci_gnb,
            $ci_intt,
            $ci_invity,
            $ci_pc,
            $ci_otro,
            $jefe_comision,
            $jefe_general,
            $jefe_seccion,
            $comandante
        ]);

        return $preparado;
    }


    //MODIFICAR
    public function modificarRepresentacion($id, $fecha, $seccion, $estacion, $tipo_aviso, $hora_aviso, $hora_salida, $hora_llegada, $hora_regreso, $causa, $direccion, $num_efectivos, $maletin, $explicacion, $ci_pnb, $ci_gnb, $ci_intt, $ci_invity, $ci_pc, $ci_otro, $jefe_comision, $jefe_general, $jefe_seccion, $comandante)
    {

        include("conexion.php");

        $SQL = "UPDATE representacion_institucional SET fecha = ?, seccion = ?, estacion = ?, aviso = ?, hora = ?, salida = ?, llegada = ?, regreso = ?, causa = ?, direccion = ?, num_efectivos = ?, material = ?, explicacion = ?, ci_pnb = ?, ci_gnb = ?, ci_intt = ?, ci_invity = ?, ci_pc = ?, ci_otro = ?, jefe_comision = ?, jefe_generales = ?, jefe_seccion = ?, comandante = ? WHERE id = ?";

        $preparado = $conexion->prepare($SQL);

        $preparado->execute([$fecha, $seccion, $estacion, $tipo_aviso, $hora_aviso, $hora_salida, $hora_llegada, $hora_regreso, $causa, $direccion, $num_efectivos, $maletin, $explicacion, $ci_pnb, $ci_gnb, $ci_intt, $ci_invity, $ci_pc, $ci_otro, $jefe_comision, $jefe_general, $jefe_seccion, $comandante, $id]);

        return $preparado;
    }
}
