<?php
	session_start();

	if(isset($_SESSION['user'])){

		$Nombre = $_SESSION['user'];

		$_SESSION['user']=$Nombre;
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Mi Perfil</title>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css.css">
	<title>Mi Perfil</title>
	<link rel="stylesheet" type="text/css" href="Perfil.css">
	<?php require_once "scripts.php"?>
</head>
<body style="background-color: #ADADAD">

	<nav class="container" >
		<br>
		<nav class="navbar" style="background-color: #CD1111">
		<table class="table1" align="right"  >
			<tr>
			<th><form action="PerfilP.php"><button class="btn btn-default">Inicio </button></form></th>
			<th><th><form action="Perfil.php"><button class="btn btn-default">Configuraciones</button></form></th><th>
			<th><form action="Login.php"><button class="btn btn-danger">Cerrar sesion</button></form></th>
			</tr>
			</table>
		</nav>
		<br><br><br>

			<h1 align="center">Mi Perfil</h1>
		<nav>
			<table align="center">
			<tr>
			<th><?php
            require_once "../Modelo/conexion.php";
            $conexion=conexion();
            $sql = mysqli_query($conexion,"SELECT Imagen from usuario where Nombre = '$Nombre'");
            while ($res = mysqli_fetch_array($sql)) {
        	echo '<img src="'.$res["Imagen"] .'"width="100">';
            };
            ?></th>
			</tr>


		</nav>
		<br>
<nav >
	<table align="center">
		<tr>	<br>
	<th><h4>Nombre: &nbsp</h4></th>
	<th>

		<?php $conexion=conexion();
            $sql = mysqli_query($conexion,"SELECT Nombre from usuario where Nombre = '$Nombre'");
            while ($res = mysqli_fetch_array($sql)) {
        	echo $res["Nombre"] ;
            };
            ?>
            </th>

</tr>
<tr>
            <th><h4>Apellido: &nbsp</h4></th>
	<th>

		<?php $conexion=conexion();
            $sql = mysqli_query($conexion,"SELECT Apellido from usuario where Nombre = '$Nombre'");
            while ($res = mysqli_fetch_array($sql)) {
        	echo $res["Apellido"] ;
            };
            ?>
            </th>
	</tr>

	<tr>
            <th><h4>Correo: &nbsp</h4></th>
	<th>

		<?php $conexion=conexion();
            $sql = mysqli_query($conexion,"SELECT Correo from usuario where Nombre = '$Nombre'");
            while ($res = mysqli_fetch_array($sql)) {
        	echo $res["Correo"] ;
            };
            ?>
            </th>
	</tr>

	<tr>
            <th><h4>Tipo De Documento: &nbsp</h4></th>
	<th>

		<?php $conexion=conexion();
            $sql = mysqli_query($conexion,"SELECT TipoDocumento from usuario where Nombre = '$Nombre'");
            while ($res = mysqli_fetch_array($sql)) {
        	echo $res["TipoDocumento"] ;
            };
            ?>
            </th>
	</tr>

	<tr>
            <th><h4>Numero de Documento: &nbsp</h4></th>
	<th>

		<?php $conexion=conexion();
            $sql = mysqli_query($conexion,"SELECT NumeroDocumento from usuario where Nombre = '$Nombre'");
            while ($res = mysqli_fetch_array($sql)) {
        	echo $res["NumeroDocumento"] ;
            };
            ?>
            </th>
	</tr>

<tr>
            <th><h4>Puntos Acumulados: &nbsp</h4></th>
	<th>

		<?php $conexion=conexion();
            $sql = mysqli_query($conexion,"SELECT Puntos from usuario where Nombre = '$Nombre'");
            while ($res = mysqli_fetch_array($sql)) {
        	echo $res["Puntos"] ;
            };
            ?>
            </th>
	</tr>

	</table><br><br>


</nav>

	</nav>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#btnConfi').click(function(){

			cadena="Usuario=" + '$Nombre'.val();

					$.ajax({
						type:"POST",
						url:"Perfil.php",
						data:cadena;
						}
					});
		});
	});
</script>

<?php
} else {
	header("location:Login.php");
	}
 ?>
