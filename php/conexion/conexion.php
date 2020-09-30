<?php 
   
    $servidor ="localhost";
    $nombreusuario="root";
    $password="";
    $db="citygreen";
    $conexion = new mysqli($servidor,$nombreusuario,$password, $db);
    if($conexion->connect_error){
    	die("conexion fallida:". $conexion->connect_error);
    }

    /*$servidor ="localhost";
    $nombreusuario="id13902536_root";
    $password="Colombia2020*-+";
    $db="id13902536_citygreen";
    $conexion = new mysqli($servidor,$nombreusuario,$password, $db);
    if($conexion->connect_error){
    	die("conexion fallida:". $conexion->connect_error);
    }*/

?>