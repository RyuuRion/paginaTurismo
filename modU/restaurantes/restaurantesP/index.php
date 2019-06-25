<?php 
  include("../../../php/conexion.php");

  $idE=$mysqli->real_escape_string($_GET['id']);
  $query2='SELECT NombreEmpresa, InformacionEmpresa, DireccionEmpresa, Dlat, Dlong, facebook, twitter, instagram, NTelefonoEmpresa,CorreoEmpresa FROM empresasuscrita WHERE idEmpresaSuscrita="'.$idE.'"';

  $resultad= mysqli_query($mysqli, $query2);
  if(!$resultad){
      echo "mala la wea no carga la tabla";
  }
  $EmpresaR= mysqli_fetch_assoc($resultad);
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/fontello.css">
    <link rel="stylesheet" type="text/css" href="/css/style2.css">
    <link rel="stylesheet" type="text/css" href="/css/style3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Inicio</title>
  </head>
  <body>
    <!--Barra de navegacion-->
    <header class="fixed-top">
      <nav class="navbar navbar-expand-lg navbar-custom">
          <a class="nav-link" href="/"><img src="" class="logonav" alt="">css</a>
          <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto ">
                  <li class="nav-item dropdown mx-2">
                          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Sobre la zona</a>
                      <div class="dropdown-menu">
                          <a class="dropdown-item" href="/modU/LaSerena/">Sobre La Serena</a>
                          <a class="dropdown-item" href="/modU/Elvalle/">Sobre El Valle del Elqui</a>
                          <a class="dropdown-item" href="/modU/Lugares/">Lugares Recomendados</a>
                          <a class="dropdown-item" href="/modU/Lugares/importantes/">Lugares Importantes</a>
                      </div>
                  </li>
                  <li class="nav-item dropdown mx-2">
                          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Donde Alojar</a>
                      <div class="dropdown-menu">
                          <a class="dropdown-item" href="/modU/hospedaje/">Hotel</a>
                      
                      </div>
                  </li>
                  <li class="nav-item dropdown mx-2">
                          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Agencias de Turismo</a>
                      <div class="dropdown-menu">
                          <a class="dropdown-item" href="/modU/agencias/">Agencias</a>
                      
                      </div>
                  </li>
                  <li class="nav-item dropdown mx-2">
                          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Donde Comer</a>
                      <div class="dropdown-menu">
                          <a class="dropdown-item" href="/modU/restaurantes/">Restaurante</a>
                      </div>
                  </li>
            </ul>
            <li class="form-inline my-2 my-lg-0">
                    <a href="/modU/contacto" class="nav-link mx-2 my-2 btn btn-outline-light my-sm-0"> Contacto</a>
                    <a href="/mod/" class="nav-link mx-2 btn btn-outline-light my-2 my-sm-0">Iniciar Sesión</a>
              </li>   
          </div>
        </nav>
  </header>
    
      <!-- Slider imagen-->
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner banner-imgPrincipal">
              <div class="carousel-item active">
              <?php 
                  $path = "../../../img/".$idE;
                  if(file_exists($path)){
                    $directorio = opendir($path);
                    while ($archivo = readdir($directorio))
                    {
                      if (!is_dir($archivo)){
                        echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' title='Ver Archivo Adjunto'><span class=''></span></a>";
                        echo "<img src='../../../img/$idE/$archivo' id='banner-Empresa' name='imgbannerP' class='w-100 d-block' /> </div>";
                    }
                  }
                }
                ?>
              </div>
              <div class="carousel-caption d-none d-md-block">
                    <h1><?php echo $EmpresaR['NombreEmpresa']; ?></h1>
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
      <!--Completar con info del lugar-->
        <div class="container mt-5">
            <div class="loop">
                <div class="row">
                    <div class="col-lg-7 nani">
                            <div class="cargarimg mt-2">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner banner-img">
                                              <div class="carousel-item active">
                                                <img src="/images/im5.jpg" class="d-block  w-100" alt="...">
                                              </div>
                                              <div class="carousel-item">
                                                <img src="/images/im3.jpg" class="d-block   w-100" alt="...">
                                              </div>
                                              <div class="carousel-item">
                                                <img src="/images/img1.jpg" class="d-block   w-100" alt="...">
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
                            </div>
                            <div class="heading mt-2">
                                <h2><?php echo $EmpresaR['NombreEmpresa']; ?> </h2>
                                    <hr>
                            </div>
                            <div class="cargarinfo">
                              <?php echo $EmpresaR['InformacionEmpresa']; ?>
                            </div>
                    </div>
                    <aside class="col-lg-4 mx-4">
                    <div class="nani1">
                                    <div>
                                        <h3>Redes Sociales/ Contacto</h3>
                                        <hr>
                                    </div>
                                    <div class="text-center"> 
                                    <div class="mt-1">
                                    <a href="<?php echo $EmpresaR['facebook']?>" target="_blank"><i class="fab fa-facebook-square">@<?php echo $EmpresaR['NombreEmpresa']?></i></a>
                                    </div>
                                    <div class="mt-1">
                                    <a href="<?php echo $EmpresaR['twitter']?>" target="_blank"><i class="fab fa-twitter"> @<?php echo $EmpresaR['NombreEmpresa']?></i> </i></a>
                                    </div>
                                    <div class="mt-1">
                                    <a href="<?php echo $EmpresaR['instagram']?>" target="_blank"><i class="fab fa-instagram"> @<?php echo $EmpresaR['NombreEmpresa']?></i> </i></a>
                                    </div>
                                    <div class="mt-1">
                                    <i class="fas fa-phone"> <?php echo $EmpresaR['NTelefonoEmpresa']?> </i>
                                    </div>
                                    <div class="mt-1">
                                    <i class="fas fa-envelope-square"> <?php echo $EmpresaR['CorreoEmpresa']?> </i>
                                    </div>
                            </div> <hr>
                            <h3>Direccion</h3> <hr>
                            <div class="mt-1">
                                <h5><?php echo $EmpresaR['DireccionEmpresa']?></h5>
                                <hr>
                                <div style="width: 100%"><iframe width="100%" height="200" src="https://maps.google.com/maps?width=100%&height=200&hl=es&coord=<?php echo $EmpresaR['Dlat']?>, <?php echo $EmpresaR['Dlong']?>&ie=UTF8&t=&z=16&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><br />
                                </div>
                            </div> <hr>
                    </aside>
                </div>
            </div>
        </div>

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