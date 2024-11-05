<?php
class Respaldo{
    public function __construct(){

    }
    public function crearRespaldo(){
        // Configuración de la base de datos
 include ("conexion.php");
 // Listado de tablas en el orden deseado
 $pdo=$conexion;
 $tables = [
    'municipio',
    'lugar',
    'seccion',
    'institucion',
    'estacion',
    'cargo',
    'persona',
    'tipo_persona',
    'usuario',
    'privilegio',
    'marca',
    'aviso',
    'tipo_incidente',
    'modelo',
    'seguro',
    'recurso',
    'vehiculo',
    'mantenimiento',
    'historial',
    'abejas',
    'transito',
    'incendio',
    'bitacora',
    'criterio',
    'criterio_persona',
    'efectivo_asignado',
    'estado_cadaver',
    'incendio_vehiculo',
    'levantamineto',
    'recurso_asignado',
    'representacion_institucional',
    'servicios',
    'tipo_incendio',
    'tipo_persona',
    'tipo_incidente',
    'unidad_asignada',
    'vegetacion',
    'vehiculo_incidente'

     // Agrega más tablas en el orden deseado
 ];

 // Nombre del archivo de respaldo
 $backupFile = 'respaldo.sql';
 $handle = fopen($backupFile, 'w+');

 // Agregar instrucción CREATE DATABASE
 $createDatabase = "CREATE DATABASE IF NOT EXISTS `$baseDatos`;\n";
 $useDatabase = "USE `$baseDatos`;\n";
 fwrite($handle, $createDatabase);
 fwrite($handle, $useDatabase);


 foreach ($tables as $table) {
     // Generar el esquema de la tabla
     $stmt = $pdo->query("SHOW CREATE TABLE $table");
     $row = $stmt->fetch(PDO::FETCH_ASSOC);
     fwrite($handle, "\n\n" . $row['Create Table'] . ";\n\n");

     // Volcar los datos de la tabla
     $stmt = $pdo->query("SELECT * FROM $table");
     while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
         $columns = array_keys($row);
         $columns = array_map(function ($column) {
             return "`$column`";
         }, $columns);
         $columns = implode(", ", $columns);

         $values = array_values($row);
         $values = array_map(function ($value) use ($pdo) {
             return $pdo->quote($value);
         }, $values);
         $values = implode(", ", $values);

         $insertStatement = "INSERT INTO `$table` ($columns) VALUES ($values);\n";
         fwrite($handle, $insertStatement);
     }
 }

 fclose($handle);
 echo "Respaldo completado exitosamente.";
    }
}



   

?>
