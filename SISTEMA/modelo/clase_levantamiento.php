<?php

class Levantamiento
{
    private $id, $fecha, $direccion, $municipio, $lugar, $estado_encontrado, $causa;

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

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;
    }

    public function setLugar($lugar)
    {
        $this->lugar = $lugar;
    }

    public function setEstadoEncontrado($estado_encontrado)
    {
        $this->estado_encontrado = $estado_encontrado;
    }

    public function setCausa($causa)
    {
        $this->causa = $causa;
    }


    // Getters


    public function getFecha()
    {
        return $this->fecha;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function getMunicipio()
    {
        return $this->municipio;
    }

    public function getLugar()
    {
        return $this->lugar;
    }

    public function getEstadoEncontrado()
    {
        return $this->estado_encontrado;
    }

    public function getCausa()
    {
        return $this->causa;
    }



    //REGISTRAR
    public function registrarLevantamiento($fecha, $direccion, $municipio, $lugar, $estado_encontrado, $causa)
    {

        include("conexion.php");

        $SQL = "INSERT INTO levantamiento VALUES (?, ?, ?, ?, ?, ?)";

        $preparado = $conexion->prepare($SQL);

        $preparado->execute([$fecha, $direccion, $municipio, $lugar, $estado_encontrado, $causa]);

        // BITACORA
        // Fecha y hora actual
        $fecha = date('Y-m-d H:i:s');

        // Preparar la consulta SQL
        $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
        $resultado2 = $conexion->prepare($sql);

        // Ejecutar la consulta
        $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Registró Levantamiento", $fecha]);

        // $SQL = "INSERT INTO mantenimiento VALUES (?,?,?,?,?)";
        // $preparado = $conexion->prepare($SQL);
        // $preparado->execute([null, $unidad,"incendio", $fecha,"pendiente"]);
        return array($preparado, $conexion->lastInsertId());
    }


//     //MODIFICAR
//     public function modificarIncedio($fecha, $seccion, $estacion, $tipo_aviso, $solicitante, $causa, $aprobador)
//     {

//         include("conexion.php");

//         $SQL = "UPDATE levantamiento SET fecha = ?, seccion = ?, estacion = ?, tipo_aviso = ?, solicitante = ?, receptor = ?, aprobador = ?";

//         $preparado = $conexion->prepare($SQL);

//         $preparado->execute([$fecha, $seccion, $estacion, $tipo_aviso, $solicitante, $receptor, $aprobador, $hora_aviso, $hora_salida, $hora_llegada, $hora_regreso, $municipio, $localidad, $direccion, $paredes, $techo, $piso, $ventanas, $puertas, $otros_materiales, $propietario, $valor_inmueble, $num_residenciados, $ninos, $adolescentes, $adultos, $info_adicional, $asegurado, $aseguradora, $num_poliza, $valor_asegurado, $valor_perdido, $valor_salvado, $fuente_ignicion, $causa_incendio, $lugar_inicio, $lugar_fin, $reignicion, $tipo_combustible, $declaracion, $lesionados, $num_lesionados, $datos_lesionados, $jefe_comision, $ci_pnb, $ci_gnb, $ci_intt, $ci_invity, $ci_pc, $ci_otro, $observaciones, $id]);

//         // BITACORA
//         // Fecha y hora actual
//         $fecha = date('Y-m-d H:i:s');

//         // Preparar la consulta SQL
//         $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
//         $resultado2 = $conexion->prepare($sql);

//         // Ejecutar la consulta
//         $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Modicó Levantamiento", $fecha]);

//         return $preparado;
//     }

}