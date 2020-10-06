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
<br>
	<aside class="cuadro">
		<form action="" method="post" enctype="multipart/form-data">
			<div class="col-5 float-left badge badge-success text-center">Logo <br><br><img src="../../img/index/body/Ciudad Verde Shop.gif" width="50%" height="170" style="border-radius:150px;"></div>
			<div class="col-2 float-left">
			   <h1 class="col-12 badge badge-success">Nombre Tienda</h1><input type="text" id="nTienda" name="nTienda" class="form-control col-12 bordes text-center">
	           <h1 class="col-12 badge badge-success ">Nit</h1><input required type="text" id="nit" name="nit"  class="form-control col-12 bordes text-center">
	        </div>
	        <div class="col-5 float-left badge badge-success text-center">Logo <br><br><img src="../../img/index/body/Ciudad Verde Shop.gif" width="50%" height="170" style="border-radius:150px;"></div>
	              
		

	</aside>
<br>

	       <div class="col-3 float-left"><button onclick=this.form.action="../login/login.php" class=" badge btn btn-success bordes w-75">crear lista</button></div>
	        <div class="col-3 float-left"><button onclick=this.form.action="../login/login.php" class=" badge btn btn-success bordes w-75 ">leer lista</button></div>
	        <div class="col-3 float-left"><button onclick=this.form.action="../login/login.php" class=" badge btn btn-success bordes w-75">modificar lista</button></div>
	        <div class="col-3 float-left"><button onclick=this.form.action="../login/login.php" class=" badge btn btn-success bordes w-75">borrar lista</button></div>


	<br><br>

	
	<h1 class="badge badge-success bordes col-12">datos del Producto</h1> 
	
    <section class="col-6 float-left" style="background:;display: inline-block;">
		    <h1 class="col-4 badge badge-success bordes">Producto</h1><input required placeholder="chocolates" type="text" id="producto" name="producto" class="form-control col-8">

		    <h1 class="col-4 badge badge-success bordes">Descripción</h1><input required placeholder="ferrero 249gr" type="text" id="descripcion" name="descripcion" class="form-control col-8">

               <h1 class="col-4 badge badge-success bordes">Embalaje X</h1><input required placeholder="24" type="text" id="embalaje" name="embalaje" class="form-control col-8">

	           <h1 class="col-4 badge badge-success bordes">Valor</h1><input required placeholder="24000" type="float" id="valor" name="valor"onchange="sumado();sumado1()"class="form-control col-8">

	           <h1 class="col-4 badge badge-success bordes">Iva</h1><input required type="float" id="iva" name="iva" value="19" disabled class="form-control col-8">

	           <h1 class="col-4 badge badge-success bordes">Total+Iva</h1><input required type="float" id="tiva" name="tiva" disabled class="form-control col-8">

	           <h1 class="col-4 badge badge-success bordes">Descuento %</h1><input required placeholder="10" type="float" id="descuento" name="descuento" value="" maxlength="2" onchange="sumado1()"class="form-control col-8">

	           <h1 class="col-4 badge badge-success bordes">precio total</h1><input required type="float" id="total" name="total" disabled class="form-control col-8">
                <br>
	            <button onclick=this.form.action="../almacenProductos/almacenProductosBase.php" class="col-2 badge badge-success bordes float-right">enviar</button>
    </section>   

    <section class="col-6 float-left" style="background:;display: inline-block;">
    	 <div class="bordes badge badge-success col-12 cuadro espacio float-left"><img id="imagenPrevisualizacion" width="100%" height="300"></div>
        <div style="width:100%;" class="col-12 bordes badge badge-success"><input type="file" id="seleccionArchivos" name="seleccionArchivos"accept="image/*" class="col-12 bordes" ></div>

    </section> 
    </form> 


</body>
</html>