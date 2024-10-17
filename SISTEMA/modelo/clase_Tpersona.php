<?php 

class Tpersona{
    private $id, $tipo, $descripcion;

    public function __construct(){
	}

    //setters
    public function setId($id){
        $this->id = $id;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    //getters
    public function getId(){
        return $this->id;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }

    //REGISTRAR 
    public function registrarTpersona($tipo, $descripcion){
        include("conexion.php");

        $SQL = "INSERT INTO tipo_persona VALUES (?, ?, ?)";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([null,$tipo, $descripcion]);

          // BITACORA

                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Registró Tipo de Persona ".$tipo, $fecha]);

        return $preparado;
    }

    //MODIFICAR
    public function modificarTpersona($id, $tipo, $descripcion){
        include("conexion.php");
    
        $SQL = "UPDATE tipo_persona SET tipo = ?, descripcion = ? WHERE id = ?";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$tipo, $descripcion, $id]);

          // BITACORA

                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Modificó  Tipo de Persona".$tipo, $fecha]);
    
        return $preparado;
    }

}