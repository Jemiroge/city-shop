
<?php
include("../conexion/conexion.php");
session_start();
// $conexion=mysqli_connect("localhost","root","","citygreen");
$usuario= (isset($_POST['usuario'])    ? $_POST['usuario']    : '');
$contrasena= (isset($_POST['contrasena'])    ? $_POST['contrasena']    : '');

$busqueda ="SELECT * FROM usuarios where usuario ='$usuario' and contrasena ='$contrasena'";
$result = mysqli_query($conexion,$busqueda);



$numero = mysqli_num_rows($result);

   
$_SESSION['logueado']=$usuario;

//  echo $usuario;
//  echo "<br>";
//  echo $contrasena;
 
//  echo "<br>";
// echo $busqueda;
// echo $numero;






if ($numero>0) 
  {
       
    echo "<script>alert('BIENVENIDO'); window.location='../almacenProductos/almacenProductos.php'</script>";   
     		
 
  }
  else
  { 	   
  	   
    echo "<script>alert('datos insertados iconrrectamentamente'); window.location='login.php'</script>"; 
		   
  }

 	


?>