

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ingreso de productos</title>
	<link rel="stylesheet" href="../../css/almacenProductos/almacenProductos.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- javascript -->
    <script src="../../js/crearTienda/creartienda.js"></script>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/> -->

    <script src="../../js/almacenarProductos/almacenarProductos.js"></script>
    <?php session_start();

    //mensaje de inicio

     $logueado1 =$_SESSION['logueado'];
     echo "<script>alert('Ingrese sus datos manualmente desde la interfaz o en modo lista');</script>";

     ?>
</head>
<body class="aua">
	<header class="">
		 <div class="col-2 badge badge-success bordes"><</div>
		 <div class="col-8 badge badge-success bordes">Interfaz Usuario</div>
		 <!-- <a href="../login/login.php" class="btn btn-success letra"></a> -->
		 <form action="">
		 <button type="submit" onclick=this.form.action="../login/login.php" class="col-2 badge badge-success bordes btn-success">Salir</button>
         </form>
		 <br>
		          
         <div class="col-4 float-left">.</div>
		 <div class="col-2 badge badge-success bordes">Usuario:</div>
		 <div class="col-2 badge badge-success bordes"><?php echo $logueado1; ?></div>

		 
		 

		 
		
	</header>
	
<br><br>


	<aside class="cuadro">
		<form action="">
			<div class="col-5 float-left badge badge-success text-center">Logo <br><br><img src="../../img/index/mouse.jpg" width="50%" height="130" style="border-radius:150px;"></div>
			<div class="col-2 float-left">
			   <h1 class="col-12 badge badge-success">Nombre Tienda</h1><input type="text" id="nTienda" class="form-control col-12 bordes text-center">
	           <h1 class="col-12 badge badge-success ">Nit</h1><input type="text" id="nitrr" class="form-control col-12 bordes text-center">
	        </div>
	        <div class="col-3 float-left"><button onclick=this.form.action="../login/login.php" class=" badge btn btn-success bordes float-right">crear lista</button></div>
	        <div class="col-3 float-left"><button onclick=this.form.action="../login/login.php" class=" badge btn btn-success bordes float-right">leer lista</button></div>
	        <div class="col-3 float-left"><button onclick=this.form.action="../login/login.php" class=" badge btn btn-success bordes float-right">modificar lista</button></div>
	        <div class="col-3 float-left"><button onclick=this.form.action="../login/login.php" class=" badge btn btn-success bordes float-right">borrar lista</button></div>

         </form>
			

	</aside>

	<section>
	<form action="" method="post">
    <div style="width:100%;"><input type="file" id="seleccionArchivos" accept="image/*" class="col-4 btn btn-success"></div>
	<div class="bordes badge badge-success  col-4 cuadro espacio"><img id="imagenPrevisualizacion" width="100%" height="255"></div>
	
	    <div class="col-12"><h1 class="badge badge-success bordes col-8	">datos del Producto</h1>
	    	  <button onclick=this.form.action="../almacenProductos/almacenProductos.php" class="col-2 badge badge-success bordes float-right">enviar</button>
               <h1 class="col-2 badge badge-success bordes">Producto</h1><input type="text" id="producto" class="form-control col-4">
	           <h1 class="col-2 badge badge-success bordes">Valor</h1><input type="number" id="valor" onchange="sumado();sumado1()"class="form-control col-4">
	           <h1 class="col-2 badge badge-success bordes">Iva</h1><input type="text" id="iva" value="19%" disabled class="form-control col-4">
	           <h1 class="col-2 badge badge-success bordes">Total+Iva</h1><input type="number" id="Tiva" disabled class="form-control col-4">
	           <h1 class="col-2 badge badge-success bordes">Descuento</h1><input type="text" id="descuento" value="%" onchange="sumado1()"class="form-control col-4">
	           <h1 class="col-2 badge badge-success bordes">precio total</h1><input type="number" id="total" disabled class="form-control col-4">

	            
	</div>
	</form>	

	</section>		

	
</body>
</html>