<?php

include("../conexion/conexion.php");

       date_default_timezone_set ('America/Bogota'); setlocale(LC_ALL,"es_ES");
       //$fecha=strftime("Hoy es %A día %d de %B hora: %H :%M :%S"  );
      $fecha=strftime("creado día %d mes %m año %Y hora: %H :%M :%S");
       
        //echo '<script type="text/javascript">alert("datos enviados a la base ok")</script>'
      $fecha1=strftime("%Y-%m-%d");
      $hora=strftime("%H:%M:%S");


        $tabla ="registro";
        $identificativo="conti-"
        $numContrato=(1000000001);
    		$nombretienda= (isset($_POST['nombretienda'])    ? $_POST['nombretienda']    : '');
    		$rut= (isset($_POST['rut'])    ? $_POST['rut']    : '');
        $ciudad= (isset($_POST['ciudad'])    ? $_POST['ciudad']    : '');
        $direccion1= (isset($_POST['direccion1'])    ? $_POST['direccion1']    : '');
        $usuarioRegistro1= (isset($_POST['usuarioRegistro1'])    ? $_POST['usuarioRegistro1']    : '');
        $celularEmpresa1= (isset($_POST['celularEmpresa1'])    ? $_POST['celularEmpresa1']    : '');
        $emailEmpresa1= (isset($_POST['emailEmpresa1'])    ? $_POST['emailEmpresa1']    : '');
        $Contrasena= (isset($_POST['Contrasena'])    ? $_POST['Contrasena']    : '');
        $confirmarContrasena= (isset($_POST['confirmarContrasena'])    ? $_POST['confirmarContrasena']    : '');

        $ultimo ="SELECT * FROM numerocontrato1 ORDER BY idRegistro desc";
    		$resulta = mysqli_query($conexion,$ultimo);
    		$fila = mysqli_fetch_row($resulta);
    		$mostrar=$fila[0]; 
    		$numContrato=$mostrar+$numContrato;
    		$numconindent=$numContrato+$identificativo;



    		$insertar1="INSERT INTO registroTienda (idTienda,tabla,nombreTienda,rut,numContrato1,ciudad,direccion) VALUES ('$idTienda','$tabla','$nombreTienda','$rut','$numContrato1','$ciudad','$direccion')";

    		$insertar2="INSERT INTO usuariosCreeSutienda (tabla,usuarioRegistro1,rut,contrasena,confirmar1) VALUES ($tabla','$usuarioRegistro1','$rut','$contrasena','$confirmar1')";

    		$insertar3="INSERT INTO fechaTienda (tabla,rut,fechaDeRegistro,hora,fecha) VALUES ($tabla','$rut','$fechaDeRegistro','$hora','$fecha')";
          

          $mensaje1 = "<script>alert('mensaje1');'</script>";
           $mensaje2 = "<script>alert('mensaje2');'</script>";
            $mensaje3 = "<script>alert('mensaje3');'</script>";
    		

      if (mysqli_query($conexion, $insertar1)) 
      {       
        echo "error"  
      }
      else
      { 
      	// $men1= mysqli_query($conexion, $insertar1);
      	 $mensaje1
      }


      if (mysqli_query($conexion, $insertar2)) 
      {       
        echo "error"  
      }
      else
      { 
      	// $men1= mysqli_query($conexion, $insertar2);
      	 $mensaje2
      }


      if (mysqli_query($conexion, $insertar3)) 
      {       
        echo "error"  
      }
      else
      { 
      	// $men1= mysqli_query($conexion, $insertar3);
      	 $mensaje3
      }


    ?>
