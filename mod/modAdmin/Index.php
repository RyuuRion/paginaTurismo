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
    <link rel="stylesheet" type="text/css" href="/css/fontello.css">
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
                    <a href="/php/cerrarsesion.php" class="nav-link mx-2 btn-outline-light btn"> Cerrar Sesión</a>
                  </li>
              </ul>
            </div>
          </nav>
    </header>

      <!-- Formulario Contacto-->
        <div class="container">
                <div class="row">
                        <a href="#" class="col-xl-12 mt-5" ></a>
                        <a href="#" class="col-xl-12 mt-4" ></a>
                        <a href="/mod/modAdmin/usuarios/" class="col-xl-12 btnadmin" style="background:url('https://i.pinimg.com/originals/98/b3/0d/98b30d73c645fc6b210927baa01b7f64.jpg') ;" ><h5>Admin. Usuario</h5></a>
                        <a href="/mod/modAdmin/lugares/" class="col-xl-6 btnadmin" style=" background: url('https://www.eluniversal.com.mx/sites/default/files/2018/10/31/los_mejores_restaurantes_de_america_latina_3.jpg');"><h5>Admin. Lugares</h5></a>
                        <a href="/mod/modAdmin/agencias/" class="col-xl-6 btnadmin"style="background:url('http://www.airphotocolombia.com/banco-de-imagenes/wp-content/uploads/2017/04/Banco-de-Imagenes.jpg') ;"><h5>Admin. Agencias</h5></a>
                        <a href="/mod/modAdmin/hospedaje/" class="col-xl-6 btnadmin"style="background:url('https://i.pinimg.com/originals/f4/74/b5/f474b52c1cae58cbf80870bc4de137da.jpg') ;"><h5>Admin. Hospedaje</h5></a>
                        <a href="/mod/modAdmin/restaurantes/" class="col-xl-6 btnadmin"style="background:url('https://i.pinimg.com/originals/98/b3/0d/98b30d73c645fc6b210927baa01b7f64.jpg') ;"><h5>Admin. Restaurantes</h5></a>   
                </div>       
        </div>

      <!-- Footer-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>