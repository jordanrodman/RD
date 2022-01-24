
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Compra de Paquetes</title>
     <!--GOOGLE FONTS -->
     <link href="https://fonts.googleapis.com/css2?family=Titillium+Web" rel="stylesheet">
     <link rel="stylesheet" href="assets/css/style.css">
     <!--  bootstrap 4 -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <!-- Icons-->
     <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
     <script src="https://kit.fontawesome.com/56fdc4ca99.js" crossorigin="anonymous"></script>
     <!--FAVICON -->
 <link href="img/Tourchoco.jpg" rel="icon" type="image/x-icon" />


   </head>
   <body>

     <?php require "partials/header.php" ?>

     <div class="container">
       <div class="row justify-content-center">
         <div class="m-5">
  <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
<div class="card-header"> <h5>Mensaje enviado con éxito</h5></div>
<div class="card-body">
 <h5 class="card-title">¡Gracias por escribirnos!</h5>
 <p class="card-text">Muy pronto responderemos a tu solicitud.</p>
</div>
</div>
</div>
</div>
</div>

   </body>
 </html>


<?php

$server = 'localhost';
$username = 'root';
$password = 'jordancr7-pepe';
$database = 'formulario';

//por si hay errors de conexion un mensaje "Error con el servidor de la Base de datos".
$conexion = mysqli_connect  ($server,$username,"jordancr7-pepe") or die ("Error con el servidor de la Base de datos");


//por si hay errors de conexion un mensaje "Error al conectarse a la Base de datos".
$db = mysqli_select_db($conexion, $database) or die ("Error al conectarse a la Base de datos");


if (isset($_POST['submit'])){
    $nombre=$_POST['name']; //name="nombre"
    $correo=$_POST['email']; //name="correo"
    $asunto=$_POST['subject']; //name="asunto"
    $mensaje=$_POST['message']; //name="mensaje"

    $campos = array ();

    if ($nombre ==""){
          array_push($campos, "El campo Nombre no puede estar vacío");
        }

            if ($correo =="" || strpos($correo, "@")=== false){
                  array_push($campos, "Ingrese una dirección de correo válida");
                }

                    if ($asunto ==""){
                          array_push($campos, "El campo Asunto no puede estar vacío");
                        }

                            if ($mensaje ==""){
                                  array_push($campos, "El campo Mensaje no puede estar vacío");
                                }

              if(count($campos) > 0){

                  echo "<div class='error'>";
                  for ($i = 0; $i < count($campos); $i++){
                    echo "<li>".$campos[$i]."</div>";

                  }

              } else{
                $sql="INSERT INTO datos VALUES ('$nombre','$correo','$asunto','$mensaje')"; //manda a traer los valores de '$nombre','$correo','$mensaje'

                //ejecutamos la sentencia de sql
                $ejecutar=mysqli_query($conexion, $sql);

              }

}


 ?>
