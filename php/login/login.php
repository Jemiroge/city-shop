
<?php session_start(); session_unset(); session_unset(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
	<link rel="stylesheet" href="../../css/login/login.css" type="text/css" >
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" /> -->
</head>


<body background="../../img/plogueo/1356.jpg" class="jumbotron fondo container-fluid col-5">

	 <form action="../../index.html">
		 <button type="submit" onclick=this.form.action="../../index.html" class="padding badge badge-success btn btn-success float-right col-6">volver</button>
         </form>

	<br><br>	
	<div>
		<div class="padding badge badge-success col-12"><h3 class="display-6">Ciudad Verde Shop</h3></div>
	 
	 <br><br>

	   <form  method="post" action="loginval.php">
		    <h1 class="badge badge-success display-1 container-fluid">Logueate a </h1>	
		    <br><br>
			<input class="trans" type="text" placeholder="Usuario" id="usuario" name="usuario">
			<br><br>
			<input class="trans"  type="password" placeholder="Contraseña" id="contrasena" name="contrasena">
			<br><br>
			
			<button type="submit" class="trans btn btn-success" onclick=this.form.action="loginval.php">Ingresar</button>		
			<br>
			<br>

			<?php include ("../conexion/conexion.php");
						/*session_start();
						session_id();
						session_name()
						session_register(name);
						session_unset();
						session_destroy();*/
						// session_start();
						// $_SESSION['logueado']= "perro";

						
						
						?>

	   </form>

	   <a href="../registrate/registrate.php" class="blanco">Olvide mi contraseña</a>
		<a href="../registrate/registrate.php" class="blanco">¿Aun no te has registrado? ¡registrate!</a>
   </div>

  <!-- imagenverde -->
   <a href="https://www.freepik.es/fotos/fondo" target="_blank">Foto de Fondo creado por user3802032 - www.freepik.es</a>

<!-- imagen cascada -->
   <a href='https://www.freepik.es/fotos/fondo'>Foto de Fondo creado por 4045 - www.freepik.es</a>
        
	
</body>
</html>