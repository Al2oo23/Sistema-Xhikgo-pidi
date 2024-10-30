<?php

class marca{
    private $id, $nombre;

    public function __construct(){
	}

    //setters
    public function setId($id){
        $this->id = $id;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
   
    //getters
    public function getId(){
        return $this->id;
    }


    public function getNombre(){
        return $this->nombre;
    }
  

    //Registrar
    public function agregarMarca($nombre){
        include("conexion.php");

        $SQL = "SELECT * FROM marca WHERE nombre = :nombre";
        $preparado = $conexion->prepare($SQL);
        $preparado->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $preparado->execute();

        $marca = $preparado->fetch(PDO::FETCH_ASSOC);

        if(!$marca){
            $SQL = "INSERT INTO marca VALUES (?,?)";
            $resultado = $conexion->prepare($SQL);
            $resultado->execute([null,$nombre]);

            // // BITACORA

            //     // Fecha y hora actual
            //     $fecha = date('Y-m-d H:i:s');
            
            //     // Preparar la consulta SQL
            //     $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
            //     $resultado2 = $conexion->prepare($sql);

            //     // Ejecutar la consulta
            //     $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Registró Marca".$nombre, $fecha]);

                return $resultado;
        }else{
            echo "<script>alert('La Marca ya está registrada')</script>";
        }
    }
    
    //Modificar
    public function modificarMarca($id, $nombre){
        include("conexion.php");

        $SQL = "UPDATE marca SET nombre = ? WHERE id = ?";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$nombre,  $id]);

        // BITACORA

                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Modifico Marca".$nombre, $fecha]);

        return $preparado;
    }
}