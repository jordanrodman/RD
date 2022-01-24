<!-- LOGIN Y REGISTRO  -->
<!-- V.01 -->
<!-- CREADOR -->
<!-- JHONATAN CARDONA --><!-- PRORAMADOR SOFTWARE --><!-- 2018 --><!-- copyright 2018- 2038 -->

<!DOCTYPE>
<head>
<title>Login</title>

  <meta charset="utf-8">


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="form.css">

</head>


<body>

    <div class="container-formulario" >

<br>
<br>
<br>
   <center>



                <form action="validar.php" method="post">

                    <div class="form-group">
                       <img src="img/avatar-u.png" class="avatar">
                       <h1>  Iniciar Sesión</h1>
                       <form class="" action="index.html" method="post">
                        <p>Correo electrónico</p>
                        <input type="text" name="mail" class="form-control Input" required placeholder="">
                        <p>Contraseña</p>
                        <input type="password" name="pass" id="contraseña"class="form-control col-xs-12 Input" required placeholder="">
                        <p>Mostrar contraseña <input type="checkbox" onclick="myFunction()"> </p>
                      <script>
                      function myFunction() {
                        var x = document.getElementById("contraseña");
                        if (x.type === "password") {
                          x.type = "text";
                        } else {
                          x.type = "password";
                        }
                      }
                      </script>
                        <button type="submit" name="submit" class="btn btn-success center-block btn-lg"><a>Ingresar</a></button>
                        <button type="submit" class="btn btn-danger center-block btn-lg"><a href="registro.php">Registrar</a></button>
                      <!--   <button type="reset" class="btn btn-danger center-block btn-lg"><a> Limpiar </a></button>  -->
                       </form>


                        </div>
                    </form>

</body>
</html>
