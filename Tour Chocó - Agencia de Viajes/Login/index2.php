<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.html");
}elseif ($_SESSION['rol']==2) {
	//header("Location:index2.php");
  }
?>


<html>

    <head>

        <title>Usuario</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="form.css">

    </head>


    <body>

			<nav  class="navbar navbar-expand-lg navbar-light"style="background-color: #B41D4B;">
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			    <a class="navbar-brand" href="#"> <strong> Bienvenido(a) - <?php echo $_SESSION['user'];?> </strong> </a>
			    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			      <li class="nav-item active">

			    </ul>
			    <form class="form-inline my-2 my-lg-0">
<a href="desconectar.php" class="btn btn-light btn-lg active" role="button" aria-pressed="true">Cerrar Sesión</a>			    </form>
			  </div>
			</nav>



<div class="contenedor">
</p>
</div>


<div class="row">

</div>

</div>



      <div class="contenedor-principal">

        	<div class="contenedor-menu">

    									<div class="container-tarjetas">
									    <div class="card-deck mt-3">


                        <div class="card text-center" style="width: 18rem; background:transparent; border:none;">
                        <div class="card-body">


                      </div>
                      </div>



                      <div class="card text-center" style="width: 18rem; background:#B41D4B;box-shadow: 0px 10px 10px black;">
                        <img class="card-img-top" src="/../Tuturno/img/sturno.png" alt="Card image cap" width="50px" height="180px">
                        <div class="card-body">

                          <a href="/../Tuturno/turnos.php" target="blank" class="btn btn-light" > <strong> Visualizador de Turnos </strong></a>
                        </div>
                      </div>

                        <div class="card text-center" style="width: 18rem; background:#B41D4B;box-shadow: 0px 10px 10px black;">
												  <img class="card-img-top" src="/../Tuturno/img/turno.png" alt="Card image cap" width="50px" height="180px">
												  <div class="card-body">


														<?php
														echo <<<EOT
														<script type="text/javascript">
															function openIt(){
																window.open("/../Tuturno/solicitar_turno.php") //No es necesario el ; en JS
																window.open("/../Tuturno/turnos.php")
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


                        <div class="card text-center" style="width: 18rem; background:transparent; border:none;">
                        <div class="card-body">


                      </div>
                      </div>

                       </div>
                      </div>
                    </div>
                  </div>







    </body>



</html>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
