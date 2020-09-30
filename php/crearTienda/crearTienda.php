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
           <label for="numerocontrato">N° contrato</label><input type="text" id="numerocontrato" name="numerocontrato" class="form-control">
           <label for="direccion">Direccion</label><input type="text" id="direccion" name="direccion" class="form-control">
           <label for="ciudad">Ciudad</label><input type="text" id="ciudad" name="ciudad" class="form-control">
                      
         </div>


          
				

		<div class="col-6 float-left">
			 
			 <label for="matricula"><a href="https://linea.ccb.org.co/CertificadosElectronicosR/Index.html#/buscar-inscritos" target="_blank" title="¿Que es maricula camara comercio ve a link de este enlace?">Matricula (Camara Comercio)</a><a href=""></a></label><input type="text" id="matricula" name="matricula" class="form-control">
			 <label for="UsuarioRegistro">UsuarioRegistro</label><input type="text" id="UsuarioRegistro" name="UsuarioRegistro" class="form-control">
			 <label for="celularEmpresa">Celularempresa</label><input type="text" id="celular" name="celular" class="form-control">
			 <label for="emailEmpresa">Emailempresa</label><input type="email" id="email" name="email" class="form-control">			 
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
			<label for="nombretienda">Nombre de la tienda</label><input type="text" id="nombretienda" name="nombretienda" class="form-control">
           <label for="rut"><a href="https://muisca.dian.gov.co/WebRutVirtualInscripcion/#/proceso-guiado/inicio" target="_blank" title="¿Que es el rut ve a link de este enlace?">Rut (Registro Único Tributario)</a></label><input type="number" id="rut" name="rut" class="form-control">
            <label for="numerocontrato1">N° contrato</label><input type="text" id="numerocontrato1" name="numerocontrato1" class="form-control">            
            <label for="direccion1">Direccion</label><input type="text" id="direccion1" name="direccion1" class="form-control">
            <label for="ciudad">Ciudad</label><input type="text" id="ciudad" name="ciudad" class="form-control">
                       
            

                     
         </div>


          
				

		<div class="col-6 float-left">
			 
			
		 <label for="usuarioRegistro1">UsuarioRegistro</label><input type="text" id="usuarioRegistro1" name="usuarioRegistro1" class="form-control">
		 <label for="celularEmpresa1">Celular ó telefono tienda</label><input type="text" id="celularEmpresa" name="celularEmpresa" class="form-control">
		 <label for="emailEmpresa1">Email tienda</label><input type="email" id="email1" name="email1" class="form-control">
		 <label for="Contrasena">cree su contraseña</label><input type="password" id="Contrasena" name="Contrasena" class="form-control">
		 <label for="confirmarContrasena">Confirme su contraseña</label><input type="password" id="confirmarContrasena" name="confirmarContrasena" class="form-control">


		</div>
		<br><br><br><br><br><br><br><br><br><br><br><br>

		<div>
			<br><br><br><br><br>
			<div class="col-4 float-left"></div>
			<label for="imagen" class="col-4">Imagen Logo</label>
			<div class="col-4 float-left"></div>

			<div class="col-4 float-left">.</div>
			<input  type="file" id="imagen1" name="imagen1" class="form-control col-4 float-left">
			<div class="col-4 float-left">.</div>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>
			
			

			
			<div class="col-8"><input type="submit" value="enviar" class="float-right btn btn-success col-6"></div>

		   
		</form>
	</header>

   <br>

   <!-- //footer -->
				<?php
				include("../footer/footer.php")
				?>
</body>
</html>
