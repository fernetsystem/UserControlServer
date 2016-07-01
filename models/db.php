<?php 
class Conectar
{
    public static function conexion(){
	$conexion = new mysqli("localhost","root","","users_control_server");
	$conexion->query("SET NAMES 'utf8'");
	return $conexion;
    }	
}
?>