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
					<input type="date" class="form-control" name="FechaActuacion1">
				</div>

				<div class="form-group col-md-3">
					<label for="Usuario">Responsable</label> 
					<input type="text" class="form-control" name="Responsable1">
				</div>
				
				<div class="form-group col-md-3">
					<label for="Destinatario">Destinatario</label> 
					<input type="text" class="form-control" name="Destinatario1">
				</div>

				<div class="form-group col-md-2">
					<label for="Movil">Móvil</label> 
					<input type="text" class="form-control" name="Movil1">
				</div>

				<div class="form-group col-md-2">
					<label for="EstadoActuacion">Estado Actuación</label> 
					<input type="text" class="form-control" name="Estado1">
				</div>

				<div class="form-group col-md-12">
					<label for="Asunto">Asunto</label> 
					<input type="text" class="form-control" name="Asunto1">
				
				</div>	

				<button id="botonNuevaAct" type="submit" class="btn btn-primary" value="Añadir" name="addLlamada">
				AÑADIR
				</button>
				<button id="botonBusca" type="submit" class="btn btn-primary" name="buscaLlamadas">BUSCAR</button>

				<div class="form-group col-md-12"><?=$llamadas?></div>
					
			</div>
		</form>		

			<!------------------------------------------------------------------------------------------------------->

		<form id="sms" method="POST" action="comercial.php">

			<h2>SMS</h2>
			<div class="form-row">
				<div class="form-group col-md-2">
					<label for="FechaActuacion">Fecha actuación</label> 
					<input type="date" class="form-control" name="FechaActuacion2">
				</div>

				<div class="form-group col-md-3">
					<label for="Usuario">Responsable</label> 
					<input type="text" class="form-control" name="Responsable2">
				</div>
				
				<div class="form-group col-md-3">
					<label for="Destinatario">Destinatario</label> 
					<input type="text" class="form-control" name="Destinatario2">
				</div>

				<div class="form-group col-md-2">
					<label for="Movil">Móvil</label> 
					<input type="text" class="form-control" name="Movil2">
				</div>

				<div class="form-group col-md-2">
					<label for="EstadoActuacion">Estado Actuación</label> 
					<input type="text" class="form-control" name="Estado2">
				</div>

				<div class="form-group col-md-12">
					<label for="Asunto">Asunto</label> 
					<input type="text" class="form-control" name="Asunto2">
				</div>

				<button id="botonNuevaAct" type="submit" class="btn btn-primary" value="Añadir" name="addSms">AÑADIR</button>
				<button id="botonNuevaAct" type="submit" class="btn btn-primary" name="buscaSms">BUSCAR</button>

				<div class="form-group col-md-12"><?=$sms?></div>
			</div>

		</form>	

		
			<!------------------------------------------------------------------------------------------------------->

		<form id="email" method="POST" action="comercial.php">

			<h2>Email</h2>
			<div class="form-row">
				<div class="form-group col-md-2">
					<label for="FechaActuacion">Fecha actuación</label> 
					<input type="date" class="form-control" name="FechaActuacion3">
				</div>

				<div class="form-group col-md-3">
					<label for="Usuario">Responsable</label> 
					<input type="text" class="form-control" name="Responsable3">
				</div>

				
				<div class="form-group col-md-3">
					<label for="Destinatario">Destinatario</label> 
					<input type="text" class="form-control" name="Destinatario3">
				</div>

				<div class="form-group col-md-2">
					<label for="Email">Email</label> 
					<input type="text" class="form-control" name="Email3">
				</div>

				<div class="form-group col-md-2">
					<label for="EstadoActuacion">Estado Actuación</label> 
					<input type="text" class="form-control" name="Estado3">
				</div>

				<div class="form-group col-md-12">
					<label for="Asunto">Asunto</label> 
					<input type="text" class="form-control" name="Asunto3">
				</div>

				<button id="botonNuevaAct" type="submit" class="btn btn-primary" value="Añadir" name="addMail">AÑADIR</button>
				<button id="botonNuevaAct" type="submit" class="btn btn-primary" name="buscaMail">BUSCAR</button>

				<div class="form-group col-md-12"></div>				
			</div>
		</form>

			<!------------------------------------------------------------------------------------------------------->

		<form id="nl" method="POST" action="comercial.php">

			<h2>Newsletter</h2>
			<div class="form-row">
				<div class="form-group col-md-2">
					<label for="FechaActuacion">Fecha actuación</label> 
					<input type="date" class="form-control" name="FechaActuacion4">
				</div>

				<div class="form-group col-md-3">
					<label for="Usuario">Responsable</label> 
					<input type="text" class="form-control" name="Responsable4">
				</div>

				
				<div class="form-group col-md-3">
					<label for="Destinatario">Destinatario</label> 
					<input type="text" class="form-control" name="Destinatario4">
				</div>

				<div class="form-group col-md-2">
					<label for="Email">Email</label> 
					<input type="text" class="form-control" name="Email4">
				</div>

				<div class="form-group col-md-2">
					<label for="EstadoActuacion">Estado Actuación</label> 
					<input type="text" class="form-control" name="Estado4">
				</div>

				<div class="form-group col-md-12">
					<label for="Asunto">Asunto</label> 
					<input type="text" class="form-control" name="Asunto4">
				</div>
				<button id="botonNuevaAct" type="submit" class="btn btn-primary" value="Añadir" name="addNL">AÑADIR</button>
				<button id="botonNuevaAct" type="submit" class="btn btn-primary" name="buscaNL">BUSCAR</button>
				
				<div class="form-group col-md-12"><?=$nl?></div>				
			</div>
		</form>
	</main>
</body>
</html>