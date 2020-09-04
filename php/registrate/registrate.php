
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registrate</title>
	<link rel="stylesheet" href="../../css/registrate/registrate.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/> -->

    <script src="../../js/registrate/registrate.js"></script>

  </head>

<body class="container-fluid">



		
	<header class="bordes">

		<div class="padding badge badge-success"><h3 class="display-5">Ciudad Verde Shop</h3></div>
		<a href="../../index.html"><div class="padding badge badge-success btn btn-success float-right"><h3 class="display-5">Volver</h3></div></a> 
		<br><br>

		<div class="col-12 tamaño badge badge-success">
			<h1 >Registro Usuario</h1>
		</div>

			<br><br><br>
		<div  class="container-fluid">
			<marquee  loop="0" style="background:#28a745;color:white;font-size:25px;border-radius:2%;">
			<div class="col-1 float-left"></div>
			 <h1 class="badge badge-success">Diligencia tus datos la Creación del usuario</h1></marquee>
		 </div>
		
		
      <form action="registratebase.php" method="post">

                  
    	

			<div class="col-4 float-left">
		    <br>		
			<label for="nombre1">Primer Nombre</label><input required type="text" id="nombre1" name="nombre1"class="form-control">
			<label for="nombre2">Segundo Nombre</label><input required type="text" id="nombre2" name="nombre2"class="form-control">
			<label for="apellido1">Primer Apellido</label><input required type="text" id="apellido1" name="apellido1"class="form-control">
			<label for="apellido2">Segundo Apellido</label><input required type="text" id="apellido2" name="apellido2"class="form-control">
			
			</div>

			<div class="col-4 float-left">
             <br>

            <label for="tipo">Tipo</label>
			<select name="tipo" class="form-control" value="" class="col-6">
			 <option value="" selected></option>
			  <option value="Cedula">Cedula</option> 
			  <option value="tarjeta identidad">Tarjeta identidad</option>
			  <option value="cedula extrangeria">Cedula extrangeria</option>
			  <option value="permiso especial">Permiso especial</option>
			  
			</select>
			
			<label for="documento">Documento</label><input  required type="text" id="documento" name="documento" class="form-control" onchange="subirusuario()" pattern=".{8,}" minlength="5" maxlength="10">

			
 
			<label for="celular">Celular</label><input required type="text" id="celular" name="celular" class="form-control">
			<label for="email">Email</label><input required type="email" id="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
			<label for="genero">Genero</label>
			<select name="genero" class="form-control" value="">
			 <option value="" selected></option>
			  <option value="Masculino">Masculino</option> 
			  <option value="Femenino" >Femenino</option>
			  <option value="Indefinido">Undefined</option>
			</select>
			
						
			<!-- <label for="nombre">fecha</label><input required type="datatime" id="nombre" class="form-control"> -->
			<!-- <label for="nombre">color</label><input required type="color" id="nombre" class="form-control"> -->
			
			<br>
			<!-- <label for="recordar" class="form-check-label"><input required type="checkbox" class="form-check-input required"></label> -->
			</div>

			<div>
			
			<label for="Intereses">Intereses</label>
			<br>	
			<label for="Panaderia">(Panaderia)<input  type="checkbox" value="Panaderia" id="Panaderia" name="Panaderia"class="form-control"></label>&nbsp;
			<label for="Tecnologia">(Tecnologia)<input  type="checkbox" value="Tecnologia" id="Tecnologia" name="Tecnologia"class="form-control"></label>&nbsp;
			<label for="Restaurante">(Restaurante)<input  type="checkbox" value="Restaurante" id="Restaurante" name="Restaurante"class="form-control"></label>&nbsp;
			<label for="Licores">(licores)<input  type="checkbox" value="Licores" id="Licores" name="Licores"class="form-control"></label>&nbsp;
			<label for="Asaderos">(Asaderos)<input  type="checkbox" value="Asaderos" id="Asaderos" name="Asaderos"class="form-control"></label>&nbsp;
            </div>	

			<div class="col-4 float-right">
			

		
			<label for="usuario">Usuario</label><input required type="text" id="usuario" name="usuario" class="form-control" readonly="readonly">
			<label for="contrasena">Contraseña</label><input required type="password" id="contrasena" name="contrasena"class="form-control" pattern=".{8,}" title="contraseña mayor a 8 caracteres">
			
			<label for="confirmar1">Confirmar Contraseña</label><input required type="password" id="confirmar1" name="confirmar1"class="form-control" pattern=".{8,}" title="contraseña mayor a 8 caracteres" onchange="verificar();subirusuario();">
             
					
			</div>	
			

			
			<!-- <textarea name="descripcion" id="" cols="100" rows="10"></textarea> -->
			
			
			<div class="col-8"><input type="submit" value="enviar" onclick=this.form.action="registratebase.php" class="float-right btn btn-success col-6"></div>

		    

		</form>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

  	<!-- //footer -->
				<?php
				include("../footer/footer.php")
				?>

	
</body>
</html>
