<?php

include("../conexion/conexion.php");

       date_default_timezone_set ('America/Bogota'); setlocale(LC_ALL,"es_ES");
       //$fecha=strftime("Hoy es %A día %d de %B hora: %H :%M :%S"  );
      $fecha=strftime("creado día %d mes %m año %Y hora: %H :%M :%S");
       
        //echo '<script type="text/javascript">alert("datos enviados a la base ok")</script>'
      $fecha1=strftime("mday/mon/year");
      $contenido="$fecha1";
      echo $contenido;

      $hoy = getdate();
      print_r($hoy);
      

//tabla registro
$tabla ="registro";
$cedula= (isset($_POST['cedula'])    ? $_POST['cedula']    : '');
$nombre1= (isset($_POST['nombre1'])    ? $_POST['nombre1']    : '');
$nombre2= (isset($_POST['nombre2'])    ? $_POST['nombre2']    : '');
$apellido1= (isset($_POST['apellido1'])    ? $_POST['apellido1']    : '');
$apellido2= (isset($_POST['apellido2'])    ? $_POST['apellido2']    : '');
$cargo= (isset($_POST['cargo'])    ? $_POST['cargo']    : '');
$celular= (isset($_POST['celular'])    ? $_POST['celular']    : '');
$genero= (isset($_POST['genero'])    ? $_POST['genero']    : '');
$email= (isset($_POST['email'])    ? $_POST['email']    : '');


//tabla interes
$Panaderia= (isset($_POST['Panaderia'])    ? $_POST['Panaderia']    : '');
$Tecnologia= (isset($_POST['Tecnologia'])    ? $_POST['Tecnologia']    : '');
$Restaurante= (isset($_POST['Restaurante'])    ? $_POST['Restaurante']    : '');
$Licores= (isset($_POST['Licores'])    ? $_POST['Licores']    : '');
$Asaderos= (isset($_POST['Asaderos'])    ? $_POST['Asaderos']    : '');


//tabla usuario
$usuario= (isset($_POST['usuario'])    ? $_POST['usuario']    : '');
$contrasena= (isset($_POST['contrasena'])    ? $_POST['contrasena']    : '');
$confirmar1= (isset($_POST['confirmar1'])    ? $_POST['confirmar1']    : '');



$insertar1="INSERT INTO registro (tabla,cedula,nombre1,nombre2,apellido1,apellido2,genero) VALUES ('$tabla','$cedula','$nombre1','$nombre2','$apellido1','$apellido2','$genero')";

$insertar2="INSERT INTO celular (tabla,usuario,celular) VALUES ('$tabla','$usuario','$celular')";

$insertar3="INSERT INTO email (tabla,usuario,email) VALUES ('$tabla','$usuario','$email')";

$insertar4="INSERT INTO intereses (usuario,interes1,interes2,interes3,interes4,interes5) VALUES ('$usuario','$Panaderia','$Tecnologia','$Restaurante','$Licores','$Asaderos')"; 

$insertar5="INSERT INTO fecha (tabla,usuario,fecha_de_registro) VALUES ('$tabla','$usuario','$hoy')";

$insertar6="INSERT INTO usuarios (tabla,usuario,contrasena,confirmar1) VALUES ('$tabla','$usuario','$contrasena','$confirmar1')";  











if (mysqli_query($conexion, $insertar1)) {

      echo "<script>alert('datos insertados correctamente'); window.location='registrate.php'</script>";
      
} else {
      echo "Error: " . $insertar1 . "<br>" . mysqli_error($conexion);
}



if (mysqli_query($conexion, $insertar2)) {

      echo "<script>alert('datos insertados correctamente'); window.location='registrate.php'</script>";
      
} else {
      echo "Error: " . $insertar2 . "<br>" . mysqli_error($conexion);
}



if (mysqli_query($conexion, $insertar3)) {

      echo "<script>alert('datos insertados correctamente'); window.location='registrate.php'</script>";
      
} else {
      echo "Error: " . $insertar3 . "<br>" . mysqli_error($conexion);
}




if (mysqli_query($conexion, $insertar4)) {

      echo "<script>alert('datos insertados correctamente'); window.location='registrate.php'</script>";
      
} else {
      echo "Error: " . $insertar4 . "<br>" . mysqli_error($conexion);
}



if (mysqli_query($conexion, $insertar5)) {

      echo "<script>alert('datos insertados correctamente'); window.location='registrate.php'</script>";
      
} else {
      echo "Error: " . $insertar5 . "<br>" . mysqli_error($conexion);
}



if (mysqli_query($conexion, $insertar6)) {
	
    echo "<script>alert('datos insertados correctamente'); window.location='registrate.php'</script>";
} else {
      echo "Error: " . $insertar6 . "<br>" . mysqli_error($conexion);
      
}
//mysqli_close($conexion);
mysqli_close($conexion);


// echo '<script type="text/javascript">alert("datos insertados correctamente")</script>';

// echo "<script>alert('Mensaje'); window.location='registrate.php'</script>";



 // echo header("location:registrate.php");
 

// $insertar="INSERT INTO registro(Idregistro,cedula,pnombre,snombre,papellido,sapellido,cargo,celular,genero,email) VALUES ('$cedula',$nombre1','$nombre2','$apellido1','$apellido2','$cargo','$celular','$genero',$email')";






// $resultado =$conexion->query($insertar); 

// echo '<script type="text/javascript">alert("datos insertados correctamente")</script>';

// }


?>