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
    <link rel="stylesheet" type="text/css" href="/css/fontello.css">
    <link rel="stylesheet" href="/css/style3.css" type="text/css">
    <title>Inicio</title>
  </head>
  <body class="imgbackground">
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
                <div class="offset-lg-2">
                </div>
                <div class="col-lg-8 mt-5 mb-2">
                    <div class="mt-5 nani1">
                        <h2 class="" >Formulario Registro Restaurantes</h2>
                        <p></p>
                        <form >
                            <div class="form-group">
                                <label for="exampleFormControlInput1"> <strong>Nombre Restaurante</strong>  </label>
                                <input type="text" class="form-control" autofocus id="exampleFormControlInput1" placeholder="Nombre" autofocus>
                                <label for="exampleFormControlInput1"> <strong>Dirección</strong>  </label>
                                <input type="test" class="form-control" id="exampleFormControlInput1" placeholder="xxxx calle balmaceda">
                                <label for="exampleFormControlInput1"> <strong>Email Empresa</strong>  </label>
                                <input type="Email" class="form-control" autofocus id="exampleFormControlInput1" placeholder="Nombre" autofocus>
                                <label for="exampleFormControlInput1"> <strong>telefono Empresa</strong>  </label>
                                <input type="text" class="form-control" autofocus id="exampleFormControlInput1" placeholder="Nombre" autofocus>
                                <div class="form-group">
                                <label for="exampleFormControlSelect1"><strong>Estado</strong></label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Suscrito</option>
                                        <option>Inactivo</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1"><strong>Tipo de Empresa</strong></label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Picada</option>
                                        <option>Restaurante</option>
                                        <option>Comida Al paso</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                        <label for="exampleFormControlSelect1"><strong>Dueño</strong></label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>dueño 1</option>
                                            <option>dueño 2</option>
                                            <option>dueño 3</option>
                                        </select>
                                    </div>
                                <label for="exampleFormControlInput1"> <strong>Elige Imagen</strong>  </label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                                    <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                                  </div>
                                <div class="form-group mt-2">
                                        <label for="exampleFormControlTextarea1"><strong>Información de la empresa</strong></label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Información del lugar"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-block btn-1 mb-2">Enviar</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>

    <!-- Optional JavaScript -->

    <script src="/js/bs-custom-file-input.js"></script>
    <script src="/js/bs-custom-file-input.min.js"></script>
    <script>
        bsCustomFileInput.init()
        var btn = document.getElementById('btnResetForm')
        var form = document.querySelector('form')
        btn.addEventListener('click', function () {
          form.reset()
        })
      </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>