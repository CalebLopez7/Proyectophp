<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registrar Pelicula</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/book.ico" />
    <script src="js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="css/sweet-alert.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
    <div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile custom-scroll-containers">
            <div class="logo full-reset all-tittles">
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i>
                CINE SENA
            </div>
            <div class="full-reset" style="background-color:#2B3D51; padding: 10px 0; color:#fff;">
                <figure>
                    <img src="img/cinesena.png" alt="Cine" class="img-responsive center-box" style="width:55%;">
                </figure>
            </div>
            <div class="full-reset nav-lateral-list-menu">
                <ul class="list-unstyled">
                    <li><a href="home.html"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                    <li><a href="home.html"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Reservas</a></li>
                    <li><a href="../Claeb/Vista/PerfilP.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Perfil</a></li>
                    <li><a href="book.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Nueva Pelicula </a></li>
                    <li><a href="Tienda/Tienda.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Tienda </a></li>

                   
                </li>
            </div>
        </div>
    </div>
    <div class="content-page-container full-reset custom-scroll-containers">
        <nav class="navbar-user-top full-reset">
            <ul class="list-unstyled full-reset">
                <figure>
                   <img src="assets/img/user01.png" alt="user-picture" class="img-responsive img-circle center-box">
                </figure>
                <li style="color:#fff; cursor:default;">
                    <span class="all-tittles">Administrador</span>
                </li>
                <li  class="tooltips-general exit-system-button" data-href="../Claeb/Vista/login.php" data-placement="bottom" title="Salir del sistema">
                    <i class="zmdi zmdi-power"></i>
                </li
                ><li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
            </ul>
        </nav>
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">AÑADIR PELICULA</h1>
            </div>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="img/cinesena.png" alt="pdf" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección para agregar nuevas Peliculas a la pagina, deberas de llenar todos los campos para poder registrar la pelicula
                </div>
            </div>
        </div>
        <div class="container-fluid">
                <div class="container-flat-form">
                    <div class="title-flat-form title-flat-blue">PELICULA</div>
                    <div class="row">
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <div class="group-material">
                                <span>Categoría</span>
                                <span id="frmRegistro">
                                <select class="tooltips-general material-control" data-toggle="tooltip" data-placement="top" title="Elige la categoría de la pelicula" id="Categoria">
                                    <option value="" disabled="" selected="">Selecciona una categoría</option>
                                    <option value="categoria">Accion</option>
                                    <option value="categoria">Comedia</option>
                                    <option value="categoria">Terror</option>
                                </select>
                            </div>

                            <div class="group-material">
                                <input type="text" class="tooltips-general material-control" placeholder="Escribe aquí el nombre de la pelicula" required maxlength="70" data-toggle="tooltip" data-placement="top" title="Escribe el nombre de la pelicula" id="Nombre">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="tooltips-general material-control" placeholder="Escribe aquí la descripcion de la pelicula" required maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe la descripcion de la pelicula" id="Descripcion">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Sinopsis</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="tooltips-general material-control" placeholder="Escribe la duracion de la pelicula" required maxlength="70" data-toggle="tooltip" data-placement="top" title="Escribe la duracion de la pelicula" id="Duracion">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Duracion</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="tooltips-general material-control" placeholder="Escribe aquí el director de la pelicula" required maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el director de la pelicula" id="Director">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Director</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="tooltips-general material-control" placeholder="Escribe aquí los actores de la pelicula" required maxlength="1000" data-toggle="tooltip" data-placement="top" title="Escribe los actores de la pelicula" id="ActorP">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Actores</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="tooltips-general material-control" placeholder="Escribe aquí la Fecha de estreno de la pelicula" required maxlength="10" data-toggle="tooltip" data-placement="top" title="Escribe la Fecha de estreno de la pelicula" id="Fecha">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Fecha de estreno</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="tooltips-general material-control" placeholder="Escribe aquí la clasificacion de la pelicula" required maxlength="20" data-toggle="tooltip" data-placement="top" title="Escribe la clasificacion de la pelicula" id="Clasificacion">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Clasificacion</label>
                            </div>

              <p class="text-center">
                <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                  <span class="btn btn-primary" id="entrarSistema"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp;Entrar</span>

              </p>
            </form>
                     </div>
                   </div>
                </div>

        </div>
        <div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">


                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> &nbsp; De acuerdo</button>
                </div>
            </div>
          </div>
        </div>
    </div>
</body>
</html>


<script type="text/javascript">
	$(document).ready(function(){
		$('#entrarSistema').click(function(){

			if($('#Nombre').val()==""){
				alertify.alert("Debes agregar el nombre");
				return false;
			}else if($('#Descripcion').val()==""){
				alertify.alert("Debes agregar Una Descripcion");
				return false;
			}else if($('#Duracion').val()==""){
				alertify.alert("Debes agregar una Duracion");
				return false;
			}else if($('#Director').val()==""){
				alertify.alert("Debes agregar el Director");
				return false;
			}else if($('#ActorP').val()==""){
				alertify.alert("Debes agrega los Actores Principales");
				return false;
			}else if($('#Fecha').val()==""){
				alertify.alert("Debes agrega la Fecha De Esteno");
				return false;
			}else if($('#Clasificacion').val()==""){
				alertify.alert("Debes agrega la Clasificacion");
				return false;
			}


			cadena="Nombre=" + $('#Nombre').val() +
      	"&Categoria=" + $('#Categoria').val() +
					"&Descripcion=" + $('#Descripcion').val() +
					"&Duracion=" + $('#Duracion').val() +
					"&Director=" + $('#Director').val() +
					"&ActorP=" + $('#ActorP').val() +
					"&Fecha=" + $('#Fecha').val() +
          "&Clasificacion=" + $('#Clasificacion').val();

					$.ajax({
						type:"POST",
						url:"Modelo/RegPel.php",
						data:cadena,
						success:function(r){

							if(r==2){
								alertify.alert("Este usuario ya existe, prueba con otro");
							}
							else if(r==1){

              alertify.error("Fallo al agregar");
							}else{
								$('#frmRegistro')[0].reset();
								alertify.success("Agregado con exito");
							}
						}
					});
		});
	});
</script>
