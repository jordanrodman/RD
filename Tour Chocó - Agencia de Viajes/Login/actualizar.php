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
         <title>Actualizar Datos de Usuario</title>
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
         <link rel="stylesheet" type="text/css" href="stylea.css">

         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
				 <link rel="stylesheet" type="text/css" href="form.css">



      </head>

<center>

      <body data-offset="50" background="images/28035048_829479317254510_2067725162_o.jpg" style="background-attachment: fixed">


      <div class="container" id="contenedor">

        <div class="row">
        	<div class="span12">
        		<div class="caption">
        		<div class="well well-small">
        			<br>
        		<div style="text-align: center;"><h1>USUARIOS</h1>	</div><a href="desconectar.php"><center><button class="btn btn-primary">Cerrar</button></center></a>

        		<div class="row-flex">

      <?php

      // Dirección o IP del servidor MySQL
      $host = "localhost";

      // Puerto del servidor MySQL
      $puerto = "3306";

      // Nombre de usuario del servidor MySQL
      $usuario = "root";

      // Contraseña del usuario
      $contrasena = "jordancr7-pepe";

      // Nombre de la base de datos
      $baseDeDatos ="crud";

      // Nombre de la tabla a trabajar
      $tabla = "login";

      function Conectarse()
      {
         global $host, $puerto, $usuario, $contrasena, $baseDeDatos, $tabla;

         if (!($link = mysqli_connect($host.":".$puerto, $usuario, $contrasena)))
         {
            echo "Error conectando a la base de datos.<br>";
            exit();
            }
         else
         {
            echo "<strong>Conectado a la base de datos</strong><br>";
         }
         if (!mysqli_select_db($link, $baseDeDatos))
         {
            echo "Error seleccionando la base de datos.<br>";
            exit();
         }
         else
         {
            echo "<strong>La base de datos: $baseDeDatos se cargó sin problemas.</strong><br>";
         }
      return $link;
      }

      $link = Conectarse();

      if($_POST)
      {
         $queryUpdate = "UPDATE $tabla SET user = '".$_POST['nombreForm']."',
                        email = '".$_POST['emailForm']."',
                        password = '".$_POST['passForm']."'
                        WHERE id = ".$_POST['idForm'].";";

         $resultUpdate = mysqli_query($link, $queryUpdate);

         if($resultUpdate)
         {
            echo "<strong>El registro ID ".$_POST['idForm']." con exito</strong>. <br>";
         }
         else
         {
            echo "No se pudo actualizar el registro. <br>";
         }

      }

      $query = "SELECT id, user, email, password FROM $tabla;";

      $result = mysqli_query($link, $query);

      ?>
    <br>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="contenedor-tabla" id="contenedor-tabla">


  <?php
      require("conexion.php");
      $sql=("SELECT * FROM login");

      $query=mysqli_query($mysqli,$sql);

      echo"<table border='5' align='center';>";
        echo "<tr class='warning'>";
          echo "<td> <strong> Nombre </strong></td>";
          echo "<td><strong>Correos</strong></td>";
          echo "<td><strong>Contraseñas</strong></td>";
          echo "<td></td>";
          echo "</tr>";
?>
<center>
      <?php

      while($row = mysqli_fetch_array($result))
      {
  echo "<tr class='success'>";
         echo "<tr>";
         echo "<td>";
         echo $row["user"];
         echo "</td>";
         echo "<td>";
         echo $row["email"];
         echo "</td>";
         echo "<td>";
         echo $row["password"];
         echo "</td>";
         echo "<td>";
         echo "<a href=\"?id=".$row["id"]."\">Actualizar</a>";
         echo "</td>";
         echo "</tr>";
	echo "</tr>";
      }

      mysqli_free_result($result);

      ?>

      </div>

</center>
      </table>
      <hr>

      <?php
      if($_GET)
      {
         $querySelectByID = "SELECT id, user, email, password FROM $tabla WHERE id = ".$_GET['id'].";";

         $resultSelectByID = mysqli_query($link, $querySelectByID);

         $rowSelectByID = mysqli_fetch_array($resultSelectByID);
      ?>

      <form action="" method="post">
         <input type="hidden" value="<?=$rowSelectByID['id'];?>" name="idForm">
         Usuario: <input type="text" name="nombreForm" value="<?=$rowSelectByID['user'];?>"> <br> <br>
         Correo: <input type="text" name="emailForm" value="<?=$rowSelectByID['email'];?>"> <br> <br>
         Contraseña: <input type="text" name="passForm" value="<?=$rowSelectByID['password'];?>"> <br> <br>
         <input type="submit" value="Guardar">
      </form>

      <?php
      }
      mysqli_close($link);
      ?>


      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>

      	</style>

        <center>


        <br>
        <br>
        <br>
        <br>
        <br>




      </body>

      </html>
