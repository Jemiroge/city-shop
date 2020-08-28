<?php

include("../conexion/conexion.php");

//tabla registro
$cedula= (isset($_POST['cedula'])    ? $_POST['cedula']    : '');
$nombre1= (isset($_POST['nombre1'])    ? $_POST['nombre1']    : '');
$nombre2= (isset($_POST['nombre2'])    ? $_POST['nombre2']    : '');
$apellido1= (isset($_POST['apellido1'])    ? $_POST['apellido1']    : '');
$apellido2= (isset($_POST['apellido2'])    ? $_POST['apellido2']    : '');
$cargo= (isset($_POST['cargo'])    ? $_POST['cargo']    : '');
$celular= (isset($_POST['celular'])    ? $_POST['celular']    : '');
$genero= (isset($_POST['genero'])    ? $_POST['genero']    : '');
$email= (isset($_POST['email'])    ? $_POST['email']    : '');

//tabla usuario
$usuario= (isset($_POST['usuario'])    ? $_POST['usuario']    : '');
$contrasena= (isset($_POST['contrasena'])    ? $_POST['contrasena']    : '');
$confirmar1= (isset($_POST['confirmar1'])    ? $_POST['confirmar1']    : '');



$insertar="INSERT INTO registro (cedula,nombre1,nombre2,apellido1,apellido2,cargo,celular,genero,email) VALUES 
                 ('$cedula','$nombre1','$nombre2','$apellido1','$apellido2','$cargo','$celular','$genero','$email')";

$insertar1="INSERT INTO usuario (usuario,contrasena,confirmar1) VALUES ('$usuario','$contrasena','$confirmar1')";                 

if (mysqli_query($conexion, $insertar)) {
	
    echo "<script>alert('datos insertados correctamente'); window.location='registrate.php'</script>";
} else {
      echo "Error: " . $insertar . "<br>" . mysqli_error($conexion);
      
}
//mysqli_close($conexion);





if (mysqli_query($conexion, $insertar1)) {

      echo "<script>alert('datos insertados correctamente'); window.location='registrate.php'</script>";
      
} else {
      echo "Error: " . $insertar1 . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);


// echo '<script type="text/javascript">alert("datos insertados correctamente")</script>';

// echo "<script>alert('Mensaje'); window.location='registrate.php'</script>";



 // echo header("location:registrate.php");
 

// $insertar="INSERT INTO registro(Idregistro,cedula,pnombre,snombre,papellido,sapellido,cargo,celular,genero,email) VALUES ('$cedula',$nombre1','$nombre2','$apellido1','$apellido2','$cargo','$celular','$genero',$email')";






// $resultado =$conexion->query($insertar); 

// echo '<script type="text/javascript">alert("datos insertados correctamente")</script>';

// }


?>