<?php

$servername = "localhost";
$username = "3duu7";
$password = "cursos2019";

$conn = new mysqli($servername, $username, $password);

$sql = "CREATE DATABASE IF NOT EXISTS lista";

$conn->query($sql);
$conn->close();

$conn2 = new mysqli($servername, $username, $password,"lista");


#################################  TABLAS  ############################

$sql = "CREATE TABLE IF NOT EXISTS Alumno(

					Id INT(20)AUTO_INCREMENT,
					Estado VARCHAR(50), 
					FechaInscripcion DATE, 
					FechaCaducidad DATE,					
					NIF VARCHAR(20),
					NIE VARCHAR(20),
					PrimerApellido VARCHAR(50),
					SegundoApellido VARCHAR(50),
					Nombre VARCHAR(50),
					NASS VARCHAR(50),
					SEXO VARCHAR(10),
					FechaNacimiento VARCHAR(50),
					Discapacidad VARCHAR(10),
					Telefono VARCHAR(20),
					Movil VARCHAR(20),
					Email VARCHAR(50),
					PEmail VARCHAR(50),
					PSMS VARCHAR(50),
					Direccion VARCHAR(50),
					CodigoPostal VARCHAR(10),
					Municipio VARCHAR(50),
					Estudios VARCHAR(50),
					Colectivo VARCHAR(50),
					Expediente VARCHAR(50),
					Accion VARCHAR(50),
					Grupo VARCHAR(50),
					ActuacionComercial VARCHAR(50),
					FechaActuacion DATE,
					HoraActuacion TIME,
					EstadoActuacion VARCHAR(50),
					Responsable VARCHAR(50),
					Observaciones TEXT,
					PRIMARY KEY(Id)
		)CHARACTER SET=utf8";

$conn2->query($sql);

##################  FORMULARIO GESTIÓN DATOS ALUMNOS ######################

if(isset($_POST['guardaAlumno'])){

	$e = $_POST['Estado'];
	$fi = $_POST['FechaInscripcion'];	
	$fc = $_POST['FechaCaducidad'];
	$nf = $_POST['NIF'];
	$ne = $_POST['NIE'];
	$p = $_POST['PrimerApellido'];
	$s = $_POST['SegundoApellido'];
	$n = $_POST['Nombre'];
	$na = $_POST['NASS'];
	$sx = $_POST['Sexo'];
	$fn = $_POST['FechaNacimiento'];
	$di = $_POST['Discapacidad'];
	$te = $_POST['Telefono'];
	$mo = $_POST['Movil'];
	$em = $_POST['Email'];
	$pem = $_POST['PEmail'];
	$ps = $_POST['PSMS'];
	$d = $_POST['Direccion'];
	$cp = $_POST['CodigoPostal'];
	$mu = $_POST['Municipio'];
	$es = $_POST['Estudios'];
	$co = $_POST['Colectivo'];
	$ex = $_POST['Expediente'];
	$an = $_POST['Accion'];
	$gr = $_POST['Grupo'];
	$ac = $_POST['ActuacionComercial'];
	$fa = $_POST['FechaActuacion'];
	$ha = $_POST['HoraActuacion'];
	$ea = $_POST['EstadoActuacion'];
	$r = $_POST['Responsable'];
	$ob = $_POST['Observaciones']; 
	
	
	$sql = "INSERT INTO Alumno(Estado, FechaInscripcion, FechaCaducidad, NIF, NIE, PrimerApellido, SegundoApellido, Nombre, NASS, Sexo, FechaNacimiento, Discapacidad, Telefono, Movil, Email, PEmail, PSMS, Direccion, CodigoPostal, Municipio, Estudios, Colectivo, Expediente, Accion, Grupo, ActuacionComercial, FechaActuacion, HoraActuacion, EstadoActuacion, Responsable, Observaciones)
		
		VALUES('$e','$fi','$fc','$nf','$ne','$p','$s','$n','$na','$sx','$fn','$di','$te','$mo',
		'$em','$pem','$ps','$d','$cp','$mu','$es','$co','$ex','$an','$gr','$ac','$fa','$ha','$ea','$r','$ob')";
}

$conn2->query($sql);



################## FORMULARIO DE BÚSQUEDA ###########################################################

$id ="";
$nf = "";
$ne = "";
$p = "";
$n = "";
$s = "";
$ex = "";
$an = "";
$gr = "";
$ac = "";
$ea = "";
$fa = "";
$em = "";
$te = "";
$mo = "";
$co = "";
$r = "";

if (isset ($_POST['busca'])) {


	$nf = $_POST['nif'];
	$ne = $_POST['nie'];
	$p = $_POST['apellido1'];
	$n = $_POST['nom'];
	$s = $_POST['apellido2'];
	$ex = $_POST['expediente'];
	$an = $_POST['accion'];
	$gr = $_POST['grupo'];
	$ac = $_POST['actComercial'];
	$ea = $_POST['estActuacion'];
	$fa = $_POST['fechaAct'];
	$em = $_POST['eMail'];
	$te = $_POST['tel'];
	$mo = $_POST['mov'];
	$co = $_POST['colectivo'];
	$r = $_POST['responsable'];
	
}
	
$sql = "SELECT Id, NIF, NIE, PrimerApellido, Nombre, SegundoApellido, Expediente, Accion, Grupo, ActuacionComercial,
		EstadoActuacion, FechaActuacion, Email, Telefono, Movil, Colectivo, Responsable FROM Alumno 

		WHERE Id = '$id'
		OR NIF = '$nf'
		OR NIE = '$ne' 
		OR PrimerApellido = '$p' 
		OR Nombre = '$n' 
		OR SegundoApellido = '$s' 
		OR Expediente = '$ex' 
		OR Accion = '$an' 
		OR Grupo = '$gr' 
		OR ActuacionComercial = '$ac' 
		OR EstadoActuacion = '$ea' 
		OR FechaActuacion = '$fa' 
		OR Email = '$em' 
		OR Telefono = '$te' 
		OR Movil = '$mo' 
		OR Colectivo = '$co' 
		OR Responsable = '$r'
		";


	$resultado = $conn2->query($sql);

	$seleccion = "<div class='table-responsive'>
				  <table class='table table-striped table-dark'>";

				if($resultado->num_rows > 0){ 
							
							$seleccion .= "<th scope='col'>ID'</th>";
							$seleccion .= "<th scope='col'>NIF</th>";
							$seleccion .= "<th scope='col'>NIE</th>";				
							$seleccion .= "<th scope='col'>1º&nbsp;APELLIDO</th>";
							$seleccion .= "<th scope='col'>Nombre</th>";
							$seleccion .= "<th scope='col'>2º&nbsp;APELLIDO</th>";
							$seleccion .= "<th scope='col'>EXPEDIENTE</th>";
							$seleccion .= "<th scope='col'>ACCIÓN</th>";
							$seleccion .= "<th scope='col'>GRUPO</th>";
							$seleccion .= "<th scope='col'>ACTUACIÓN</th>";
							$seleccion .= "<th scope='col'>ESTADO</th>";
							$seleccion .= "<th scope='col'>FECHA</th>";
							$seleccion .= "<th scope='col'>EMAIL</th>";
							$seleccion .= "<th scope='col'>TELÉFONO</th>";
							$seleccion .= "<th scope='col'>MÓVIL</th>";
							$seleccion .= "<th scope='col'>COLECTIVO</th>";
							$seleccion .= "<th scope='col'>RESPONSABLE</th>";
							$seleccion .= "<th scope='col'>OPCIONES</th>";
			
								
				while ($row = $resultado->fetch_assoc() ){ 
				  
					$seleccion .= "<tr>";

					foreach ($row as $v) {

						$seleccion .= "<td>";
						$seleccion .= $v;
						$seleccion .= "</td>";

					}
				
				$seleccion .= "<td>
									<form method='POST' action='busqueda.php'>
										<button id='botonEditar' type='submit' value='editar' name='modificar' class='btn btn-info	'>Editar</button>
										
									</form>
								</td>
								<td>
									<form method='POST' action='busqueda.php'>
									<button id='botonEliminar' type='submit' value='eliminar' name='borrar' class='btn btn-primary'>Eliminar</button>
									</form>
								</td>
								</tr>";
			}
	}

$seleccion .= "</table></div>";

/*
$sql = "CREATE TABLE IF NOT EXISTS LLamadas(
				
					FechaActuacion1 DATE, 
					Responsable1 VARCHAR(50), 
					Asunto1 VARCHAR(50), 
					Destinatario1 VARCHAR(50),
					Movil1 VARCHAR(50),
					EstadoActuacion1 VARCHAR(50)
				
		)CHARACTER SET=utf8";

$conn2->query($sql);


$sql = "CREATE TABLE IF NOT EXISTS SMS(
					
					FechaActuacion2 DATE, 
					Responsable2 VARCHAR(50), 
					Asunto2 VARCHAR(50), 
					Destinatario2 VARCHAR(50),
					Movil2 VARCHAR(50),
					EstadoActuacion2 VARCHAR(50)
								
		)CHARACTER SET=utf8";

$conn2->query($sql);


$sql = "CREATE TABLE IF NOT EXISTS Email(
					
					FechaActuacion3 DATE, 
					Responsable3 VARCHAR(50), 
					Asunto3 VARCHAR(50), 
					Destinatario3 VARCHAR(50),
					Email3 VARCHAR(50),
					EstadoActuacion3 VARCHAR(50)
							
		)CHARACTER SET=utf8";

$conn2->query($sql);


$sql = "CREATE TABLE IF NOT EXISTS Newsletter(
					
					FechaActuacion4 DATE,
					Responsable4 VARCHAR(50),
					Asunto4 VARCHAR(50),
					Destinatario4 VARCHAR(50),					
					Email4 VARCHAR(50),
					EstadoActuacion4 VARCHAR(50)
							
		)CHARACTER SET=utf8";

$conn2->query($sql);





##################### FORMULARIO LLAMADAS #################################################################


if(isset($_POST['addLlamada'])){

	$fe1 = $_POST['FechaActuacion1'];
	$r1 = $_POST['Responsable1'];
	$as1 = $_POST['Asunto1'];
	$de1 = $_POST['Destinatario1'];
	$mo1 = $_POST['Movil1'];
	$es1 = $_POST['Estado1'];

	$sql = "INSERT INTO LLamadas(FechaActuacion1, Responsable1, Asunto1, Destinatario1, Movil1, EstadoActuacion1)
			VALUES('$fe1','$r1','$as1','$de1','$mo1','$es1')";

}

$conn2->query($sql);


################## FORMULARIO SMS #########################################################

if(isset($_POST['addSms'])){

	$fe2 = $_POST['FechaActuacion2'];
	$r2 = $_POST['Responsable2'];
	$as2 = $_POST['Asunto2'];
	$de2 = $_POST['Destinatario2'];
	$mo2 = $_POST['Movil2'];
	$es2 = $_POST['Estado2'];

	$sql = "INSERT INTO SMS(FechaActuacion2, Responsable2, Asunto2, Destinatario2, Movil2, EstadoActuacion2)
			VALUES('$fe2','$r2','$as2','$de2','$mo2','$es2')";

}

$conn2->query($sql);

#################### FORMULARIO EMAIL #####################################################


if(isset($_POST['addMail'])){

	$fe3 = $_POST['FechaActuacion3'];
	$r3 = $_POST['Responsable3'];
	$as3 = $_POST['Asunto3'];
	$de3 = $_POST['Destinatario3'];
	$ma3 = $_POST['Email3'];
	$es3 = $_POST['Estado3'];

	$sql = "INSERT INTO Email(FechaActuacion3, Responsable3, Asunto3, Destinatario3, Email3, EstadoActuacion3)
			VALUES('$fe3','$r3','$as3','$de3','$ma3','$es3')";

}

$conn2->query($sql);



################# FORMULARIO NEWSLETTER ##################################################


if(isset($_POST['addNL'])){

	$fe4 = $_POST['FechaActuacion4'];
	$r4 = $_POST['Responsable4'];
	$as4 = $_POST['Asunto4'];
	$de4 = $_POST['Destinatario4'];
	$ma4 = $_POST['Email4'];
	$es4 = $_POST['Estado4'];

	$sql = "INSERT INTO Newsletter(FechaActuacion4, Responsable4, Asunto4, Destinatario4, Email4, EstadoActuacion4)
				VALUES('$fe4','$r4','$as4','$de4','$ma4','$es4')";

}

$conn2->query($sql);


########## BUSCADOR LLAMADAS ######################################################################

	$fe1 = "";
	$r1 = "";
	$as1 = "";
	$de1 = "";
	$mo1 = "";
	$es1 = "";


if(isset($_POST['buscaLlamadas'])){ 

	$fe1 = $_POST['FechaActuacion1'];
	$r1 = $_POST['Responsable1'];
	$as1 = $_POST['Asunto1'];
	$de1 = $_POST['Destinatario1'];
	$mo1 = $_POST['Movil1'];
	$es1 = $_POST['Estado1'];

}

$sql = "SELECT FechaActuacion1, Responsable1, Asunto1, Destinatario1, Movil1, EstadoActuacion1 FROM LLamadas WHERE 
					
		FechaActuacion1 = '$fe1' OR
		Responsable1 = '$r1' OR
		Asunto1 = '$as1' OR
		Destinatario1 = '$de1' OR
		Movil1 = '$mo1' OR
		EstadoActuacion1 = '$es1'

		";


$resultado = $conn2->query($sql);

	$llamadas = "<table class='table table-striped table-dark'>";

	if($resultado->num_rows > 0){ 
				
				$llamadas .= "<th scope='col'>FECHA</th>";
				$llamadas .= "<th scope='col'>RESPONSABLE</th>";
				$llamadas .= "<th scope='col'>ASUNTO</th>";				
				$llamadas .= "<th scope='col'>DESTINATARIO/A</th>";
				$llamadas .= "<th scope='col'>MÓVIL</th>";
				$llamadas .= "<th scope='col'>ESTADO</th>";
					
								
			while ($row = $resultado->fetch_assoc() ){ 
			  
				$llamadas .= "<tr>";

				foreach ($row as $v) {

					$llamadas .= "<td>";
					$llamadas .= $v;
					$llamadas .= "</td>";

				}
				
				$llamadas .= "<td></td>
							</tr>";
			}
	}

$llamadas .= "</table>";




########## BUSCADOR SMS ######################################################################


	$fe2 = "";
	$r2 = "";
	$as2 = "";
	$de2 = "";
	$mo2 = "";
	$es2 = "";


if(isset($_POST['buscaSms'])){ 

	$fe2 = $_POST['FechaActuacion2'];
	$r2 = $_POST['Responsable2'];
	$as2 = $_POST['Asunto2'];
	$de2 = $_POST['Destinatario2'];
	$mo2 = $_POST['Movil2'];
	$es2 = $_POST['Estado2'];

}

$sql = "SELECT FechaActuacion2, Responsable2, Asunto2, Destinatario2, Movil2, EstadoActuacion2 FROM SMS WHERE 
					
		FechaActuacion2 = '$fe2' OR
		Responsable2 = '$r2' OR
		Asunto2 = '$as2' OR
		Destinatario2 = '$de2' OR
		Movil2 = '$mo2' OR
		EstadoActuacion2 = '$es2'

		";


$resultado = $conn2->query($sql);

	$sms = "<table class='table table-striped table-dark'>";

	if($resultado->num_rows > 0){ 
				
				$sms .= "<th scope='col'>FECHA</th>";
				$sms .= "<th scope='col'>RESPONSABLE</th>";
				$sms .= "<th scope='col'>ASUNTO</th>";				
				$sms .= "<th scope='col'>DESTINATARIO/A</th>";
				$sms .= "<th scope='col'>MÓVIL</th>";
				$sms .= "<th scope='col'>ESTADO</th>";
					
								
			while ($row = $resultado->fetch_assoc() ){ 
			  
				$sms .= "<tr>";

				foreach ($row as $v) {

					$sms .= "<td>";
					$sms .= $v;
					$sms .= "</td>";

				}
				
				$sms .= "<td>
							<form method='POST' action='busqueda.php'>
								<button id='botonEditar' type='submit' value='editar' name='editarEstadoSms' 
								class='btn btn-info'>Enviado</button>
							</form>
						</td>
						</tr>";
			}
	}

$sms .= "</table>";



########## BUSCADOR EMAILS ######################################################################

	$fe3 = "";
	$r3 = "";
	$as3 = "";
	$de3 = "";
	$ma3 = "";
	$es3 = "";


if(isset($_POST['buscaMail'])){ 

	$fe3 = $_POST['FechaActuacion3'];
	$r3 = $_POST['Responsable3'];
	$as3 = $_POST['Asunto3'];
	$de3 = $_POST['Destinatario3'];
	$ma3 = $_POST['Email3'];
	$es3 = $_POST['Estado3'];

}

$sql = "SELECT FechaActuacion3, Responsable3, Asunto3, Destinatario3, Email3, EstadoActuacion3 FROM Email WHERE 
					
		FechaActuacion3 = '$fe3' OR
		Responsable3 = '$r3' OR
		Asunto3 = '$as3' OR
		Destinatario3 = '$de3' OR
		Email3 = '$ma3' OR
		EstadoActuacion3 = '$es3'

		";


$resultado = $conn2->query($sql);

	$email = "<table class='table table-striped table-dark'>";

	if($resultado->num_rows > 0){ 
				
				$email .= "<th scope='col'>FECHA</th>";
				$email .= "<th scope='col'>RESPONSABLE</th>";
				$email .= "<th scope='col'>ASUNTO</th>";				
				$email .= "<th scope='col'>DESTINATARIO/A</th>";
				$email .= "<th scope='col'>MÓVIL</th>";
				$email .= "<th scope='col'>ESTADO</th>";
					
					
								
			while ($row = $resultado->fetch_assoc() ){ 
			  
				$email .= "<tr>";

				foreach ($row as $v) {

					$email .= "<td>";
					$email .= $v;
					$email .= "</td>";

				}
				
				$email .= "<td>
							<form method='POST' action='busqueda.php'>
								<button id='botonEditar' type='submit' value='editar' name='editarEstadoEmail' 
								class='btn btn-info'>Enviado</button>
							</form>
						</td>
						</tr>";
			}
	}

$email .= "</table>";




########## BUSCADOR NEWSLETTER ######################################################################

	$fe4 = "";
	$r4 = "";
	$as4 = "";
	$de4 = "";
	$ma4 = "";
	$es4 = "";


if(isset($_POST['buscaNL'])){ 

	$fe4 = $_POST['FechaActuacion4'];
	$r4 = $_POST['Responsable4'];
	$as4 = $_POST['Asunto4'];
	$de4 = $_POST['Destinatario4'];
	$ma4 = $_POST['Email4'];
	$es4 = $_POST['Estado4'];

}

$sql = "SELECT FechaActuacion4, Responsable4, Asunto4, Destinatario4, Email4, EstadoActuacion4 FROM Newsletter WHERE 
					
		FechaActuacion4 = '$fe4' OR
		Responsable4 = '$r4' OR
		Asunto4 = '$as4' OR
		Destinatario4 = '$de4' OR
		Email4 = '$ma4' OR
		EstadoActuacion4 = '$es4'

		";


$resultado = $conn2->query($sql);

	$nl = "<table class='table table-striped table-dark'>";

	if($resultado->num_rows > 0){ 
				
				$nl .= "<th scope='col'>FECHA</th>";
				$nl .= "<th scope='col'>RESPONSABLE</th>";
				$nl .= "<th scope='col'>ASUNTO</th>";				
				$nl .= "<th scope='col'>DESTINATARIO/A</th>";
				$nl .= "<th scope='col'>MÓVIL</th>";
				$nl .= "<th scope='col'>ESTADO</th>";
					
								
			while ($row = $resultado->fetch_assoc() ){ 
			  
				$nl .= "<tr>";

				foreach ($row as $v) {

					$nl .= "<td>";
					$nl .= $v;
					$nl .= "</td>";

				}
				
				$nl .= "<td>
							<form method='POST' action='busqueda.php'>
								<button id='botonEditar' type='submit' value='editar' name='editarEstadoNl' 
								class='btn btn-info'>Enviada</button>
							</form>
						</td>
						</tr>";
			}
	}

$nl .= "</table>";

*/

?>