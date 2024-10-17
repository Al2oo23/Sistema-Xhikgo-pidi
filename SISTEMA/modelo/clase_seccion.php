<?php 

class seccion{
    private $id, $numero;

    public function __construct(){
	}

    //setters
    public function setId($id){
        $this->id = $id;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }


    //getters
    public function getId(){
        return $this->id;
    }

    public function getNumero(){
        return $this->numero;
    }



    //REGISTRAR 
    public function registrarSeccion($numero){
        include("conexion.php");

        $SQL = "INSERT INTO seccion (numero) VALUES (?)";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$numero]);

         // BITACORA

                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Modificó  Seccion ".$numero, $fecha]);

        return $preparado;
    }

   //MODIFICAR
   public function modificarSeccion($id, $numero){
    include("conexion.php");

    $SQL = "UPDATE seccion SET numero = ?  WHERE id = ?";
    $preparado = $conexion->prepare($SQL);
    $preparado->execute([$numero , $id]);

     // BITACORA

                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Modificó  Seccion ".$numero, $fecha]);

    return $preparado;
}


    //ELIMINAR
    public function eliminarSeccion ($id){
        include ("conexion.php");

        $SQL = $conexion->prepare("DELETE FROM seccion WHERE id = ?");
        $SQL->bindParam(1, $id, PDO::PARAM_INT);
        $preparado = $SQL->execute();

         // BITACORA

                // Fecha y hora actual
                $fecha = date('Y-m-d H:i:s');
            
                // Preparar la consulta SQL
                $sql = "INSERT INTO bitacora VALUES (?,?,?,?)";
                $resultado2 = $conexion->prepare($sql);

                // Ejecutar la consulta
                $resultado2->execute([null, $_SESSION['usuarioDatos'][0]['nombre'], "Eliminó  Seccion Con el ID ".$id, $fecha]);


        return $preparado;
    }



}