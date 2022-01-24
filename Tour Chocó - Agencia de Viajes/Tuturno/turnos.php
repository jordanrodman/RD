<!doctype html>
<html>
	<head>

    	<meta charset="utf-8">

    	<title>Turnos</title>

        <link rel="stylesheet" type="text/css" href="css/generales.css">
        <link rel="stylesheet" type="text/css" href="css/turnos.css">
        <link rel="stylesheet" type="text/css" href="css/responsivo-turnos.css">
				<link rel="preconnect" href="https://fonts.gstatic.com">
				<link href="https://fonts.googleapis.com/css2?family=Asap&display=swap" rel="stylesheet">
				<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    </head>
	<body>

        <div class="contenedor-principal">


            <?php

                require_once('funciones/conexion.php');
                require_once('funciones/funciones.php');

                //datos de la empresa
                $sql = "select * from info_empresa";
                $error = "Error al cargar datos de la empresa ";
                $search = consulta($con, $sql, $error);

                $info = mysqli_fetch_assoc($search);


                //turno atendido
                $sqlTA = "select turno, idCaja from atencion order by turno desc";
                $errorTA = "Error al cargar el turno atendido";
                $searchTA = consulta($con, $sqlTA, $errorTA);

                if(mysqli_num_rows($searchTA) > 1){

                    $turno = mysqli_fetch_assoc($searchTA);
                    $numeroTurno = $turno['turno'];
                    $caja = $turno['idCaja'];

                }else{

                    $numeroTurno = '000';
                    $caja = '0';

                }


                //ultimos 5 turnos atendidos
                $sqlUT = "select id, turno, idCaja from atencion order by turno desc limit 5";
                $errorUT = "Error al cargar los ultimos 5 turnos atendidos";
                $searchUT = consulta($con, $sqlUT, $errorUT);

            ?>

            <header>

                <div class="marco-tablaTurnos">

                    <div class="contenedor-tablaTurnos">
                        <div class="columna-tablaTurnos">
                            <div style="color:black;" class="tabla-turnosArriba">Turno</div>
                            <div  style="color:black;" class="tabla-turnosAbajo" id="verTurno"><?php echo $numeroTurno; ?></div>

                        </div>
                        <div class="columna-tablaTurnos">
                            <div style="color:black;" class="tabla-turnosArriba">Caja</div>
                            <div style="color:black;" class="tabla-turnosAbajo" id="verCaja"><?php echo $caja; ?></div>
                        </div>
                    </div>

                </div>

            </header>

            <section class="contenido">

                <div class="contenido-izquierda">

                    <header class="contenedor-logo">

                        <div class="logo-empresa">

                            <img src="<?php echo $info['logo'];?>">

                        </div>

                        <h1 class="nombre-empresa"><?php echo $info['nombre'];?> - Bienvenido(a)</h1>

                    </header>

                    <div class="contenedor-video">

                        <div class="contenedor-reproductor">


																<iframe width="853" height="480" src="https://www.youtube.com/embed/7HnPCLIM2kc?autoplay=1&mute=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>

                    </div>

                </div>

                <div class="contenido-derecha">


									  <div class="contenedor-turnos">

									       <table class="tabla-turnos" id="tabla-turnos">
                            <tr><th>Turno</th><th colspan="2">Caja</th></tr>
                            <?php

                                if(mysqli_num_rows($searchUT) != 0){

                                    $c = 0;
                                    $data = '';

                                    while ($row = mysqli_fetch_assoc($searchUT)){

                                        //if($c > 0){

                                            $data .=  $row['turno'].'|'.$row['idCaja'].'|tr|';

                                        //}

                                        if($c === 0){

                                            echo "<tr><td><span  class='primer-fila'>$row[turno]</span></td><td class='td-caja'><span class='caja primer-fila'>Caja</span></td><td class='no-caja'><span  class='primer-fila'>$row[idCaja]</span></td></tr>";

                                        }else{

                                            echo "<tr><td>$row[turno]</td><td class='td-caja'><span class='caja'>Caja</span></td><td class='no-caja'>$row[idCaja]</td></tr>";

                                        }

                                        $c++;

                                    }

                            }


														?>

                        </table>

                        <input type="hidden" name="turnos" id="turnos" value="<?php echo $data; ?>">

												<div id=horario class="horario">
										<h3 class="nombre-empresa"> Fecha y hora </h3>
													<?php
												$hora = new DateTime("now", new DateTimeZone('America/Bogota'));
												echo $hora->format('d-m-Y (g:i:s)');
												?>


                    </div><!--contenedor turnos-->

  							</div>
                </div>

            </section><!--contenido-->

            <footer class="footer">

                <marquee class="noticias">Bienvenido(a) a nuestro sistema de asigniación de turnos, recuerde utilizar todas las medidas de bioseguridad al ingresar a nuestros Centros de Atención.</marquee>

            </footer>

        </div><!--contenedor principal-->

        <audio src="tonos/hangouts_message.ogg" id="tono" autoplay></audio>

        <script src="js/funcionesGenerales.js"></script>
		<script src="js/websocket.js"></script>

    </body>

</html>
