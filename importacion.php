<?php
include 'baseDatos.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Importación</title>
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
<body>
	
	<header class="row bg-dark text-light">
		<div class="col">
		<h1>Importación de Datos de Doceos</h1>
		</div>
	</header>
	

	<form class="form-inline">
		<div class="form-group">
		  <label for="files">Subir un archivo CSV: </label>
		  <input type="file" id="files" class="form-control" accept=".csv" required>
		</div>
		
		<div class="form-group">
		 <button type="submit" id="submit-file" class="btn btn-primary">Importar</button>
		 </div>
	</form>


</body>
</html>