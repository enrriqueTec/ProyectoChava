<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$c=$_POST['txt_clave_materia'];
	$n=$_POST['txt_Nombre_materia'];
	$cm=$_POST['txt_creditos_materia'];
	

	$sql="INSERT INTO materias(clave,Nombre,creditos) values ('$c','$n','$cm')";
	echo $result=mysqli_query($conexion,$sql);

 ?>