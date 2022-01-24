<?php



$server = 'localhost';
$username = 'root';
$password = 'jordancr7-pepe';
$database = 'newsletter';


//por si hay errors de conexion un mensaje "Error con el servidor de la Base de datos".
$conexion = mysqli_connect  ($server,$username,"jordancr7-pepe") or die ("Error con el servidor de la Base de datos");


//por si hay errors de conexion un mensaje "Error al conectarse a la Base de datos".
$db = mysqli_select_db($conexion, $database) or die ("Error al conectarse a la Base de datos");


        //recuperar las variables
if (isset($_POST['submit'])){
    $nombre=$_POST['name']; //name="nombre"
    $correo=$_POST['email']; //name="correo"

    $campos = array ();

    if ($nombre ==""){
          array_push($campos, "El campo Nombre no puede estar vacío");
        }

            if ($correo =="" || strpos($correo, "@")=== false){
                  array_push($campos, "Ingrese una dirección de correo válida");
                }
              if(count($campos) > 0){

                  echo "<div class='error'>";
                  for ($i = 0; $i < count($campos); $i++){
                    echo "<li>".$campos[$i]."</div>";

                  }

              } else{

                    //sentencia sql
                    $sql="INSERT INTO newsletter
                     VALUES ('$nombre','$correo')"; //manda a traer los valores de '$nombre','$correo','$mensaje'

                    //ejecutamos la sentencia de sql
                    $ejecutar=mysqli_query($conexion, $sql);


                if(!$ejecutar){
                 die ('could not post data' . mysqli_error());
                }else {

                header('location: index.html?Gracias por suscribirte');
                exit ();
                }

              }

}






 ?>
