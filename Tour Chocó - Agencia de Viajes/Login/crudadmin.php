<!-- LOGIN Y REGISTRO  -->
<!-- V.01 -->
<!-- CREADOR -->
<!-- JHONATAN CARDONA --><!-- PRORAMADOR SOFTWARE --><!-- 2018 --><!-- copyright 2018- 2038 -->



<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.html");
}elseif ($_SESSION['rol']==2) {
	header("Location:index2.php");
}
?>



<html>
  <head>
    <meta charset="utf-8" class="jhontastic">
    <title>Crud</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>


      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="form.css">
  </head>




<body data-offset="50" background="images/28035048_829479317254510_2067725162_o.jpg" style="background-attachment: fixed">


<div class="container">

<div class="row">
	<?php
	include("cabecera.php");
	?>
</div>
<center>

<br>
<br>
<br>
<br>
<br>


<br>


<div class="row">
	<div class="span12">
		<div class="caption">
		<div class="well well-small">
			<br>
		<div style="text-align: center;"><h2>Tabla de usuarios registrados</h2>	</div><a href="desconectar.php"><center><button class="btn btn-primary">Cerrar</button></center></a>
		<hr class="soft"/>
		<div style="text-align: center;"><h4>CRUD</h4></div>
		<div class="row-fluid">





			<?php

				require("conexion.php");
				$sql=("SELECT * FROM login");

				$query=mysqli_query($mysqli,$sql);

				echo "<table border='5';>";
					echo "<tr class='warning'>";
						echo "<td>Id</td>";
						echo "<td>Nombre Usuario</td>";
						echo "<td>Contraseña Usuario</td>";
						echo "<td>Correo Eletrónico</td>";
						echo "<td>Contraseña del Administrador</td>";
						echo "<td>Editar información</td>";
						echo "<td>Eliminar cuenta</td>";
					echo "</tr>";


			?>

			<?php
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[3]</td>";
				    	echo "<td>$arreglo[4]</td>";

				    	echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='img/actualizar.png'width='70' height='70' class='img-rounded'></td>";
						echo "<td><a href='crudadmin.php?id=$arreglo[0]&idborrar=2'><img src='img/eliminar.png' class='img-rounded'/></a></td>";



					echo "</tr>";
				}

				echo "</table>";

					extract($_GET);
					if(@$idborrar==2){

						$sqlborrar="DELETE FROM login WHERE id=$id";
						$resborrar=mysqli_query($mysqli,$sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						echo "<script>location.href='crudadmin.php'</script>";
					}





			?>
		</center>

			<br>
			<br>
			<br>
			<br>
			<br>



		</div>


		</div>






</div>

	</div>
</div>

</div>

    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>
