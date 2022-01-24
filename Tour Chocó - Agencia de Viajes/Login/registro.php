<!-- LOGIN Y REGISTRO  -->
<!-- V.01 -->
<!-- CREADOR -->
<!-- JHONATAN CARDONA --><!-- PRORAMADOR SOFTWARE --><!-- 2018 --><!-- copyright 2018- 2038 -->


<?php
    session_start();

    if (isset($_POST['validar'])) {
        $_SESSION['userID'] = $_POST['userID'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['picture'] = $_POST['picture'];
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['accessToken'] = $_POST['accessToken'];

        exit("success");
    }
?>

<!DOCTYPE>
<head>
<title>Registrarse</title>

  <meta charset="utf-8">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="formregistrase.css">

</head>


<body>

    <div class="container-formulario">


   <center>
                <form action="registrar.php" method="post">

                    <div class="form-group">
                       <img src="img/avatar-u.png" class="avatar">
                       <br>
                       <br>
                       <br>
                       <h1> <strong>REGISTRARSE</strong></h1>
                       <p>Nombre</p>
                         <input type="text" name="realname" class="form-control Input" required placeholder="">
                         <p>Correo</p>
                         <input type="text" name="nick" class="form-control col-xs-12 Input" required placeholder="">
                         <p>Contraseña</p>
                         <input type="password" name="pass" id="password"class="form-control col-xs-12 Input" required placeholder="">
                         <div class="form-group">
                           <p>Mostrar contraseña <input type="checkbox" onclick="myFunction()"> </p>
                         <script>
                         function myFunction() {
                           var x = document.getElementById("password");
                           if (x.type === "password") {
                             x.type = "text";
                           } else {
                             x.type = "password";
                           }
                         }
                         </script>


                         <button type="submit" class="btn btn-primary center-block btn-lg">Registrar</button>
                         <button type="reset" class="btn btn-danger center-block btn-lg"><a href="index.php">Volver</a></button>
                    <!--     <button type="reset" class="btn btn-danger center-block btn-lg">Eliminar</button> -->
                    </div>
                        </div>
                </form>
              </div>
</center>
<?php
    if(isset($_POST['submit'])){
      require("registrar.php");
    }
  ?>


</body>
</html>
