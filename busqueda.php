<?php
include 'baseDatos.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Buscador</title>
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
		<form id="buscador" method="POST" action="busqueda.php">
			<h4>Datos Alumnos</h4>	
			<div class="form-row">
				<div class="form-group col-md-2">
					<label for= "NIF"></label>
					<input type="text" class="form-control" name="nif" placeholder="NIF">
				</div>

				<div class="form-group col-md-2">
					<label for= "NIE"></label>
					<input type="text" class="form-control" name="nie" placeholder="NIE">
				</div>

				<div class="form-group col-md-3">
					<label for= "Nombre"></label>
					<input type="text" class="form-control" name="nom" placeholder="Nombre">
				</div>

				<div class="form-group col-md-2">
					<label for= "Primer apellido"></label>
					<input type="text" class="form-control" name="apellido1" placeholder="Primer apellido">
				</div>

				<div class="form-group col-md-2">
					<label for= "Segundo apellido"></label>
					<input type="text" class="form-control" name="apellido2" placeholder="Segundo apellido">
				</div>

				<div class="form-group col-md-4">
					<label for= "E-mail"></label>
					<input type="text" class="form-control" name="eMail" placeholder="Dirección de E-mail">
				</div>

				<div class="form-group col-md-2">
					<label for= "Teléfono"></label>
					<input type="text" class="form-control" name="tel" placeholder="Teléfono">
				</div>

				<div class="form-group col-md-2">
					<label for= "Móvil"></label>
					<input type="text" class="form-control" name="mov" placeholder="Móvil">
				</div>

				<div class="form-group col-md-2">
					<label for= "Colectivo"></label>
					<input type="text" class="form-control" name="colectivo" placeholder="Colectivo">
				</div>

				<div class="form-group col-md-2">	
					<label for= "Expediente"></label>
					<input type="text" class="form-control" name="expediente" placeholder="Expediente">
				</div>

				<div class="form-group col-md-4">
					<label for= "Acción"></label>
					<input type="text" class="form-control" name="accion" placeholder="Acción">
				</div>

				<div class="form-group col-md-2">	
					<label for= "Grupo"></label>
					<input type="text" class="form-control" name="grupo" placeholder="Grupo">
				</div>

			</div>

			<h4>Actuaciones Comerciales</h4>
			<div class="form-row">
				<div class="form-group col-md-3">
					<label for= "Fecha"></label>
					<input type="date" class="form-control" name="fechaAct" placeholder="Fecha actuación">
				</div>

				<div class="form-group col-md-3">
					<label for= "Actuación comercial"></label>
					<select name="actComercial" class="form-control">
						<option value="Actuación Comercial" selected>Actuación comercial</option>
						<option value="Llamada">Llamada</option>
					  	<option value="Envío E-mail">E-mail</option>
					  	<option value="Envío SMS">SMS</option>
					   	<option value="Envío Newsletter">Newsletter</option>
					</select>
				</div>			

				<div class="form-group col-md-2">
					<label for= "Estado"></label>
					<select name="estActuacion" class="form-control">
						<option value="Actuación Comercial" selected>Estado actuación</option>
						<option value="Enviada">Enviada</option>
					  	<option value="Programada">Programada</option>					  
					</select>					
				</div>

				<div class="form-group col-md-4">				
					<label for= "Responsable"></label>
					<input type="text" class="form-control" name="responsable" placeholder="Responsable">
				</div>					
			</div>

			<button id="botonBuscar" type="submit" class="btn btn-primary" value="Buscar" name="busca">BUSCAR</button>

		</form>	
	</main>

	<section>

			<div class="form-group col-md-12"><?= $seleccion ?></div>

	</section>
</body>
</html>