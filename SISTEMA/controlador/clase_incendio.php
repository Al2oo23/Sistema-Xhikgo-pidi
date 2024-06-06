<?php

class incendio
{
    private $id;
    private $fecha;
    private $seccion;
    private $estacion;
    private $tipo_aviso;
    private $solicitante;
    private $receptor;
    private $aprobador;
    private $hora_aviso;
    private $hora_salida;
    private $hora_llegada;
    private $hora_regreso;
    private $municipio;
    private $localidad;
    private $direccion;
    private $paredes;
    private $techo;
    private $piso;
    private $ventanas;
    private $puertas;
    private $otros_materiales;
    private $propietario;
    private $valor_inmueble;
    private $num_residenciados;
    private $ninos;
    private $adolescentes;
    private $adultos;
    private $info_adicional;
    private $asegurado;
    private $aseguradora;
    private $num_poliza;
    private $valor_asegurado;
    private $valor_perdido;
    private $valor_salvado;
    private $fuente_ignicion;
    private $causa_incendio;
    private $lugar_inicio;
    private $lugar_fin;
    private $reignicion;
    private $tipo_combustible;
    private $declaracion;
    private $lesionados;
    private $num_lesionados;
    private $datos_lesionados;
    private $recurso_utilizado;
    private $cantidad_recurso_usado;
    private $unidad;
    private $jefe_comision;
    private $efectivo;
    private $ci_pnb;
    private $ci_gnb;
    private $ci_intt;
    private $ci_invity;
    private $ci_pc;
    private $ci_otro;
    private $observaciones;

    public function __construct()
    {
    }

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

    public function setSolicitante($solicitante)
    {
        $this->solicitante = $solicitante;
    }

    public function setReceptor($receptor)
    {
        $this->receptor = $receptor;
    }

    public function setAprobador($aprobador)
    {
        $this->aprobador = $aprobador;
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

    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;
    }

    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function setParedes($paredes)
    {
        $this->paredes = $paredes;
    }

    public function setTecho($techo)
    {
        $this->techo = $techo;
    }

    public function setPiso($piso)
    {
        $this->piso = $piso;
    }

    public function setVentanas($ventanas)
    {
        $this->ventanas = $ventanas;
    }

    public function setPuertas($puertas)
    {
        $this->puertas = $puertas;
    }

    public function setOtrosMateriales($otros_materiales)
    {
        $this->otros_materiales = $otros_materiales;
    }

    public function setPropietario($propietario)
    {
        $this->propietario = $propietario;
    }

    public function setValorInmueble($valor_inmueble)
    {
        $this->valor_inmueble = $valor_inmueble;
    }

    public function setNumResidenciados($num_residenciados)
    {
        $this->num_residenciados = $num_residenciados;
    }

    public function setNinos($ninos)
    {
        $this->ninos = $ninos;
    }

    public function setAdolescentes($adolescentes)
    {
        $this->adolescentes = $adolescentes;
    }

    public function setAdultos($adultos)
    {
        $this->adultos = $adultos;
    }

    public function setInfoAdicional($info_adicional)
    {
        $this->info_adicional = $info_adicional;
    }

    public function setAsegurado($asegurado)
    {
        $this->asegurado = $asegurado;
    }

    public function setAseguradora($aseguradora)
    {
        $this->aseguradora = $aseguradora;
    }

    public function setNumPoliza($num_poliza)
    {
        $this->num_poliza = $num_poliza;
    }

    public function setValorAsegurado($valor_asegurado)
    {
        $this->valor_asegurado = $valor_asegurado;
    }

    public function setValorPerdido($valor_perdido)
    {
        $this->valor_perdido = $valor_perdido;
    }

    public function setValorSalvado($valor_salvado)
    {
        $this->valor_salvado = $valor_salvado;
    }

    public function setFuenteIgnicion($fuente_ignicion)
    {
        $this->fuente_ignicion = $fuente_ignicion;
    }

    public function setCausaIncendio($causa_incendio)
    {
        $this->causa_incendio = $causa_incendio;
    }

    public function setLugarInicio($lugar_inicio)
    {
        $this->lugar_inicio = $lugar_inicio;
    }

    public function setLugarFin($lugar_fin)
    {
        $this->lugar_fin = $lugar_fin;
    }

    public function setReignicion($reignicion)
    {
        $this->reignicion = $reignicion;
    }

    public function setTipoCombustible($tipo_combustible)
    {
        $this->tipo_combustible = $tipo_combustible;
    }

    public function setDeclaracion($declaracion)
    {
        $this->declaracion = $declaracion;
    }

    public function setLesionados($lesionados)
    {
        $this->lesionados = $lesionados;
    }

    public function setNumLesionados($num_lesionados)
    {
        $this->num_lesionados = $num_lesionados;
    }

    public function setDatosLesionados($datos_lesionados)
    {
        $this->datos_lesionados = $datos_lesionados;
    }

    public function setRecursoUtilizado($recurso_utilizado)
    {
        $this->recurso_utilizado = $recurso_utilizado;
    }

    public function setCantidadRecursoUsado($cantidad_recurso_usado)
    {
        $this->cantidad_recurso_usado = $cantidad_recurso_usado;
    }

    public function setUnidad($unidad)
    {
        $this->unidad = $unidad;
    }

    public function setJefeComision($jefe_comision)
    {
        $this->jefe_comision = $jefe_comision;
    }

    public function setEfectivo($efectivo)
    {
        $this->efectivo = $efectivo;
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

    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
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

    public function getSolicitante()
    {
        return $this->solicitante;
    }

    public function getReceptor()
    {
        return $this->receptor;
    }

    public function getAprobador()
    {
        return $this->aprobador;
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

    public function getMunicipio()
    {
        return $this->municipio;
    }

    public function getLocalidad()
    {
        return $this->localidad;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function getParedes()
    {
        return $this->paredes;
    }

    public function getTecho()
    {
        return $this->techo;
    }

    public function getPiso()
    {
        return $this->piso;
    }
    public function getVentanas()
    {
        return $this->ventanas;
    }

    public function getPuertas()
    {
        return $this->puertas;
    }

    public function getOtrosMateriales()
    {
        return $this->otros_materiales;
    }

    public function getPropietario()
    {
        return $this->propietario;
    }

    public function getValorInmueble()
    {
        return $this->valor_inmueble;
    }

    public function getNumResidenciados()
    {
        return $this->num_residenciados;
    }

    public function getNinos()
    {
        return $this->ninos;
    }

    public function getAdolescentes()
    {
        return $this->adolescentes;
    }

    public function getAdultos()
    {
        return $this->adultos;
    }

    public function getInfoAdicional()
    {
        return $this->info_adicional;
    }

    public function getAsegurado()
    {
        return $this->asegurado;
    }

    public function getAseguradora()
    {
        return $this->aseguradora;
    }

    public function getNumPoliza()
    {
        return $this->num_poliza;
    }

    public function getValorAsegurado()
    {
        return $this->valor_asegurado;
    }

    public function getValorPerdido()
    {
        return $this->valor_perdido;
    }

    public function getValorSalvado()
    {
        return $this->valor_salvado;
    }

    public function getFuenteIgnicion()
    {
        return $this->fuente_ignicion;
    }

    public function getCausaIncendio()
    {
        return $this->causa_incendio;
    }

    public function getLugarInicio()
    {
        return $this->lugar_inicio;
    }

    public function getLugarFin()
    {
        return $this->lugar_fin;
    }

    public function getReignicion()
    {
        return $this->reignicion;
    }

    public function getTipoCombustible()
    {
        return $this->tipo_combustible;
    }

    public function getDeclaracion()
    {
        return $this->declaracion;
    }

    public function getLesionados()
    {
        return $this->lesionados;
    }

    public function getNumLesionados()
    {
        return $this->num_lesionados;
    }

    public function getDatosLesionados()
    {
        return $this->datos_lesionados;
    }

    public function getRecursoUtilizado()
    {
        return $this->recurso_utilizado;
    }
    public function getCantidadRecursoUsado()
    {
        return $this->cantidad_recurso_usado;
    }

    public function getUnidad()
    {
        return $this->unidad;
    }

    public function getJefeComision()
    {
        return $this->jefe_comision;
    }

    public function getEfectivo()
    {
        return $this->efectivo;
    }

    public function getCiPNB()
    {
        return $this->ci_pnb;
    }

    public function getCiGNB()
    {
        return $this->ci_gnb;
    }

    public function getCiINTT()
    {
        return $this->ci_intt;
    }

    public function getCiINVITY()
    {
        return $this->ci_invity;
    }

    public function getCiPC()
    {
        return $this->ci_pc;
    }

    public function getCiOtro()
    {
        return $this->ci_otro;
    }

    public function getObservaciones()
    {
        return $this->observaciones;
    }


    //REGISTRAR
    public function registrarIncendio(
        $fecha,
        $seccion,
        $estacion,
        $tipo_aviso,
        $solicitante,
        $receptor,
        $aprobador,
        $hora_aviso,
        $hora_salida,
        $hora_llegada,
        $hora_regreso,
        $municipio,
        $localidad,
        $direccion,
        $paredes,
        $techo,
        $piso,
        $ventanas,
        $puertas,
        $otros_materiales,
        $propietario,
        $valor_inmueble,
        $num_residenciados,
        $ninos,
        $adolescentes,
        $adultos,
        $info_adicional,
        $asegurado,
        $aseguradora,
        $num_poliza,
        $valor_asegurado,
        $valor_perdido,
        $valor_salvado,
        $fuente_ignicion,
        $causa_incendio,
        $lugar_inicio,
        $lugar_fin,
        $reignicion,
        $tipo_combustible,
        $declaracion,
        $lesionados,
        $num_lesionados,
        $datos_lesionados,
        $recurso_utilizado,
        $cantidad_recurso_usado,
        $unidad,
        $jefe_comision,
        $efectivo,
        $ci_pnb,
        $ci_gnb,
        $ci_intt,
        $ci_invity,
        $ci_pc,
        $ci_otro,
        $observaciones
    ) {
        include("conexion.php");
    
        $SQL = "INSERT INTO incendio (
            fecha, seccion, estacion, tipo_aviso, solicitante, receptor, aprobador, hora_aviso, hora_salida,
            hora_llegada, hora_regreso, municipio, localidad, direccion, paredes, techo, piso, ventanas,
            puertas, otros_materiales, propietario, valor_inmueble, num_residenciados, ninos, adolescentes,
            adultos, info_adicional, asegurado, aseguradora, num_poliza, valor_asegurado, valor_perdido,
            valor_salvado, fuente_ignicion, causa_incendio, lugar_inicio, lugar_fin, reignicion, tipo_combustible,
            declaracion, lesionados, num_lesionados, datos_lesionados, recurso_utilizado, cantidad_recurso_usado,
            unidad, jefe_comision, efectivo, ci_pnb, ci_gnb, ci_intt, ci_invity, ci_pc, ci_otro, observaciones
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([
            $fecha, $seccion, $estacion, $tipo_aviso, $solicitante, $receptor, $aprobador, $hora_aviso, $hora_salida,
            $hora_llegada, $hora_regreso, $municipio, $localidad, $direccion, $paredes, $techo, $piso, $ventanas,
            $puertas, $otros_materiales, $propietario, $valor_inmueble, $num_residenciados, $ninos, $adolescentes,
            $adultos, $info_adicional, $asegurado, $aseguradora, $num_poliza, $valor_asegurado, $valor_perdido,
            $valor_salvado, $fuente_ignicion, $causa_incendio, $lugar_inicio, $lugar_fin, $reignicion, $tipo_combustible,
            $declaracion, $lesionados, $num_lesionados, $datos_lesionados, $recurso_utilizado, $cantidad_recurso_usado,
            $unidad, $jefe_comision, $efectivo, $ci_pnb, $ci_gnb, $ci_intt, $ci_invity, $ci_pc, $ci_otro, $observaciones
        ]);
    
        return $preparado;
    }
    



    //Modificar
    public function modificarMarca($id, $nombre,)
    {
        include("conexion.php");

        $SQL = "UPDATE marca SET nombre = ? WHERE id = ?";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$nombre,  $id]);

        return $preparado;
    }
}
