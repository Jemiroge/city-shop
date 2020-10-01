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
				 $numRegistro=850000000;
				 $usuario =$_SESSION['logueado'];
			   	 $nit= (isset($_POST['nit'])    ? $_POST['nit']    : '');
			     $producto= (isset($_POST['producto'])    ? $_POST['producto']    : '');
			     $descripcion= (isset($_POST['descripcion'])    ? $_POST['descripcion']    : '');
			     $embalaje= (isset($_POST['embalaje'])    ? $_POST['embalaje']    : '');
			     $valor= (isset($_POST['valor'])    ? $_POST['valor']    : '');
			     $iva= (isset($_POST['iva'])    ? $_POST['iva']    : '');
			     $tiva= (isset($_POST['tiva'])    ? $_POST['tiva']    : '');
			     $descuento= (isset($_POST['descuento'])    ? $_POST['descuento']    : '');
			     $total= (isset($_POST['total'])    ? $_POST['total']    : '');	        

             //cuentas
                $iva=19;              
                $tiva=$valor*$iva/100+$valor;
                $total=$tiva-$tiva*$descuento/100;

                $ultimo ="SELECT * FROM registroproductos ORDER BY idRegistro desc";
				$resulta = mysqli_query($conexion,$ultimo);
				$fila = mysqli_fetch_row($resulta);
				$mostrar=$fila[0]; 
				$numRegistro=$mostrar+$numRegistro;
			// imagen
			    $seleccionarArchivosname=$_FILES['seleccionArchivos']['name'];
			    $seleccionarArchivostmp=$_FILES['seleccionArchivos']['tmp_name'];
			    $seleccionarArchivossize=$_FILES['seleccionArchivos']['size'];

			    $ruta="files";			    
			    mkdir($ruta."/".$usuario, 0777, true);
                $ruta=$ruta."/".$usuario."/".$seleccionarArchivosname;
               if(!file_exists($ruta)){	                    			    
			        move_uploaded_file($seleccionarArchivostmp, $ruta);
	             
                  }else{          
			   		    	
                   echo "<script>alert('ya existe el archivo seleccionado intente con otro');</script>"."<script type='text/javascript'>"."window.history.back(0)"."</script>";
                   	die;
                   	  }
                   	 


				//$busqueda= "SELECT usuario FROM registro WHERE edad = 30";

				
					             
		     $insert1="INSERT INTO registroproductos(numRegistro,usuario,nit,producto,descripcion,embalaje,valor,iva,tiva,descuento,total) VALUES ('$numRegistro','$usuario','$nit','$producto','$descripcion','$embalaje','$valor','$iva','$tiva','$descuento','$total')";

		     $insert2="INSERT INTO insertimg(numRegistro,producto,seleccionarArchivosname,seleccionarArchivostmp,seleccionarArchivossize,ruta,creado)VALUES('$numRegistro','$producto','$seleccionarArchivosname','$seleccionarArchivostmp','$seleccionarArchivossize','$ruta','$fecha1')";

		  
		     ///////////////////////////////////////////////////////////////////////

		     //$id_insert =$mysqli->idRegistro;


		    // if($_FILES["seleccionArchivos"]["error"]>0){
		    // echo "Error al cargar archivo";	
		    // }
		    // else{
		    // 	$permitidos =array("image/gif","image/png","image/jpg","application/pdf");
		    // 	$limite_kb= 200;
                
      //           //bUSCAR DENTRO DEL ARREGLO
		    // 	if(in_array($_FILES["seleccionArchivos"] ["type"],$permitidos) && $_FILES["seleccionArchivos"] ["size"]<= $limite_kb *1024){

		    // 		$ruta='files/'.$idRegistro.'/';
		    // 		$archivo =$ruta.$_FILES["seleccionArchivos"] ["name"];
      //               if(!file_exists($ruta)){
      //               	mkdir($ruta);
      //                 }

	     //                  if(!file_exists($archivo)){
	     //                  	$resultado =@move_uploaded_file($_FILES["seleccionArchivos"] ["tmp_name"],$archivo);
	     //                	}   
      //               	  else{
      //               	 	echo "archivo ya existe";
      //               	     }

		    //                 	 if($resultado){
		    //                 	 	echo "archivo guardado";
		    //                 	 } else{
		    //                 	 	echo "Error al guardar el archivo";
		    //                 	 }
		    // 	}else{
		    // 		echo"archivo no permitido o excede el tamaño";
		    // 	}
		    // }
		     


		     //////////////////////////////////////////////////////////////////////

		     $mensaje1="<script>alert('ingreso exitoso');'</script>";

		           
					$mensaje1 = "<script>alert('documento : no existe en la base de datos puede continuar');'</script>";
				    $Errord = "Error: " . $insert1 . "<br>" . mysqli_error($conexion)."<script>alert('datos errados : revise sus campos');</script>" . "<script type='text/javascript'>"."window.history.back(0)"."</script>";

				  if (mysqli_query($conexion,$insert1)) 
				  {       
				    echo $mensaje1; 
				   echo "<script type='text/javascript'>"."window.history.back(0)"."</script>";
				  }
				  else
				  { 
				  	echo $Errord; 
				  		
				   }



				   if (mysqli_query($conexion,$insert2)) 
				  {       
				    echo $mensaje1; 
				   echo "<script type='text/javascript'>"."window.history.back(0)"."</script>";
				  }
				  else
				  { 
				  	echo $Errord; 
				  		
				   }

			?>
