<?php
include 'baseDatos.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Buscar</title>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<?php include 'estilos.php'; ?>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<header class="row bg-dark text-light">
		<div class="col">
			<h2>Buscador</h2>
		</div>
	</header>

	<main class="container">
		<form class="form-inline" method="POST" action="busqueda.php">		
			<div class="form-group">

				<label for= "NIF"></label>
				<input type="text" class="form-control" name="nif" placeholder="NIF">

				<label for= "NIE"></label>
				<input type="text" class="form-control" name="nie" placeholder="NIE">

				<label for= "Nombre"></label>
				<input type="text" class="form-control" name="nom" placeholder="Nombre">

				<label for= "Primer apellido"></label>
				<input type="text" class="form-control" name="apellido1" placeholder="Primer apellido">

				<label for= "Segundo apellido"></label>
				<input type="text" class="form-control" name="apellido2" placeholder="Segundo apellido">
			</div>
					
			<div class="form-group">	
				<label for= "Expediente"></label>
				<input type="text" class="form-control" name="expediente" placeholder="Expediente">

				<label for= "Acción"></label>
				<input type="text" class="form-control" name="accion" placeholder="Acción">

				<label for= "Grupo"></label>
				<input type="text" class="form-control" name="grupo" placeholder="Grupo">

				<label for= "Actuación comercial"></label>
					<select name="actComercial" class="form-control">
						<option value="Actuación Comercial" selected>Actuación comercial</option>
						<option value="Llamada">1. Llamada</option>
					  	<option value="Envío E-mail">2. E-mail</option>
					  	<option value="Envío SMS">3. SMS</option>
					   	<option value="Envío Newsletter">4. Newsletter</option>
					</select>

				<label for= "Estado"></label>
				<input type="text" class="form-control" name="estActuacion" placeholder="Estado actuación">

				<label for= "Fecha"></label>
				<input type="date" class="form-control" name="fechaAct" placeholder="Fecha actuación">
			</div>

			<div class="form-group">

				<label for= "E-mail"></label>
				<input type="text" class="form-control" name="eMail" placeholder="Dirección de E-mail">

				<label for= "Teléfono"></label>
				<input type="text" class="form-control" name="tel" placeholder="Teléfono">

				<label for= "Teléfono"></label>
				<input type="text" class="form-control" name="mov" placeholder="Móvil">

				<label for= "Colectivo"></label>
				<input type="text" class="form-control" name="colectivo" placeholder="Colectivo">

				<label for= "Responsable"></label>
				<input type="text" class="form-control" name="responsable" placeholder="Responsable">

			</div>

			<div>
				<button id="botonBuscar" type="submit" class="btn btn-primary" value="Buscar" name="busca">BUSCAR</button>
			</div>
		
		</form>
		
		<div><?= $seleccion ?></div>
	
	</main>
</body>
</html>