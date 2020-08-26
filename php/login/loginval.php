
<?php
include("../conexion/conexion.php");

// $conexion=mysqli_connect("localhost","root","","citygreen");
$usuario= (isset($_POST['usuario'])    ? $_POST['usuario']    : '');
$contrasena= (isset($_POST['contrasena'])    ? $_POST['contrasena']    : '');

$busqueda ="SELECT * FROM usuario where usuario ='$usuario' and contrasena ='$contrasena'";
$result = mysqli_query($conexion,$busqueda);



$numero = mysqli_num_rows($result);

 echo $usuario;
 echo "<br>";
 echo $contrasena;
 
 echo "<br>";
echo $busqueda;
echo $numero;






if ($numero>0) 
  {
           
           session_start(); $_SESSION['usuario'];
 		   echo '<script type="text/javascript">alert("BIENVENIDO")</script>';
		   echo "<script type='text/javascript'>";
		   header("location:../almacenProductos/almacenProductos.php");
		   echo "</script>";
		   

 		
 
  }else{ 	   
  	   echo header("location:login.php");
  	  
		   
  }
 	


?>