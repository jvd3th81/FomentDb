<?php

include 'baseDatos.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Gestión Actuaciones Comerciales</title>
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
			<h2>Gestión Actuaciones Comerciales</h2>
		</div>
	</header>

	<main class="container">

		<form id="llamadas" method="POST" action="comercial.php">

			<h2>Llamadas</h2>
			<div class="form-row">
				<div class="form-group col-md-2">
					<label for="FechaActuacion">Fecha actuación</label> 
					<input type="date" class="form-control" name="FechaActuacion1" required>
				</div>

				<div class="form-group col-md-2">
					<label for="Usuario">Responsable</label> 
					<input type="text" class="form-control" name="Responsable1" required>
				</div>
				
				<div class="form-group col-md-2">
					<label for="Destinatario">Destinatario</label> 
					<input type="text" class="form-control" name="Destinatario1" required>
				</div>

				<div class="form-group col-md-2">
					<label for="Movil">Móvil</label> 
					<input type="text" class="form-control" name="Movil1" required>
				</div>

				<div class="form-group col-md-2">
					<label for="EstadoActuacion">Estado Actuación</label> 
					<input type="text" class="form-control" name="Estado1" required>
				</div>

				<div class="form-group col-md-12">
					<label for="Asunto">Asunto</label> 
					<input type="text" class="form-control" name="Asunto1" required>
				</div>		
			
				<button id="botonNuevaAct" type="submit" class="btn btn-primary" value="Añadir LLamada" name="addLlamada">
				AÑADIR
				</button>
			</div>
		</form>	

			<!------------------------------------------------------------------------------------------------------->

		<form id="sms" method="POST" action="comercial.php">

			<h2>SMS</h2>
			<div class="form-row">
				<div class="form-group col-md-2">
					<label for="FechaActuacion">Fecha actuación</label> 
					<input type="date" class="form-control" name="FechaActuacion2" required>
				</div>

				<div class="form-group col-md-2">
					<label for="Usuario">Responsable</label> 
					<input type="text" class="form-control" name="Responsable2" required>
				</div>
				
				<div class="form-group col-md-2">
					<label for="Destinatario">Destinatario</label> 
					<input type="text" class="form-control" name="Destinatario2" required>
				</div>

				<div class="form-group col-md-2">
					<label for="Movil">Móvil</label> 
					<input type="text" class="form-control" name="Movil2" required>
				</div>

				<div class="form-group col-md-2">
					<label for="EstadoActuacion">Estado Actuación</label> 
					<input type="text" class="form-control" name="Estado2" required>
				</div>

				<div class="form-group col-md-12">
					<label for="Asunto">Asunto</label> 
					<input type="text" class="form-control" name="Asunto2" required>
				</div>

				<button id="botonNuevaAct" type="submit" class="btn btn-primary" value="Añadir SMS" name="addSms">
				AÑADIR
				</button>	
			</div>

		</form>

			<!------------------------------------------------------------------------------------------------------->

		<form id="email" method="POST" action="comercial.php">

			<h2>Email</h2>
			<div class="form-row">
				<div class="form-group col-md-2">
					<label for="FechaActuacion">Fecha actuación</label> 
					<input type="date" class="form-control" name="FechaActuacion3" required>
				</div>

				<div class="form-group col-md-2">
					<label for="Usuario">Responsable</label> 
					<input type="text" class="form-control" name="Responsable3" required>
				</div>

				
				<div class="form-group col-md-2">
					<label for="Destinatario">Destinatario</label> 
					<input type="text" class="form-control" name="Destinatario3" required>
				</div>

				<div class="form-group col-md-2">
					<label for="Email">Email</label> 
					<input type="text" class="form-control" name="Email3" required>
				</div>

				<div class="form-group col-md-2">
					<label for="EstadoActuacion">Estado Actuación</label> 
					<input type="text" class="form-control" name="Estado3" required>
				</div>

				<div class="form-group col-md-12">
					<label for="Asunto">Asunto</label> 
					<input type="text" class="form-control" name="Asunto3" required>
				</div>

				<button id="botonNuevaAct" type="submit" class="btn btn-primary" value="Añadir Email" name="addMail">
				AÑADIR
				</button>							
			</div>
		</form>

			<!------------------------------------------------------------------------------------------------------->

		<form id="nl" method="POST" action="comercial.php">

			<h2>Newsletter</h2>
			<div class="form-row">
				<div class="form-group col-md-2">
					<label for="FechaActuacion">Fecha actuación</label> 
					<input type="date" class="form-control" name="FechaActuacion4" required>
				</div>

				<div class="form-group col-md-2">
					<label for="Usuario">Responsable</label> 
					<input type="text" class="form-control" name="Responsable4" required>
				</div>

				
				<div class="form-group col-md-2">
					<label for="Destinatario">Destinatario</label> 
					<input type="text" class="form-control" name="Destinatario4" required>
				</div>

				<div class="form-group col-md-2">
					<label for="Email">Email</label> 
					<input type="text" class="form-control" name="Email4" required>
				</div>

				<div class="form-group col-md-2">
					<label for="EstadoActuacion">Estado Actuación</label> 
					<input type="text" class="form-control" name="Estado4" required>
				</div>

				<div class="form-group col-md-12">
					<label for="Asunto">Asunto</label> 
					<input type="text" class="form-control" name="Asunto4" required>
				</div>
				<button id="botonNuevaAct" type="submit" class="btn btn-primary" value="Añadir Newsletter" name="addNL">
				Añadir
				</button>				
			</div>
		</form>

			<!------------------------------------------------------------------------------------------------------->
		<!--
			<div class="container">
				<h1>
				<button id="botonNuevaAct" type="submit" class="btn btn-primary" name="buscaLlamadas">Llamadas</button>
				<button id="botonNuevaAct" type="submit" class="btn btn-primary" name="buscaSms">SMS</button>
				<button id="botonNuevaAct" type="submit" class="btn btn-primary" name="buscaMail">Email</button>
				<button id="botonNuevaAct" type="submit" class="btn btn-primary" name="buscaNL">Newsletter</button>
				</h1>
			</div>

		-->
	</main>
</body>
</html>