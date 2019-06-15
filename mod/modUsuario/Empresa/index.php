<?php

  session_start();
  if(empty($_SESSION['nombre'])){
    header('Location: /');
  }

  
?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/style2.css">
    <link rel="stylesheet" type="text/css" href="/css/style3.css">
    <link rel="stylesheet" type="text/css" href="/css/fontello.css">
    <script src="//cdn.ckeditor.com/4.11.4/basic/ckeditor.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Inicio</title>
  </head>
  <body>
    <!--Barra de navegacion-->
    <header class="fixed-top">
        <nav class="navbar navbar-expand-lg navbar-custom">
            <a class="nav-link" href="/mod/modUsuario/"><img src="" class="logonav" alt="">css</a>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                            <li class="nav-item active ml-3">
                              <a class="nav-link" href="/mod/modUsuario/perfil">Perfil</a>
                            </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="/mod/modUsuario/Empresa">Administrar Empresa</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="/mod/modUsuario/Pago">Portal de Pagos</a>
                    </li>
              </ul>
              <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                <li class="nav-item">
                 <?php print '<a class="nav-link mx-2" style="color:#fff;" disable>'.$_SESSION['nombre'].'</a>'?>
                </li>
                <li class="nav-item">
                  <a href="/php/cerrarsesion.php" class="nav-link mx-2 btn btn-outline-light"> Cerrar Sesión</a>
                </li>
              </ul>
            </div>
        </nav>
    </header>

    <form action="/php/Gempresa.php" method="POST" enctype='multipart/form-data'>
    <!--Banner Empresa-->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active banner-empresa" id="bannerEmpresa">
                  <img src="/images/img.jpg" alt="img default" height="600px;"  class="w-100 block">
              </div>
              <div class="carousel-caption d-none d-md-block">
                    <h3>Ingresa imagen</h3>
                    <input name="archivo" id="archivo" type="file"  onchange="return validarExt()" required  accept="image/jpeg,image/gif,image/png, image/jpg">
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
                              <div class=" form-group mt-2 ">
                                      <div class="col-md-12">
                                          <div class="form-group files">
                                            <input type="file" class="form-control" id="crEmpresa1[]" multiple name="crEmpresa1[]"  required >
                                          </div>
                                 </div>
                              </div>
                              <div class="form-group heading mt-2 offset-lg-3 col-lg-6">
                                  <label for="exampleFormControlInput1"><h3>Nombre de la empresa</h3></label>
                                  <h3><input type="text" id="nombre" class="form-control" name="nombre" placeholder="Nombre de la Empresa" required></h3>
                                  <hr>
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlSelect1"><h3>Rubro de La Empresa</h3></label>
                                <select class="form-control" name="rubro" id="rubro">
                                  <option>Restaurantes</option>
                                  <option>Hospedaje</option>
                                  <option>Agencia de Turismo</option>
                                  <option>Artesania</option>
                                </select>
                              </div>
                              <div class="form-group cargarinfo">
                                  <textarea name="infomacion" class="form-control" required id="textarea" cols="30" rows="30" placeholder="Información de la empresa" >
                                  </textarea>  
                              </div>
                              <div>
                                <h3>Selecciona la Dirección</h3>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7083051.769538194!2d-71.247111!3d-29.906889!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjnCsDU0JzI0LjgiUyA3McKwMTQnNDkuNiJX!5e0!3m2!1ses!2scl!4v1559658782140!5m2!1ses!2scl" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                              </div>
                          </div>                
                      <aside class="col-lg-4">
                          <div class="nani1">
                                <div>
                                    <h3>Dirección / Redes Sociales</h3>
                                    <hr>
                                </div>
                                <div class=""> 
                                  <div class="mt-1">
                                      <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Numero de Telefono" required>
                                  </div>
                                  <div class="mt-1">
                                      <input type="text"  class="form-control" name="facebook" id="facebook"  placeholder="facebook (opcional)">
                                  </div>
                                  <div class="mt-1">
                                      <input type="text" class="form-control" name="twitter" ?="twitter" placeholder="Twitter (opcional)">
                                </div>
                                <div class="mt-1">
                                  <input type="text" class="form-control" name="instagram" id="instagram" placeholder="Instagram (opcional)"> 
                                </div>
                                <div class="mt-1">
                                  <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo Electronico" required> 
                                </div>
                                <div class="mt-1">
                                  <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion" required> 
                                </div>
                                <?php print '<input type="hidden" name="iduser" id="iduser" class="nav-link mx-2"  style="color:#fff;" value="'.$_SESSION['id'].'">'?>
                          </div>
                        </div>
                        <div class="dx mt-5">
                          <input type="submit" value="submit" name="submit" class="btn btn-1 btn-block" style="height:60px;">
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
    <script>
      CKEDITOR.replace( 'textarea' );
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </form>
  </body>
</html>


<script type="text/javascript">
      function validarExt(){
          var archivoInput1= document.getElementById('archivo');
          var archivoRuta= archivoInput1.value;
          var extPermitidas= /(.jpg|.jpeg|.png|.PNG)$/i;

          if(!extPermitidas.exec(archivoRuta)){
              alert("asegurate de haber seleccionado un archivo JPG o JPEG");
              archivoInput1.Value="";
              return false;
          }
          else{
            if(archivoInput1.files && archivoInput1.files[0]){
                  var visor = new FileReader();

                  visor.onload = function(e){
                      document.getElementById('bannerEmpresa').innerHTML= '<img src="'+e.target.result+'" alt="imagen no cargada" id="banner-Empresa" name="imgbannerP" class="w-100 d-block"> ';
                  };
                  visor.readAsDataURL(archivoInput1.files[0]);
              }
          }
      };
  </script>

  <script type="text/javascript">
    function previewC(){
      var input2=document.getElementById('crEmpresa1[]');
      var ruta=  input2.value;
      var extencionesPer= /(.jpg|.jpeg|.png|.PNG|.JPG)$/i;
      var archivos = input2.files;
      var archivo;
      if(!extencionesPer.exec(ruta)){
        alert("El archivo seleccionado tiene que tener extension JPG, JPEG o PNG");
        input2.value="";
        return false;
      }else{
        for (i = 0; i < archivos.length; i++) {
                  archivo= archivos.item(i);
                  var visor = new FileReader();
                  visor.onload = function(e){
                      document.getElementById('cr-empresa-'+i+'').innerHTML= '<img src="'+e.target.result+'" alt="imagen no cargada" id="carrousel-Empresa-'+i+'" name="imgCarrousel'+i+'" class="w-100 d-block"> ';
                  };
                  visor.readAsDataURL(archivo);
        }
      }
    };
  </script>