<!doctype html>
<html>

	<head>

		<meta charset="utf-8">

		<title>Controlador de turnos</title>

        <link rel="stylesheet" type="text/css" href="css/generales.css">
        <link rel="stylesheet" type="text/css" href="css/index.css">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
	<body>



    	<div class="contenedor-principal">

        	<div class="contenedor-menu">

            	<h1 class="titulo-seccion">Módulo de Asignación de Turnos - Administrador</h1>

									<div class="container-tarjetas">
									    <div class="card-deck mt-3">
												<div class="card text-center" style="width: 18rem; background:#B41D4B;box-shadow: 0px 10px 10px black;">
													<img class="card-img-top" src="img/sturno.png" alt="Card image cap" width="50px" height="180px">
													<div class="card-body">

														<a href="turnos.php" class="btn btn-light" > <strong> Visualizador de Turnos </strong></a>
													</div>
												</div>

												<div class="card text-center" style="width: 18rem; background:#B41D4B;box-shadow: 0px 10px 10px black;">
												  <img class="card-img-top" src="img/turno.png" alt="Card image cap" width="50px" height="180px">
												  <div class="card-body">


														<?php
														echo <<<EOT
														<script type="text/javascript">
															function openIt(){
																window.open("solicitar_turno.php") //No es necesario el ; en JS
																window.open("turnos.php")
															}
														</script>
														<a href="#" class="btn btn-light" onclick="openIt()"><strong> Solicitar Turno </strong></a></a>
														EOT;

														//El EOT; no puede tener nada a su derecha ni izquierda, excluyendo hasta los tabulados.
														//Con el <<<EOT se consigue escribir sin necesidad de concatenar
														//Recuerda habilitar los pop-ads de tu navegador porque sino solo se abrira una pestaña

														?>




													</div>
												</div>


												<div class="card text-center" style="width: 18rem; background:#B41D4B;box-shadow: 0px 10px 10px black;">
													<img class="card-img-top" src="img/iniciar-sesion.png" alt="Card image cap" width="50px" height="180px">
													<div class="card-body">

														<a href="login.php" class="btn btn-light" > <strong> Iniciar Sesión Empleados</strong></a>
													</div>
												</div>

												<div class="card text-center" style="width: 18rem; background:#B41D4B; box-shadow: 0px 10px 10px black;">
													<img class="card-img-top" src="img/usuario.png" alt="Card image cap" width="50px" height="180px">
													<div class="card-body">

														<a href="registrar_usuarios.php" class="btn btn-light" > <strong> Registrar Empleado </strong></a>
													</div>
												</div>

									    </div>
									  </div>


										<div class="container-tarjetas2">
										    <div class="card-deck mt-3">
													<div class="card text-center" style="width: 18rem; background:#B41D4B;box-shadow: 0px 10px 10px black;">
														<img class="card-img-top" src="img/department.png" alt="Card image cap" width="50px" height="180px">
														<div class="card-body">

															<a href="registrar_cajas.php" class="btn btn-light" > <strong> Registrar Área </strong></a>
														</div>
													</div>

													<div class="card text-center" style="width: 18rem; background:#B41D4B;box-shadow: 0px 10px 10px black;">
													  <img class="card-img-top" src="img/information.png" alt="Card image cap" width="50px" height="180px">
													  <div class="card-body">

													    <a href="info_empresa.php" class="btn btn-light" > <strong> Información de la Empresa </strong></a>
														</div>
													</div>


													<div class="card text-center" style="width: 18rem; background:#B41D4B;box-shadow: 0px 10px 10px black;">
														<img class="card-img-top" src="img/reiniciar.png" alt="Card image cap" width="50px" height="180px">
														<div class="card-body">

															<a href="#" id="reset" class="btn btn-light" > <strong> Reiniciar Turnos </strong></a>
														</div>
													</div>

														<div class="card text-center" style="width: 18rem; background:transparent; border:none;">
														<div class="card-body">


													</div>
													</div>


            </div><!--contenedor-->

        </div><!--contenedor principal-->

        <script src="js/funcionesGenerales.js"></script>

        <script>

			agregarEvento(window, 'load', iniciarReset, false);

			function iniciarReset(){

				var resetear = document.getElementById('reset');
				agregarEvento(resetear, 'click', function(e){

					if(e){

						e.preventDefault();

						id=e.target.id;

					}

					var datos = "registrar=reset-turnos";

					funcion = procesarReseteo;
					fichero = "consultas/registrar.php";

					conectarViaPost(funcion,fichero,datos);

				},false);

				function procesarReseteo(){

					if(conexion.readyState == 4){

						var data = JSON.parse(conexion.responseText);

						if(data.status == "correcto"){

							alert(data.mensaje);

						}else{

							console.log(data.mensaje);

						}

					}else{

						console.log('cargando');
					}

				}

			}

		</script>

	</body>

</html>
