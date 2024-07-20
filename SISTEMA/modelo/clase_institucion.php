<?php

class Institucion
{
    private $nombre, $rif, $descripcion, $logo, $firma;

    public function __construct()
    {
    }

    //setters
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setRif($rif)
    {
        $this->rif = $rif;
    }
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }
    public function setFirma($firma)
    {
        $this->firma = $firma;
    }

    //getters

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getRif()
    {
        return $this->rif;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getLogo()
    {
        return $this->logo;
    }

    public function getFirma()
    {
        return $this->firma;
    }


    //Registrar 
    public function registrarInstitucion($nombre, $rif, $descripcion, $logo, $firma)
    {
        include ("conexion.php");

        $SQL = "INSERT INTO institucion (nombre, rif, descripcion, logo, firma) VALUES (?,?,?,?,?)";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$nombre, $rif, $descripcion, $logo, $firma]);

        return $preparado;
    }
    public function obtenerLogo()
    {
        include ("conexion.php");
        $SQL = "SELECT logo FROM institucion ORDER BY id DESC LIMIT 1";
        $query = $conexion->query($SQL);
        $data = $query->fetch();

        return $data;
    }
}