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
    <!-- javascript -->
    <script src="../../js/crearTienda/creartienda.js"></script>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/> -->

  </head>

<body class="container-fluid">



		
	<header class="bordes">

		<div class="padding badge badge-success"><h3 class="display-5">Ciudad Verde Shop</h3></div> 
		<a href="../../index.html"><div class="padding badge badge-success btn btn-success float-right"><h3 class="display-5">Volver</h3></div></a>
		<br><br>

		<div class="col-12 tamaño badge badge-success">
			<div id="hd3" name="hd3" class="col-6 tamaño badge badge-warning btn btn-warning"><h1>Registro Tienda</h1></div><div id="hd4" name="hd4" class="col-6 tamaño badge badge-success btn btn-success"><h1>Registro Empresa</h1></div>
		</div>

			<br><br>
		<div  class="container-fluid">
			<marquee  loop="0" style="background:#28a745;color:white;font-size:25px;border-radius:2%;">
			<div class="col-1 float-left"></div>
			 <h1 class="badge badge-success">Presiona el tipo de comercio que usas y diligencia los datos</h1></marquee>
		 </div>
		

		<!--    empresas  -->
		<form id="f1" name="f1" action="proceso.php" method="post">

		<div class="col-6 float-left">
           <label for="razon">Rázon social</label><input type="text" id="razon" name="razon" class="form-control">
           <label for="nit">Nit</label><input type="number" id="nit" name="nit" class="form-control">
           <label for="direccion">Direccion</label><input type="text" id="direccion" name="direccion" class="form-control">
           <label for="ciudad">Ciudad</label><input type="text" id="ciudad" name="ciudad" class="form-control">
           <label for="telefono">Telefono</label><input type="text" id="telefono" name="telefono" class="form-control">
           
         </div>


          
				

		<div class="col-6 float-left">
			 
			 <label for="representante">Representante legal</label><input type="text" id="representante" name="representante" class="form-control">
			 <label for="cedula">Cedula</label><input type="text" id="cedula" name="cedula" class="form-control">
			 <label for="email">Email</label><input type="email" id="email" name="email" class="form-control">
			 <label for="celular">Celular</label><input type="text" id="celular" name="celular" class="form-control">
			 <label for="imagen">Imagen Logo</label><input type="file" id="imagen" name="imagen" class="form-control">

		</div>

		<div>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>
			
			

			
			<div class="col-8"><input type="submit" value="enviar" name="" class="float-right btn btn-success col-6"></div>

		   
		</form>


         <!--    Tienda  -->

		<form id="f2" name="f2" action="proceso.php" method="post">

		<div class="col-6 float-left">
           <label for="emprendimiento">Emprendimiento</label><input type="text" id="emprendimiento" name="emprendimiento" class="form-control">
            <label for="numerocontrato">N° contrato</label><input type="text" id="numerocontrato" name="numerocontrato" class="form-control">
            <label for="nombretienda">Nombre de la tienda</label><input type="text" id="nombretienda" name="nombretienda" class="form-control">
            <label for="direccion1">Direccion</label><input type="text" id="direccion1" name="direccion1" class="form-control">
            <label for="ciudad1">Ciudad</label><input type="text" id="ciudad1" name="ciudad1" class="form-control">
            <label for="telefono1">Telefono</label><input type="text" id="telefono1" name="telefono1" class="form-control">            
            

                     
         </div>


          
				

		<div class="col-6 float-left">
			 
			 <label for="rut"><a href="https://www.rankia.co/blog/dian/2428113-que-rut" target="_blank" title="¿Que es el rut ve a link de este enlace?">Rut (Registro Único Tributario)</a></label><input type="number" id="rut" name="rut" class="form-control">
			 <label for="representante">Representante de la tienda</label><input type="text" id="representante" name="representante" class="form-control">
			 <label for="cedula1">Cedula</label><input type="number" id="cedula1" name="cedula1" class="form-control">
			 <label for="email1">Email</label><input type="email" id="email1" name="email1" class="form-control">
			 <label for="celular1">Celular</label><input type="text" id="celular1" name="celular1" class="form-control">
			 <label for="imagen1">Imagen Logo</label><input type="file" id="imagen1" name="imagen1" class="form-control">

		</div>

		<div>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>
			
			

			
			<div class="col-8"><input type="submit" value="enviar" class="float-right btn btn-success col-6"></div>

		   
		</form>
	</header>

   <br>

	
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
