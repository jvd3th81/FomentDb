<?php
	include 'baseDatos.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<title>Datos Alumnos</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<?php include 'estilos.php'; ?>

	<!--<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>-->	
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>

<body>
	<header class="row bg-dark text-light">
		<div class="col">
			<h2>Gestión Datos de Alumnos</h2>
		</div>
	</header>
	
	<main class="container">

		<form id="datosAlumnos" method="POST" action="alumnos.php">

				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="Estado">Estado</label>
						<input type="text" class="form-control" name="Estado">
					</div>

					<div class="form-group col-md-4">
						<label for="FechaInscripcion">Fecha de Inscripción</label>
						<input type="date" class="form-control" name="FechaInscripcion">
					</div>

					<div class="form-group col-md-4">
						<label for="FechaCaducidad">Fecha de Caducidad</label>
						<input type="date" class="form-control" name="FechaCaducidad">
					</div>			
				</div>

				<div class="form-row">

					<!--------------------------------

					<div class="col">
						<label for="Identificacion">ID</label>
						<input type="text" class="form-control" name="Identificacion" hidden>
					</div>

					---------------------------------->

					<div class="form-group col-md-4">
						<label for="NIF">* NIF</label>
						<input type="text" class="form-control" name="NIF" required>
					</div>

					<div class="form-group col-md-4">
						<label for="NIE">* NIE</label>
						<input type="text" class="form-control" name="NIE" required>
					</div>

					<div class="form-group form-group col-md-4">
						<label for="Expediente">* Expediente</label> 
					<input type="text" class="form-control" name="Expediente" required>
					</div>			
				</div>		

				<div class="form-row">
					<div class="col">
						<label for="PrimerApellido">* Primer Apellido</label>
						<input type="text" class="form-control" name="PrimerApellido" required>
					</div>

					<div class="col">
						<label for="SegundoApellido">* Segundo Apellido</label>
						<input type="text" class="form-control" name="SegundoApellido" required>
					</div>

					<div class="col">
						<label for="Nombre">* Nombre</label> 
						<input type="text" class="form-control" name="Nombre" required>
					</div>			
				</div>

				<div class="form-row">
					<div class="col">
						<label for="NASS">NASS </label> 
						<input type="text" class="form-control" name="NASS">
					</div>

					<div class="col">
						<label for="FechaNacimiento">Fecha de Nacimiento </label>
						<input type="date" class="form-control" name="FechaNacimiento">
					</div>

					<div class="form-group col-md-2">
						<label for="Sexo">Sexo</label>
						<select class="form-control" name="Sexo">
						  	<option>Hombre</option>
						  	<option>Mujer</option>
						</select>
					</div>
					<div class="form-group col-md-2">
						<label for="Discapacidad">Discapacidad </label> 
						<select class="form-control" name="Discapacidad">
							 <option>Si</option>
							 <option>No</option>
						</select>
					</div>			
				</div>	

				<div class="form-row">
					<div class="form-group col-md-2">
						<label for="Telefono">* Teléfono</label>  
						<input type="text" class="form-control" name="Telefono" required>
					</div>

					<div class="form-group col-md-2">
						<label for="Movil">* Móvil</label> 
						<input type="text" class="form-control" name="Movil" required>
					</div>

					<div class="form-group col-md-4">
						<label for="Email">* Email</label> 
						<input type="email" class="form-control" name="Email" required>
					</div>
					<div class="form-check form-check-inline col-md mb-2">						 
						<input type="checkbox" class="form-check-input" name="PEmail">
						<label class="form-check-label" for="PEmail">Permite Email </label>
					</div>
					<div class="form-check form-check-inline col-md mb-2">						
						<input type="checkbox" class="form-check-input" name="PSMS">
						<label class="form-check-label" for="PSMS">Permite SMS </label> 
					</div>
				</div>			

				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="Direccion">Dirección</label> 
						<input type="text" class="form-control" name="Direccion">
					</div>

					<div class="form-group col-md-2">
						<label for="CodigoPostal">Código Postal</label> 
						<input type="text" class="form-control" name="CodigoPostal">
					</div>

					<div class="form-group col-md-4">
						<label for="Municipio ">Municipio</label> 
						<input type="text" class="form-control" name="Municipio">
					</div>			
				</div>

				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="Estudios ">Estudios</label> 
					<input type="text" class="form-control" name="Estudios">
					</div>

					<div class="form-group col-md-2">
						<label for="Colectivo">* Colectivo</label> 
						<input type="text" class="form-control" name="Colectivo" required>
					</div>

					
					<div class="form-group col-md-4">
						<label for="Accion">* Acción</label> 
						<input type="text" class="form-control" name="Accion" required>
					</div>
					<div class="form-group col-md-2">
						<label for="Grupo">* Grupo</label> 
					<input type="text" class="form-control" name="Grupo" required>
					</div>		
				</div>


				<div class="form-row">
					<div class="form-group col-md-3">
						<label for="ActuacionComercial">* Actuación comercial</label> 
						 <select name="ActuacionComercial" class="form-control" required>
						  <option value="Llamada">1. Llamada</option>
						  <option value="E-mail">2. E-mail</option>
						  <option value="SMS">3. SMS</option>
						   <option value="Newsletter">4. Newsletter</option>
						</select>
					</div>

					<div class="form-group col-md-3">
						<label for="FechaActuacion">* Fecha actuación</label> 
						<input type="date" class="form-control" name="FechaActuacion" required>
					</div>

					<div class="form-group col-md-2">
						<label for="HoraActuacion">Hora actuación</label> 
						<input type="time" class="form-control" name="HoraActuacion">
					</div>
					<div class="form-group col-md-2">
						<label for="EstadoActuacion">Estado actuación</label> 
						<input type="text" class="form-control" name="EstadoActuacion">
					</div>	
					<div class="form-group col-md-2">
						<label for="Responsable">* Responsable</label> 
						<input type="text" class="form-control" name="Responsable">
					</div>						
				</div>			


					
				 <div class="form-group">
				    <label for="Observaciones">Observaciones</label>
				    <input type="text" class="form-control" name="Observaciones" rows="3">
				 </div>

			<div class="form-group">
				<button id="botonBuscar" type="submit" class="btn btn-primary" value="Guardar cambios" name="guardaAlumno">GUARDAR</button>
			</div>
		</form>
	</main>
</body>
</html>