<?php 
include("conexion.php");

class sesion{

    private $usuario, $clave;

    public function __construct(){

	}
    //setters
    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }
    public function setClave($clave){
        $this->clave = $clave;
    }
    //getters
    public function getUsuario(){
		return $this->usuario;
	}
    public function getClave(){
		return $this->clave;
	}
    //VERIFICAR
    public function verificarUsuario($usuario, $clave){
        include ("conexion.php");

        $SQL = "SELECT * FROM usuario WHERE nombre = ? AND clave = ?";

        $preparado = $conexion->prepare($SQL);
        $preparado->execute([$usuario, $clave]);
        $resultados = $preparado->fetchAll(PDO::FETCH_ASSOC); 

        return $resultados;
    }

    public function respaldo(){
        include ("conexion.php");

        // Ruta para guardar el respaldo
        date_default_timezone_set('America/Caracas');
        $fecha = date('d-m-Y');
        $hora = date("h-i-s A");
        $nombreArchivo = "Respaldo/Respaldo[$fecha][$hora].sql"; 

        // Obtener lista de tablas
        $stmt = $conexion->query("SHOW TABLES");
        $tables = $stmt->fetchAll(PDO::FETCH_COLUMN);

        // Crear archivo de respaldo
      
        $handle = fopen($nombreArchivo, 'w');

        // Recorrer las tablas y respaldar la estructura y los datos
        foreach ($tables as $table) {
            // Obtener la estructura de la tabla
            $stmt = $conexion->query("SHOW CREATE TABLE $table");
            $createTableSQL = $stmt->fetch(PDO::FETCH_ASSOC)['Create Table'];

            // Escribir la estructura en el archivo
            fwrite($handle, "-- Estructura de la tabla $table\n");
            fwrite($handle, $createTableSQL . ";\n\n");

            // Obtener los datos de la tabla
            $stmt = $conexion->query("SELECT * FROM $table");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $line = "INSERT INTO $table VALUES (";
                foreach ($row as $value) {
                    $line .= $conexion->quote($value) . ', ';
                }
                $line = rtrim($line, ', ') . ");\n";
                fwrite($handle, $line);
            }
        }

        fclose($handle);
    }
    //Vaciar bitacora
    public function vaciarBitacora(){
        include ("conexion.php");

        $SQL = "TRUNCATE TABLE bitacora";

        $preparado = $conexion->prepare($SQL);
        $preparado->execute();
    }
    
}
?>