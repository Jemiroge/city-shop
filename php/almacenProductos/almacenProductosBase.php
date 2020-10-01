<?php

include("../conexion/conexion.php");

       date_default_timezone_set ('America/Bogota'); setlocale(LC_ALL,"es_ES");
       //$fecha=strftime("Hoy es %A día %d de %B hora: %H :%M :%S"  );
      $fecha=strftime("creado día %d mes %m año %Y hora: %H :%M :%S");
       
        //echo '<script type="text/javascript">alert("datos enviados a la base ok")</script>'
      $fecha1=strftime("%Y-%m-%d");
      $hora=strftime("%H:%M:%S");

      session_start();

        
				 $identificativo="almProduc-";
				 $numRegistro=850000003;
				 $usuario =$_SESSION['logueado'];
			   	 $nit= (isset($_POST['nit'])    ? $_POST['nit']    : '');
			     $producto= (isset($_POST['producto'])    ? $_POST['producto']    : '');
			     $valor= (isset($_POST['valor'])    ? $_POST['valor']    : '');
			     $iva= (isset($_POST['iva'])    ? $_POST['iva']    : '');
			     $tiva= (isset($_POST['tiva'])    ? $_POST['tiva']    : '');
			     $descuento= (isset($_POST['descuento'])    ? $_POST['descuento']    : '');
			     $total= (isset($_POST['total'])    ? $_POST['total']    : '');	        

             //cuentas
                $iva=19;              
                $tiva=$valor*$iva/100+$valor;
                $total=$tiva-$tiva*$descuento/100;
             
		     $insert1="INSERT INTO registroproductos(numRegistro,usuario,nit,producto,valor,iva,tiva,descuento,total) VALUES ('$numRegistro','$usuario','$nit','$producto','$valor','$iva','$tiva','$descuento','$total')";

		     $mensaje1="<script>alert('ingreso exitoso');'</script>";

		           
					$mensaje1 = "<script>alert('documento : no existe en la base de datos puede continuar');'</script>";
				    $Errord = "Error: " . $insert1 . "<br>" . mysqli_error($conexion)."<script>alert('datos duplicados : revise sus campos documento');</script>" . "<script type='text/javascript'>"."window.history.back(0)"."</script>";

				  if (mysqli_query($conexion,$insert1)) 
				  {       
				    echo $mensaje1; 
				   echo "<script type='text/javascript'>"."window.history.back(0)"."</script>";
				  }
				  else
				  { 
				  	echo $Errord; 
				  		
				   }

			?>
