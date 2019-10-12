<?php
	session_start();

	if(isset($_SESSION['user'])){

		$Nombre = $_SESSION['user'];
 ?>
<!DOCTYPE hyml>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Configuraciones_Perfil</title>
	<link rel="stylesheet" type="text/css" href="Perfil.css">
	<?php require_once "scripts.php"?>
</head>

<body style="background-color: #ADADAD">

	<nav class="container" >
		<br>
		<nav class="navbar" style="background-color: #CD1111">

			<table class="table1" align="right" >
			<tr>
			<th><form action="Perfil.php"><button class="btn btn-default">Inicio</button></form></th>
			<th><form action="PerfilP.php"><button class="btn btn-default">Mi Perfil</button></form></th>
			<th><form action="Login.php"><button class="btn btn-danger">Cerrar sesion</button></form></th>
			</tr>
			</table>
		</nav>
		<br><br>
		<h1 align="center">Configuraciones De Perfil</h1>
		<br>
		<nav>
			<table align="center">
			<tr>
			<th>
				<?php
            require_once "../Modelo/conexion.php";
            $conexion=conexion();
            $sql = mysqli_query($conexion,"SELECT Imagen from usuario where Nombre = '$Nombre'");
            while ($res = mysqli_fetch_array($sql)) {
        	echo '<img src="'.$res["Imagen"] .'"width="100">';
            };
            ?>
					</th>
			</tr>
			</table>
		</nav>
		<nav class="mgPerfil">
			<h3 align="center">Imagen de Perfil</h3><br>
			<table align="center">
				<tr>
			<form action="../Modelo/PerfilImg.php" enctype="multipart/form-data" method="POST">
			<th><input type="file" name="foto" accept=".png,.jpg" id="foto"></th>
			<br><br>

			</tr>
			<tr>
				<th><input type="submit" class="btn btn-success" id="Ir" value="Actualizar Imagen"></th>
       </form>
			</tr>

		    </table>
		</nav>

		<nav class="Panel-heading">
			<br>
			<br>

			<h3 align="center">Datos</h3><br>


			<table align="center" >

			<tr>
			<th><label>Nombre &nbsp</label></th><th><input type="text" name="" id="nombre" value="<?php
					require_once "../Modelo/conexion.php";
					$conexion=conexion();
					$sql = mysqli_query($conexion,"SELECT * from usuario where Nombre = '$Nombre'");
					while ($res = mysqli_fetch_array($sql)) {
				echo $res["Nombre"];
					};
					?>"><br><br></th>
			</tr>
			<tr>
			<th><label>Apellido </label></th><th><input type="text" name="" id="apellido" value="<?php
						require_once "../Modelo/conexion.php";
						$conexion=conexion();
						$sql = mysqli_query($conexion,"SELECT * from usuario where Nombre = '$Nombre'");
						while ($res = mysqli_fetch_array($sql)) {
					echo $res["Apellido"];
						};
						?>"><br><br></th>
			</tr>
			<tr>
			<th><label>Contraseña &nbsp</label></th><th><input type="text" name="" id="contrasena" value="<?php
						require_once "../Modelo/conexion.php";
						$conexion=conexion();
						$sql = mysqli_query($conexion,"SELECT * from usuario where Nombre = '$Nombre'");
						while ($res = mysqli_fetch_array($sql)) {
					echo $res["Contrasena"];
						};
						?>"><br><br></th>
			</tr>
			<tr>
			<th><label>Correo &nbsp</label></th><th><input type="text" name="" id="correo" value="<?php
						require_once "../Modelo/conexion.php";
						$conexion=conexion();
						$sql = mysqli_query($conexion,"SELECT * from usuario where Nombre = '$Nombre'");
						while ($res = mysqli_fetch_array($sql)) {
					echo $res["Correo"];
						};
						?>"><br><br></th>
			</tr>
			<tr>
			<th><label>Tipo de Documento &nbsp</label></th><th><select id="tipodoc">
				<option>T.I.</option>
				<option>C.C.</option>
			</select><br><br></th>

			</tr>
			<tr>
			<th><label>Numero De Documento &nbsp</label></th><th><input type="Text" name="" id="numdoc" value="<?php
						require_once "../Modelo/conexion.php";
						$conexion=conexion();
						$sql = mysqli_query($conexion,"SELECT * from usuario where Nombre = '$Nombre'");
						while ($res = mysqli_fetch_array($sql)) {
					echo $res["NumeroDocumento"];
						};
						?>"><br><br></th>
			</tr>
			<th><span class="btn btn-primary" id="actualizar">Actualizar</span></th>
			</tr>

			</table>


 </div>

		</nav>
	</nav>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#actualizar').click(function(){
			if($('#nombre').val()==""){
				alertify.alert("Debes agregar el Nombre");
				return false;
			}else if($('#apellido').val()==""){
				alertify.alert("Debes agregar el Apellido");
				return false;
			}else if($('#contrasena').val()==""){
				alertify.alert("Debes agregar contraseña");
				return false;
			}else if($('#correo').val()==""){
				alertify.alert("Debes agregar correo");
				return false;
			}else if($('#numdoc').val()==""){
				alertify.alert("Debes agregar Numero de Documento");
				return false;
			}

			cadena="nombre=" + $('#nombre').val() +
					"&apellido=" + $('#apellido').val()+
					"&contrasena=" + $('#contrasena').val()+
					"&correo=" + $('#correo').val()+
					"&numdoc=" + $('#numdoc').val(),

					$.ajax({
						type:"POST",
						url:"../Modelo/PerfilDatos.php",
						data:cadena,
						success:function(r){
							if(r==1){
								alertify.alert("Fallo al entrar");
							}else{

								window.location="../Vista/PerfilP.php";
							}
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
