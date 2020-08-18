<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crear Tienda</title>
	<link rel="stylesheet" href="../../css/crearTienda/crearTienda.css">
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
			<div  class="col-6 tamaño badge badge-warning"><h1>Registro Tienda</h1></div><div class="col-6 tamaño badge badge-success"><h1>Registro Empresa</h1></div>
		</div>

			<br><br>
		<div  class="container-fluid">
			<marquee  loop="0" style="background:#28a745;color:white;font-size:25px;border-radius:2%;">
			<div class="col-1 float-left"></div>
			 <h1 class="badge badge-success">Presiona el tipo de comerdsio que usas y diligencia los datos</h1></marquee>
		 </div>
		
		<form action="proceso.php" method="post">

		<div class="col-6 float-left">
           <label for="razon">Rázon social</label><input type="text" id="razon" class="form-control">
           <label for="nit">Nit</label><input type="number" id="nit" class="form-control">
           <label for="direccion">Direccion</label><input type="text" id="direccion" class="form-control">
           <label for="telefono">Telefono</label><input type="number" id="telefono" class="form-control">
           
         </div>


          
				

		<div class="col-6 float-left">
			 
			 <label for="representante">Representante legal</label><input type="text" id="representante" class="form-control">
			 <label for="cedula">Cedula</label><input type="number" id="cedula" class="form-control">
			 <label for="email">Email</label><input type="email" id="email" class="form-control">
			 <label for="celular">Celular</label><input type="number" id="celular" class="form-control">

		</div>

		<div>
			<br><br><br><br><br><br><br><br><br><br><br><br><hr>
		</div>
			
			

			
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
