<?php 

class Vehiculo{
    private $niv, $tipo, $unidad, $marca, $modelo, $serial, $cilindrada, $carburante, $seguro, $propietario;

    public function __construct(){
	}

    //setters
    public function setNiv($niv){
        $this->niv = $niv;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
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
    
    public function setSerial($serial){
        $this->serial = $serial;
    }

    public function setCilindrada($cilindrada){
        $this->cilindrada = $cilindrada;
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

    public function getUnidad(){
        return $this->unidad;
    }

    public function getMarca(){
        return $this->marca;
    }
    
    public function getModelo(){
        return $this->modelo;
    }

    public function getSerial(){
        return $this->serial;
    }

    public function getCilindrada(){
        return $this->cilindrada;
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
    public function registrarVehiculo($niv, $tipo, $unidad, $marca, $modelo, $serial, $cilindrada, $carburante, $seguro, $propietario){
        include("conexion.php");

        $SQL = "INSERT INTO vehiculo VALUES (?,?,?,?,?,?,?,?,?,?)";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$niv, $tipo, $unidad, $marca, $modelo, $serial, $cilindrada, $carburante, $seguro, $propietario]);

         // BITACORA
                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Registró Vehiculo".$niv, $fecha]);


        return $preparado;
    }

    //MODIFICAR
    public function modificarVehiculo($niv, $tipo, $unidad, $marca, $modelo, $serial, $cilindrada, $carburante, $seguro, $propietario){
        include("conexion.php");
    
        $SQL = "UPDATE vehiculo SET tipo = ?, unidad = ?, marca = ?, modelo = ?, serial_vehiculo = ?, cilindrada = ?, 
        carburante = ?, seguro = ?, cedula = ? WHERE niv = ?";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$tipo, $unidad, $marca, $modelo, $serial, $cilindrada, $carburante, $seguro, $propietario, $niv]);

         // BITACORA
                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Modifico Vehiculo".$tipo, $fecha]);

    
        return $preparado;
    }

}