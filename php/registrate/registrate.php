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

  </head>

<body class="container-fluid">



		
	<header class="bordes">

		<div class="padding badge badge-success"><h3 class="display-5">Ciudad Verde Shop</h3></div> 
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
		
		<form action="proceso.php" method="post">

			<div class="col-4 float-left">
			<label for="nombre1">Primer Nombre</label><input type="text" id="nombre1" class="form-control">
			<label for="nombre2">Segundo Nombre</label><input type="text" id="nombre2" class="form-control">
			<label for="apellido1">Primer Apellido</label><input type="text" id="apellido1" class="form-control">
			<label for="apellido2">Segundo Apellido</label><input type="text" id="apellido2" class="form-control">
			
			</div>

			<div class="col-4 float-left">

			
			<label for="cargo">Cargo</label><input type="text" id="cargo" class="form-control">
			<label for="cedula">Cedula</label><input type="number" id="cedula" class="form-control">
			<label for="celular">Celular</label><input type="number" id="celular" class="form-control">
			<label for="celular">Genero</label>
			<select name="genero" class="form-control" value="">
			 <option value="value1" selected></option>
			  <option value="value2">Masculino</option> 
			  <option value="value3" >Femenino</option>
			  <option value="value4">Undefined</option>
			</select>
			
						
			<!-- <label for="nombre">fecha</label><input type="datatime" id="nombre" class="form-control"> -->
			<!-- <label for="nombre">color</label><input type="color" id="nombre" class="form-control"> -->
			
			<br>
			<!-- <label for="recordar" class="form-check-label"><input type="checkbox" class="form-check-input"></label> -->
			</div>

			<div class="col-4 float-right">
			<label for="email">Email</label><input type="email" id="email" class="form-control">
			<label for="usuario">Usuario</label><input type="text" id="usuario" class="form-control">
			<label for="contraseña">Contraseña</label><input type="password" id="contraseña" class="form-control">
			<label for="confirmar">Confirmar Contraseña</label><input type="password" id="confirmar" class="form-control">
			</div>	
			

			<div>
			<br><br><br><br><br><br><br><br><br><br><br><br><hr>
		    </div>

			<!-- <textarea name="descripcion" id="" cols="100" rows="10"></textarea> -->
			
			
			<div class="col-8"><input type="submit" value="enviar" class="float-right btn btn-success col-6"></div>

		    

		</form>
	</header>

   <br>

	<footer id="m" class="container-fluid borderes  h-200 badge badge-success ">
		<div class="col-3 float-left">
			<ul>
				<h5>Ubicación</h5>
				<br>
				<li>Ubicacion</li>
				<br>
				<li>Telefono</li>
				<br>
				<li>Correo Electronico</li>
				<br>
			</ul>
		</div>

		<div class="col-3 float-left">
			<ul>
				<h5>Redes sociales</h5>
				<br>
				<li>Facebook</li>
				<br>
				<li>twitter</li>
				<br>
				<li>Instagram</li>
				<br>
			</ul>
		</div>

		<div class="col-3 float-left">
			<ul>
				<h5>Mas...</h5>
				<br>
				<li>Preguntas Frecuentes</li>
				<br>
				<li>Como inscribirte</li>
				<br>
				<li>Proceso de seleccion</li>
				<br>
			</ul>
		</div>

		<div class="col-3 float-left">
			<ul>
				<h5>Pidelo Por</h5>
				<br>
				<li>Rappy</li>
				<br>
				<li>Picap</li>
				<br>
				<li>Uber Eat</li>
				<br>
			</ul>
		</div>
		
	</footer>
	
</body>
</html>
