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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/style2.css">
    <link rel="stylesheet" type="text/css" href="/css/style3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/fontello.css">
    <link rel="stylesheet" type="text/css" href="/css/plus.css">
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
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Admin. Hospedaje</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/mod/modAdmin/hospedaje/">Ver/Editar Hotel</a>
                                <a class="dropdown-item" href="/mod/modAdmin/hospedaje/crearH/">Agregar nuevo Hotel</a>
                            </div>
                        </li>
                  </ul>
                  <ul class="navbar-nav">
                        <li class="nav-item dropdown mx-2">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Admin. Agencias</a>
                            <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/mod/modAdmin/agencias/">Ver/Editar Agencias</a>
                                <a class="dropdown-item" href="/mod/modAdmin/agencias/crearA/">Agregar Nueva Agencias</a>
                            </div>
                        </li>
                  </ul>
                  <ul class="navbar-nav">
                        <li class="nav-item dropdown mx-2">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Admin. Restaurantes</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/mod/modAdmin/restaurantes/">Ver/Editar Restaurante</a>
                                <a class="dropdown-item" href="/mod/modAdmin/restaurantes/crearR/">Agregar Nuevo Restaurante</a>
                            </div>
                        </li>
                  </ul>
                  <ul class="navbar-nav">
                        <li class="nav-item dropdown mx-2">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Admin. Usuario</a>
                            <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/mod/modAdmin/usuarios/">Ver/Editar Usuarios</a>
                                <a class="dropdown-item" href="/mod/modAdmin/usuarios/crearUsuario/">Agregar Usuario Nuevo</a>
                            </div>
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

      <!-- Formulario Contacto-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-5">
                    <div class="mt-5 nani1">
                            <h2><strong>Modulo administración Agencias</strong></h2>
                            <hr><br>
                            <div >
                              <a class="btn btn-warning icon-user-plus mt-1" style="color:#fff;" href="crearA/">Agregar Nueva Agencia</a>
                              <a class="btn btn-success  mt-1" href="#"><i class="far fa-file-excel mr-2"></i >Exportar en excel</a>
                              <a class="btn btn-danger  mt-1" href="#"><i class="far fa-file-pdf mr-2"></i> Exportar en pdf</a>
                              <a class="btn btn-info  mt-1" href="../"><i class="fas fa-home mr-2"></i>Volver a inicio</a>
                            </div>
                            <div class="mt-2 table-responsive">
                            
                            </div>
                            <table class="table table-hover">
                                    <thead class="thead-dark">
                                      <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellido</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Telefono</th>
                                        <th scope="col">estado</th>
                                        <th scope="col">Opciones</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td><a href="#" class="btnupdate"><img src="/img/refresh (1).png" alt="">Actualizar</a> <a href="#" class="ml-3  btndelete"><img src="/img/x-button.png"alt="">Eliminar</a></td>
                                      </tr>
                                      <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td><a href="#" class="btnupdate"><img src="/img/refresh (1).png" alt="">Actualizar</a> <a href="#" class="ml-3  btndelete"><img src="/img/x-button.png"alt="">Eliminar</a></td>
                                      </tr>
                                      <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td><a href="#" class="btnupdate"><img src="/img/refresh (1).png" alt="">Actualizar</a> <a href="#" class="ml-3  btndelete"><img src="/img/x-button.png"alt="">Eliminar</a></td>
                                      </tr>
                                    </tbody>
                                  </table>
                    </div>
                </div>
            </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>