<?php

	session_start();

?>

<!doctype html>

<html>

	<head>

		<meta charset="utf-8">

		<title>Login</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <link rel="stylesheet" type="text/css" href="css/generales.css">
        <link rel="stylesheet" type="text/css" href="css/login.css">

    </head>
	<body>
    	<div class="contenedor-principal">

        	<?php

				$mensaje="";

        		if(isset($_POST['login'])){

					require_once('funciones/conexion.php');
					require_once('funciones/funciones.php');

					$data=array($_POST['usuario'],$_POST['password']);

					if(verificar_datos($data)){

						$usuario=limpiar($con,$_POST['usuario']);
						$password=limpiar($con,$_POST['password']);
						$password=encriptarMd5($password);

						$sql="select * from usuarios where usuario='$usuario' and password='$password'";
						$error="Error al logear al usuario";
						$buscar=consulta($con,$sql,$error);

						$no=mysqli_num_rows($buscar);

						if($no>0){

							$usuario=mysqli_fetch_assoc($buscar);

							$_SESSION['id']=$usuario['id'];
							$_SESSION['usuario']=$usuario['usuario'];
							$_SESSION['password']=$usuario['password'];
							$_SESSION['idCaja']=$usuario['idCaja'];

						echo '<script>location="caja.php"</script>';

						}else{

							$mensaje="<span class='mensaje'>Usuario o contraseña incorrectos</span>";

						}

					}else{

						$mensaje="<span class='mensaje'>Hay campos vacios</span>";

					}

				}


			?>
        		<section>

                	<form action="<?php $_SERVER['PHP_SELF']?>" method="post" name="formLogin" id="formLogin" class="form-login">

										<img src="/../Login/img/avatar-u.png" class="avatar">
										<br>
										<br>
										<br>
										<br>
                    	<h1>Iniciar Sesión</h1>

                        <div class="contenedor-controles">
                        	<p>Usuario</p><input type="text" name="usuario" id="usuario" placeholder="Ingrese su usuario">
                        	<p>Contraseña</p><input type="password" name="password" id="password" placeholder="Ingrese su contraseña">
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
													<center>
											 <button type="submit" name="login" id="login" value="Login" class="btn btn-info center-block btn-lg"><a>Ingresar</a></button>
										</center>

                    	</div>

                        <span class="mensajes"><?php echo $mensaje;?></span>

                    </form>

                    <a href="index.php" class="link-menu"><strong> Menu Principal</strong></a>
										<br>
										<br>
										<br>
                </section>

        </div>

	</body>

</html>
