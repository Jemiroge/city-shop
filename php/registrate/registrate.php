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
			<label for="nombre1">Primer Nombre</label><input type="text" id="nombre1" name="nombre1"class="form-control">
			<label for="nombre2">Segundo Nombre</label><input type="text" id="nombre2" name="nombre2"class="form-control">
			<label for="apellido1">Primer Apellido</label><input type="text" id="apellido1" name="apellido1"class="form-control">
			<label for="apellido2">Segundo Apellido</label><input type="text" id="apellido2" name="apellido2"class="form-control">
			
			</div>

			<div class="col-4 float-left">

			
			<label for="cargo">Cargo</label><input type="text" id="cargo" name="cargo" class="form-control">
			<label for="cedula">Cedula</label><input type="number" id="cedula" name="cedula" class="form-control">
			<label for="celular">Celular</label><input type="text" id="celular" name="celular" class="form-control">
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
			<label for="email">Email</label><input type="email" id="email" name="email" class="form-control">

		
			<label for="usuario">Usuario</label><input type="text" id="usuario" name="usuario" class="form-control">
			<label for="contrasena">Contraseña</label><input type="password" id="contrasena" name="contrasena"class="form-control">
			<label for="confirmar1">Confirmar Contraseña</label><input type="password" id="confirmar1" name="confirmar1"class="form-control">
			</div>	
			

			<div>
			<br><br><br><br><br><br><br>

			<!-- <textarea name="descripcion" id="" cols="100" rows="10"></textarea> -->
			
			
			<div class="col-8"><input type="submit" value="enviar" onclick=this.form.action="registratebase.php" class="float-right btn btn-success col-6"></div>

		    

		</form>
	</header>

  	<footer id="m" class="container-fluid borderes badge badge-success" style="height:250px;">
<div class="col-3 float-left">
			<ul>
				<h5>Ubicación</h5>
				<br><br>
				<a href="https://goo.gl/maps/ZDixKWBZW3XSVxqF6" title="" target="_blank"><li>Ubicacion</li></a>
				<br><br><br><br><br>
				<a href="" title="" target="_blank" data-toggle="modal" data-target="#myModal"><li>Telefono</li></a>
				<br><br><br><br><br>
				<a href="" title="" target="_blank" data-toggle="modal" data-target="#myModal"><li>Correo Electronico</li></a>
				<br><br><br><br><br>
			</ul>
		</div>

		<div class="col-3 float-left">
			<ul>
				<h5>Sigueme en :</h5>
				<br>
				<a href="www.facebook.com/sitioexpress" title="" target="_blank"><li>&nbsp;&nbsp;<img src="../../img/index/footer/Facebook1.ico" style="width:50px;height:50px;"><label>Facebook</label></li></a>
				
				<a href="" title="" target="_blank"><li><img src="../../img/index/footer/twitter1.ico" style="width:50px;height:50px;"><label>twitter</label></li></a>
				
				<a href="" title="" target="_blank"><li><img src="../../img/index/footer/youtube1.ico" style="width:50px;height:50px;"><label>youtube</label></li></a>
				
				<a href="" title="" target="_blank"><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../../img/index/footer/Instagram.ico" style="width:50px;height:50px;"><label>instagram</label></li></a>
				
			</ul>
		</div>

		<div class="col-3 float-left">
			<ul>
				<h5>Mas...</h5>
				<br><br>
				<a href="" title="" target="_blank"><li>Preguntas Frecuentes</li></a>
				<br><br><br><br><br>
				<a href="" title="" target="_blank"><li>Como inscribirte</li></a>
				<br><br><br><br><br>
				<a href="" title="" target="_blank"><li>Proceso de seleccion</li></a>
				<br><br><br><br><br>
			</ul>
		</div>

		<div class="col-3 float-left">
			<ul>
				<h5>Pidelo Por</h5>
				<br><br>
				<a href="" title="" target="_blank"><li>Rappy</li></a>
				<br><br><br><br><br>
				<a href="" title="" target="_blank"><li>Picap</li></a>
				<br><br><br><br><br>
				<a href="" title="" target="_blank"><li>Uber Eat</li></a>
				<br><br><br><br><br>
			</ul>
		</div>
		</footer>

	
</body>
</html>
