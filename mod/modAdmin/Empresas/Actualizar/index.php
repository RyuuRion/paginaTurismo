<?php
  session_start();
  if(empty($_SESSION['nombre'])){
    header('Location: /');
  }
  include('../../../../php/conexion.php');

    $idEmpresaS=$_GET['id'];
    $query='SELECT NombreEmpresa, RubroEmpresa, InformacionEmpresa, facebook, twitter, instagram, NTelefonoEmpresa, CorreoEmpresa,Dlat, Dlong, estadoEmpresa FROM empresasuscrita WHERE idEmpresaSuscrita= "'.$idEmpresaS.'"';
    $resultado=mysqli_query($mysqli, $query);
    $row=mysqli_fetch_assoc($resultado);
  
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/style2.css">
    <link rel="stylesheet" type="text/css" href="/css/style3.css">
    <link rel="stylesheet" type="text/css" href="/css/fontello.css">
    <link rel="stylesheet" type="text/css" href="/css/plus.css">
    <link rel="stylesheet" type="text/css" href="/css/dataTables.bootstrap4.min.css"/>
    <title>Inicio</title>
  </head>
  <body>
    <!--Barra de navegacion-->
    <header class="fixed-top">
        <nav class="navbar navbar-expand-lg navbar-custom">
            <a class="nav-link" href="/mod/modAdmin/"><img src="" class="logonav" alt="">css</a>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                    <li class="nav-item dropdown mx-2">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Admin. Lugares</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/">Sobre La Serena</a>
                            <a class="dropdown-item" href="/">Sobre El Valle del Elqui</a>
                            <a class="dropdown-item" href="/mod/modAdmin/lugares/">Lugares</a>
                            <a class="dropdown-item" href="/mod/modAdmin/lugares/CrearL/">crear Lugares</a>
                        </div>
                    </li>
              </ul>
              <ul class="navbar-nav">
                    <li class="nav-item dropdown mx-2">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Admin. Agencias</a>
                        <div class="dropdown-menu">
                                <a class="dropdown-item" href="/mod/modAdmin/Empresas/">Ver Empresas</a>
                        </div>
                    </li>
              </ul>
              <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                <li class="nav-item">
                  <?php print '<a class="nav-link mx-2" style="color:#fff;" disable>'.$_SESSION['nombre'].'</a>'?>
                  </li>
                  <li class="nav-item">
                    <a href="/php/cerrarsesion.php" class="nav-link mx-2 btn-outline-light btn"> Cerrar Sesión</a>
                  </li>
              </ul>
            </div>
          </nav>
    </header>
    <!--Banner Empresa-->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active banner-empresa" id="bannerEmpresa">
              <?php 
							$path = "../../../../img/".$idEmpresaS;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
										echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' title='Ver Archivo Adjunto'><span class=''></span></a>";
                    echo "<img src='../../../../img/$idEmpresaS/$archivo' id='banner-Empresa' name='imgbannerP' class='w-100 d-block' /> ";
                    echo "$archivo<br> <a href='#' class='delete' title='Ver Archivo Adjunto' ><i class='far fa-trash-alt mr-2'></i>Eliminar imagen</a></div>";
									}
								}
							}
							
						?>
              </div>
              <div class="carousel-caption d-none d-md-block">
                    <h1><?php echo $row['NombreEmpresa'] ?></h1>
              </div>
          </div>
      </div>
      <div class="w-100" style="background:#990000; color:#fff; ">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 mt-1 mb-1">
                <a href="http://www.laserena.cl/" target="_blanc"><img src="http://www.laserena.cl/assets/img/logo_blanco.png" style="width:90px;" alt=""></a>
            </div>
          </div>
        </div>
      </div>
      <!--Botones-->
      <section>
        <div class="container">
            <div class="row">
                <div class="dx-title col-lg-12">
                    <h4 style="text-align:center;">Información Empresa</h4>
                </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="nani col-lg-8">
                                <div class="cargarimg mt-2">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner banner-img">
                                              <div class="carousel-item active" id="cr-empresa-1">
                                               <!-- <label for=""><h5>Imagen 1: </h5></label><input type="file"  id="crEmpresa1" > -->
                                              </div>
                                              <div class="carousel-item" id="cr-empresa-2">
                                              </div>
                                              <div class="carousel-item" id="cr-empresa-3">
                                              </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                              <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                              <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                              </div><hr>
                              <div class="form-group heading mt-2 offset-lg-3 col-lg-6">
                                  <h3><?php echo $row['NombreEmpresa'] ?></h3>
                                  <hr>
                              </div>
                              <div class="form-group cargarinfo text-justify">
                                <?php echo $row['InformacionEmpresa'] ?>
                              </div><hr>
                          </div>       
                          <aside class="col-lg-4">
                            <div class="nani1">
                                    <div>
                                        <h3>Redes Sociales/ Contacto</h3>
                                        <hr>
                                    </div>
                                    <div class="text-center"> 
                                    <div class="mt-1">
                                    <a href="<?php echo $row['facebook']?>" target="_blank"><i class="fab fa-facebook-square"> <?php echo $row['NombreEmpresa']?></i></a>
                                    </div>
                                    <div class="mt-1">
                                    <a href="<?php echo $row['twitter']?>" target="_blank"><i class="fab fa-twitter"> @<?php echo $row['NombreEmpresa']?></i> </i></a>
                                    </div>
                                    <div class="mt-1">
                                    <a href="<?php echo $row['instagram']?>" target="_blank"><i class="fab fa-instagram"> @<?php echo $row['NombreEmpresa']?></i> </i></a>
                                    </div>
                                    <div class="mt-1">
                                    <i class="fas fa-phone"> <?php echo $row['NTelefonoEmpresa']?> </i>
                                    </div>
                                    <div class="mt-1">
                                    <i class="fas fa-envelope-square"> <?php echo $row['CorreoEmpresa']?> </i>
                                    </div>
                            </div> <hr>
                            <h3>Direccion</h3> <hr>
                            <div class="mt-1">
                                <div style="width: 100%"><iframe width="100%" height="200" src="https://maps.google.com/maps?width=100%&height=200&hl=es&coord=<?php echo $row['Dlat']?>, <?php echo $row['Dlong']?>&ie=UTF8&t=&z=16&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><br />
                                </div>
                            </div> <hr>
                            <div class="mt-1">
                            <h3 class="text-center">Estado Empresa</h3> <hr>
                                <form action="/php/AEmpresaAdmin.php" method="POST">
                                    <div class="form-group">
                                        <select class="form-control" name="estado" id="estado" selected="<?php echo $row['CorreoEmpresa']?>" >
                                            <option value="1" >Activo</option>
                                            <option value="2">Inactivo</option>
                                        </select>
                                        <input type="hidden" value="<?php echo $idEmpresaS?>" name="id">
                                        <div class="dx mt-5">
                                            <input type="submit" value="Enviar" name="submit" class="btn btn-1 btn-block" style="height:60px;">
                                            <a class="btn btn-success btn-block" style="height:60px;padding:15px;" href="/mod/modUsuario/"> Volver a Inicio</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                    </aside>
                </div>
        </div>             
    </section>
      <!-- Footer-->
      <footer class="mt-5">
		      <div class="container">
            <div class="row">
              <div class="col-lg-6">
                  <p class="copy"> Turismo &copy;</p>
              </div>
                <div class="sociales col-lg-6">
                    <a class="icon-facebook "></a>
                    <a class="icon-twitter"></a>
                    <a class="icon-instagram"></a>
                </div>
            </div>
		      </div>
		</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>