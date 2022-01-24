<!-- LOGIN Y REGISTRO  -->
<!-- V.01 -->
<!-- CREADOR -->
<!-- JHONATAN CARDONA --><!-- PRORAMADOR SOFTWARE --><!-- 2018 --><!-- copyright 2018- 2038 -->

<?php

session_start();
	require("conexion.php");

	$username=$_POST['mail'];
	$pass=$_POST['pass'];


	$sql2=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['pasadmin']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			$_SESSION['rol']=$f2['rol'];

			echo '<script>alert("ADMINISTRADOR")</script> ';
			echo "<script>location.href='crudadmin.php'</script>";

		}
	}


	$sql=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['password']){
			$_SESSION['id']=$f['id'];
			$_SESSION['user']=$f['user'];
			$_SESSION['rol']=$f['rol'];

			header("Location: index2.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';

			echo "<script>location.href='index.php'</script>";
		}
	}else{

		echo '<script>alert("CUENTA NO EXISTENTE/REGISTRATE")</script> ';

		echo "<script>location.href='registro.php'</script>";

	}

?>
