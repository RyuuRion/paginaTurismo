<?php

  include("../../php/conexion.php");

  $query='SELECT idInformacionLugares, nombreLugares, InformacionLugares FROM informacionlugares WHERE tipoLugar="Recomendado"';

  $resultado= mysqli_query($mysqli, $query);
  if(!$resultado){
    echo "mala la wea no carga la tabla";
  }


?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/style2.css">
    <link rel="stylesheet" type="text/css" href="/css/fontello.css">
    <link rel="stylesheet" type="text/css" href="/css/style3.css">
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
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <div class="carousel-caption d-none d-md-block">
                  <h5>Lugares recomendados</h5>
                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </ol>
            <div class="carousel-inner banner-imgPrincipal ">
              <div class="carousel-item active">
                <img src="/images/banner2.jpg" class="d-block  w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/images/img8.jpg" class="d-block   w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/images/img6.jpg" class="d-block   w-100" alt="...">
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
        <div class="w-100" style="background:#990000; color:#fff; ">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 mt-1 mb-1">
                  <a href="http://www.laserena.cl/" target="_blanc"><img src="http://www.laserena.cl/assets/img/logo_blanco.png" style="width:90px;" alt=""></a>
              </div>
            </div>
          </div>
        </div>
        <!--carga de lugares-->
        <div class="container mt-5">
          <div class="post-cont">
              <div class="lugar-list">
                <div class="loop">
                  <div class="nani">
                      <?php
                         while($lugares= mysqli_fetch_assoc($resultado)){
                          $idL=$lugares['idInformacionLugares'];
                          $path = "../../img/lugares/".$idL;
                      ?>
                      <div class="row mt-2">
                        <div class="col-sm-3">
                           <div class="img-list">
                             <a href="recomendados/index.php?id=<?php echo $lugares['idInformacionLugares']?>">                         
                              <?php
                                  if(file_exists($path)){
                                    $directorio = opendir($path);
                                    while ($archivo = readdir($directorio)){
                                        if (!is_dir($archivo)){
                                          echo "<img src='/img/lugares/$idL/$archivo' class='d-block ' style='width:100%;'>";             
                                        }
                                    }
                                }
                                ?> 
                              </a>
                           </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="info">
                                <h3><a href="recomendados/index.php?id=<?php echo $lugares['idInformacionLugares']?>"><?php echo $lugares['nombreLugares']; ?></a></h3>
                                <div class=" text-justify">
                                    <?php echo substr($lugares['InformacionLugares'] ,0, 200)?>...
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="btn-list">
                              <div>
                                  <a href="recomendados/index.php?id=<?php echo $lugares['idInformacionLugares']?>" class="btn btn-1 ">Ver detalles</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php
                         }
                        ?>
                  </div>
                </div>
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