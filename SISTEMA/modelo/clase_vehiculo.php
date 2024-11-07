<?php 

class Vehiculo{
    private $niv, $tipo, $propiedad, $unidad, $marca, $modelo, $carburante, $seguro, $propietario;

    public function __construct(){
	}

    //setters
    public function setNiv($niv){
        $this->niv = $niv;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function setPropiedad($propiedad){
        $this->propiedad = $propiedad;
    }

    public function setUnidad($unidad){
        $this->unidad = $unidad;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function setCarburante($carburante){
        $this->carburante = $carburante;
    }

    public function setSeguro($seguro){
        $this->seguro = $seguro;
    }

    public function setPropietario($propietario){
        $this->propietario = $propietario;
    }

    //getters
    public function getNiv(){
        return $this->niv;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function getPropiedad(){
        return $this->propiedad;
    }

    public function getUnidad(){
        return $this->unidad;
    }

    public function getMarca(){
        return $this->marca;
    }
    
    public function getModelo(){
        return $this->modelo;
    }

    public function getCarburante(){
        return $this->carburante;
    }

    public function getSeguro(){
        return $this->seguro;
    }

    public function getPropietario(){
        return $this->propietario;
    }
    

    //REGISTRAR 
    public function registrarVehiculo($niv, $tipo, $unidad, $propiedad, $marca, $modelo, $carburante, $seguro, $propietario){
        include("conexion.php");

        $SQL = "INSERT INTO vehiculo VALUES (?,?,?,?,?,?,?,?,?)";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$niv, $tipo, $unidad, $propiedad ,$marca, $modelo, $carburante, $seguro, $propietario]);


        return $preparado;
    }

    //MODIFICAR
    public function modificarVehiculo($niv, $tipo, $unidad, $propiedad, $marca, $modelo, $carburante, $seguro, $propietario){
        include("conexion.php");
    
        $SQL = "UPDATE vehiculo SET tipo = ?, unidad = ?, propiedad = ?, marca = ?, modelo = ?, carburante = ?, seguro = ?, cedula = ? WHERE niv = ?";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$tipo, $unidad, $propiedad, $marca, $modelo, $carburante, $seguro, $propietario, $niv]);

    
        return $preparado;
    }

}