<?php

class municipio{
    private $id, $nombre, $codigo;

    public function __construct(){
	}

    //setters
    public function setId($id){
        $this->id = $id;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    //getters
    public function getId(){
        return $this->id;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getCodigo(){
        return $this->codigo;
    }

    //Registrar
    public function agregarMunicipio($nombre, $codigo){
        include("conexion.php");

        $SQL = "SELECT * FROM municipio WHERE nombre = :nombre";
        $preparado = $conexion->prepare($SQL);
        $preparado->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $preparado->execute();

        $municipio = $preparado->fetch(PDO::FETCH_ASSOC);

        if(!$municipio){
            $SQL = "INSERT INTO municipio VALUES (?,?,?)";
            $resultado = $conexion->prepare($SQL);
            $resultado->execute([null,$nombre, $codigo]);

            // BITACORA

                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Registró Municipio ".$nombre." el día ",$fecha]);

            return $resultado;
        }else{
            echo "<script>alert('El Municipio ya está registrado')</script>";
        }
        
    }

    //Modificar
    public function modificarMunicipio($id, $nombre, $codigo){
        include("conexion.php");

        // $SQL = "SELECT * FROM municipio WHERE nombre = :nombre";
        // $preparado = $conexion->prepare($SQL);
        // $preparado->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        // $preparado->execute();

        // $municipio = $preparado->fetch(PDO::FETCH_ASSOC);

        // if(!$municipio){
            $SQL = "UPDATE municipio SET nombre = ?, codigo = ? WHERE id = ?";
            $resultado = $conexion->prepare($SQL);
            $resultado->execute([$nombre, $codigo, $id]);
            return $resultado;
        // }else{
        //     echo "<script>alert('El Nombre Municipio ya existe')</script>";
        // }

        
    }
}
?>