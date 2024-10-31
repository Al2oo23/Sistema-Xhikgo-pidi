<?php

class modelo{
    private $id, $marca,$nombre;

    public function __construct(){
	}

    //setters
    public function setId($id){
        $this->id = $id;
    }
    
    public function setMarca($marca){
        $this->marca = $marca;
    }
    
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    //getters
    public function getId(){
        return $this->id;
    }

     public function getMarca(){
        return $this->marca;
    }

    public function getNombre(){
        return $this->nombre;
    }
   

    //Registrar
    public function agregarModelo($marca,$nombre){
        include("conexion.php");

        $SQL = "INSERT INTO modelo VALUES (?,?,?)";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([null,$marca,$nombre]);

        return $preparado;
    }

    //Modificar
    public function modificarModelo($id,$marca,$nombre){
        include("conexion.php");
        

        $SQL = "UPDATE modelo SET marca = ?, nombre = ? WHERE id = ?";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$marca,$nombre,$id]);

        return $preparado;
    }  
}
?>