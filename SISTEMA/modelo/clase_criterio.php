<?php 

class criterio{
    private $tabla, $orden, $campo, $criterio, $valor, $sentencia;

    public function getTabla(){
		return $this->tabla;
	}

	public function setTabla($tabla){
		$this->tabla = $tabla;
	}

	public function getOrden(){
		return $this->orden;
	}

	public function setOrden($orden){
		$this->orden = $orden;
	}

	public function getCampo(){
		return $this->campo;
	}

	public function setCampo($campo){
		$this->campo = $campo;
	}

	public function getCriterio(){
		return $this->criterio;
	}

	public function setCriterio($criterio){
		$this->criterio = $criterio;
	}

	public function getValor(){
		return $this->valor;
	}

	public function setValor($valor){
		$this->valor = $valor;
	}

    //REGISTRAR 
    public function aplicarCriterio($tabla, $orden, $campo, $criterio, $valor){
        include("conexion.php");
    
		if($campo != "no" && $criterio != "no" && $valor != "" && $orden != "no"){
			$sentencia = "SELECT * FROM $tabla WHERE $campo $criterio '$valor' ORDER BY $orden";
		}else if($campo == "no" && $criterio == "no" && $valor == "" && $orden == "no"){
            $sentencia = "SELECT * FROM $tabla";
        }else if($campo == "no" || $criterio == "no" && $orden != "no"){
			$sentencia = "SELECT * FROM $tabla ORDER BY $orden";
		}else if($campo != "no" && $criterio != "no" && $valor != "" && $orden == "no"){
			$sentencia = "SELECT * FROM $tabla WHERE $campo $criterio '$valor'";
		}
		echo $sentencia;
        $SQL = "UPDATE criterio SET sentencia = ? WHERE tabla = ?";
        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$sentencia, $tabla]);

        return $preparado;
    }
}