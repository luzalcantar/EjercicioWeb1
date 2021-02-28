<?php
class Conectar{
    public static function conexion(){
        $conexion=new mysqli("localhost", "root", "", "ejercicioweb1");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>
