<?php

class Aseguradora{
    private $id, $nombre, $tipo;

    public function __construct(){
	}

    //setters
    public function setId($id){
        $this->id = $id;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    //getters
    public function getId(){
        return $this->id;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getTipo(){
        return $this->tipo;
   }

    //Registrar
    public function registrarAseguradora($nombre, $tipo){
        include("conexion.php");

        $SQL = "INSERT INTO seguro VALUES (?,?,?)";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([null,$nombre, $tipo]);

          
        return $preparado;
    }

    //Modificar
    public function modificarAseguradora($id, $nombre, $tipo){
        include("conexion.php");

        $SQL = "UPDATE seguro SET nombre = ?, tipo = ? WHERE id = ?";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$nombre, $tipo, $id]);

          // BITACORA

                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Modificó La Aseguradora".$nombre, $fecha]);


        return $preparado;
    }
}
?>