<?php
   include('../../../php/conexion.php');
  session_start();
  if(empty($_SESSION['nombre'])){
    header('Location: /');
  }
  $query = 'SELECT idEmpresaSuscrita FROM empresasuscrita WHERE Usuario_idUsuario ="'.$_SESSION['id'].'"';
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
                    <?php 
                        if(!$resultado){
                         ?> 
                      <a class="nav-link" href="/mod/modUsuario/Empresa">Administrar Empresa</a>
                      <?php 
                        }else{
                         ?>
                          <a class="nav-link" href="/mod/modUsuario/Empresa/Actualizar/index.php?id=<?php echo $row['idEmpresaSuscrita']?>">Administrar Empresa</a>
                         <?php 
                        }
                         ?> 
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
                                            <input type="file" class="form-control" id="crEmpresa1[]" multiple name="crEmpresa1[]"  required onchange="return previewC()" >
                                          </div>
                                 </div>
                              </div>
                              <div class="form-group heading mt-2 offset-lg-3 col-lg-6">
                                  <label for="exampleFormControlInput1"><h3>Nombre de la empresa</h3></label>
                                  <h3><input type="text" id="nombre" class="form-control" multiple name="nombre" placeholder="Nombre de la Empresa" required></h3>
                                  <hr>
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlSelect1"><h3>Rubro de La Empresa</h3></label>
                                <select class="form-control" name="rubro" id="rubro">
                                  <option>Restaurantes</option>
                                  <option>Hospedaje</option>
                                  <option>Agencia de Turismo</option>
                                </select>
                              </div>
                              <div class="form-group cargarinfo">
                                  <textarea name="infomacion" class="form-control" required id="textarea" cols="30" rows="30" placeholder="Información de la empresa" >
                                  </textarea>  
                              </div>
                              <div>
                                <h3>Selecciona la Dirección</h3>
                                <input type="hidden" id="latitud" name="latitud">
                                <input type="hidden" id="longitud" name="longitud">
                                <div id='map' class='form-group col-lg-12' style="height:450px; width:100%;">
                              <script>
                                  
                                    var map;
                                    var markers = [];

                                    function initMap() {
                                      var haightAshbury = {lat:-29.901645698897646, lng: -71.24342735500431};

                                      map = new google.maps.Map(document.getElementById('map'), {
                                        zoom: 12,
                                        center: haightAshbury,
                                      });

                                      // This event listener will call addMarker() when the map is clicked.
                                      map.addListener('click', function(event) {
                                        deleteMarkers();
                                        addMarker(event.latLng);
                                        
                                      });

                                      // Adds a marker at the center of the map.
                                      addMarker(haightAshbury);
                                    }

                                    // Adds a marker to the map and push to the array.
                                    function addMarker(location) {
                                      var marker = new google.maps.Marker({
                                        position: location,
                                        map: map
                                      });
                                      markers.push(marker);
                                    }

                                    // Sets the map on all markers in the array.
                                    function setMapOnAll(map) {
                                      for (var i = 0; i < 1; i++) {
                                        markers[i].setMap(map);
                                                document.getElementById("latitud").value = markers[i].getPosition().lat();
                                                document.getElementById("longitud").value = markers[i].getPosition().lng();
                                      }
                                    }

                                    // Removes the markers from the map, but keeps them in the array.
                                    function clearMarkers() {
                                      setMapOnAll(null);
                                    }

                                    // Shows any markers currently in the array.
                                    function showMarkers() {
                                      setMapOnAll(map);
                                    }

                                    // Deletes all markers in the array by removing references to them.
                                    function deleteMarkers() {
                                      clearMarkers();
                                      markers = [];
                                    }
                                </script>
                                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfq2CZytlW0OCsuVY70bMU2MUKtFPAzmc&callback=initMap"
                                async defer> </script>
                              </div>
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
                      document.getElementById('cr-empresa-'+i+'').innerHTML= '<img src="'+e.target.result+'" alt="imagen no cargada" id="carrousel-Empresa-'+i+'" name="imgCarrousel'+i+'" style="width:730px;"> ';
                  };
                  visor.readAsDataURL(archivo);
        }
      }
    };
  </script>