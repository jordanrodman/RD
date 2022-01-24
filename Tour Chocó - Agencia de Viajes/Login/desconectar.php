<!-- LOGIN Y REGISTRO  -->
<!-- V.01 -->
<!-- CREADOR -->
<!-- JHONATAN CARDONA --><!-- PRORAMADOR SOFTWARE --><!-- 2018 --><!-- copyright 2018- 2038 -->

<?php 
session_start();
if($_SESSION['user']){	
	session_destroy();
	header("location:index.php");
}
else{
	header("location:index.php");
}
?>