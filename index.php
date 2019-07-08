<?php

//IMPORTACIÓN
$importacion ="";
if( isset($_POST['import']) ){
		$importacion=$_POST['import'];
}

$importacion .='<form method="POST" action="importacion.php">
				<input type="image" class="img-responsive" src="img/import-file.png" style="width:160px" name=["import"] onclick="submit()">
				</form>';

//EXPORTACIÓN
$exportacion ="";
if( isset($_POST['export']) ){
		$importacion=$_POST['export'];
}

$exportacion .='<form method="POST" action="exportacion.php">
				<input type="image" class="img-responsive" src="img/export-file.png" style="width:160px" name=["export"] onclick="submit()">
				</form>';


//GESTIÓN DATOS ALUMNO
$alumno ="";
if( isset($_POST['alum']) ){
		$clasificacion=$_POST['alum'];
		
	}
$alumno .='<form method="POST" action="alumnos.php">
			<input type="image" class="img-responsive center-block" src="img/alumno.png" style="width:160px" name=["alum"] onclick="submit()">
			</form>';

//GESTIÓN ACTUACIONES COMERCIALES
$comercial ="";
if( isset($_POST['com']) ){
		$escudo=$_POST['com'];
}

$comercial .='<form method="POST" action="comercial.php">
			<input type="image" class="img-responsive center-block" src="img/comunicacion.png" style="width:160px" name=["com"] onclick="submit()">
			</form>';



//BÚSQUEDA
$busqueda ="";
if( isset($_POST['buscar']) ){
		$escudo=$_POST['buscar'];
}

$busqueda .='<form method="POST" action="busqueda.php">
			<input id="icono" type="image" class="img-responsive center-block" src="img/buscar.png" style="width:160px" name=["buscar"] onclick="submit()">
			</form>';
?>


<!DOCTYPE html>
<html lang="es">
<head>
	<title>Foment Formació</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<?php include 'estilos.php'; ?>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="papaparse.min.js"></script>
</head>
	
<header class="row bg-dark text-light">
	<div class="col"><h2><b>Foment</b> Formació</h2></div>
</header>

<main class="container-fluid">

	<div id="index" class="row">
		<div class="col-md-2"><?=$importacion?></div>
		<div class="col-md-2"><?=$alumno?></div>
		<div class="col-md-2"><?=$comercial?></div>
		<div class="col-md-2"><?=$busqueda?></div>
		<div class="col-md-2"><?=$exportacion?></div>
	</div>	

</main>
</html>