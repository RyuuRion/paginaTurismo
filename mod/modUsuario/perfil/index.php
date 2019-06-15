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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Inicio</title>
    <script src="/js/validadpassword.js">
    
    </script>
  </head>
  <body>
    <!--Barra de navegacion-->
    <header class="fixed-top">
        <nav class="navbar navbar-expand-lg navbar-custom">
            <a class="nav-link" href="/mod/modUsuario/"><img src="/images/" class="logonav" alt="">css</a>
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

      <!--Botones-->
      <section>
        <div class="container">
                <div class="row" style="margin-top:15%;">
                      <a class=" btn-block btn btn-danger active" >
                        <h3>Opciones de Perfil</h3>
                      </a>
                </div>
                <div class="col-lg-12 mt-3">
                  <div class="row">
                      <div class="col-lg-4">
                          <div class="list-group nav nav-tabs" id="myTab" role="tablist">
                              <a href="#tab1" class="list-group-item btn-block nav-item btn btn-warning list-group-item-action active" data-toggle="tab">Mis Empresas</a>
                              <a href="#tab4" class="list-group-item btn-block nav-item btn btn-warning list-group-item-action" data-toggle="tab">Actualizar Datos</a>
                              <a href="#tab3" class="list-group-item btn-block nav-item btn btn-warning list-group-item-action" data-toggle="tab">Cambiar Contraseña</a>
                          </div>
                      </div>
                            <div class="col-lg-8 ">
                              <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="home-tab">
                                  <h2 style="text-align:center;">Datos de mi Empresa</h2>
                                    <hr>
                                      <ul class="list-group" class="text-left">
                                        <li class="list-group-item">Nombre Empresa:</li>
                                        <li class="list-group-item">Rubro Empresa: </li>
                                        <li class="list-group-item">Información Empresa: </li>
                                        <li class="list-group-item">N° de Telefono: </li>
                                        <li class="list-group-item">Correo de la Empresa:</li>
                                      </ul>
                                      <div style="text-align:center;" class="mt-3">
                                        <a href="/mod/modUsuario/Empresa" class="btn btn-danger"  >Administrar mi Empresa</a>
                                      </div>
                                </div>
                                    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="profile-tab" style="padding:50px;">
                                      <h2 style="text-align:center;">Actualizar Datos</h2><hr>
                                      <form>
                                        <div class="form-row">
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4"><strong>Nombre</strong></label>
                                            <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputPassword4"><strong>Apellido</strong></label>
                                            <input type="text" class="form-control" id="inputPassword4" placeholder="Apellido">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label for="inputAddress"><strong>Numero de telefono</strong> </label>
                                          <input type="text" class="form-control" id="inputAddress" placeholder="+569xxxxxxxxx">
                                        </div>
                                        <div class="form-group" style="text-align:center;">
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                              Estoy seguro de Actualizar mis datos
                                            </label>
                                          </div>
                                        </div>
                                        <div style="text-align:center;" >
                                          <button type="submit" class="btn btn-danger">Actualizar</button>
                                        </div>
                                      </form>
                                    </div>
                                    <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="profile-tab">
                                        <h2 style="text-align:center;">Mis Datos</h2>
                                          <ul class="list-group" class="text-left">
                                            <li class="list-group-item">Nombre:</li>
                                            <li class="list-group-item">apellido: </li>
                                            <li class="list-group-item">Telefono: </li>
                                            <li class="list-group-item">Correo: </li>
                                          </ul>
                                          <div style="text-align:center;" class="mt-3">
                                            <a href="#tab2" class="btn btn-danger" data-toggle="tab" >Actualizar Mis datos</a>
                                          </div>
                                    </div>
                                    <div class="tab-pane fade offset-lg-1 col-lg-10" id="tab3" role="tabpanel" aria-labelledby="contact-tab">
                                      <h2 style="text-align:center;">Cambiar Contraseña</h2><hr>
                                        <form method="post" id="passwordForm" style="text-align:center;">
                                          <input type="password" class="input-lg form-control" placeholder="Contraseña Actual">
                                          <hr>
                                            <input type="password" class="input-lg mt-2 form-control" name="password1" id="password1" placeholder="New Password" autocomplete="off">
                                            <div class="row">
                                              <div class="col-sm-6">
                                                <span id="8char" class="fas fa-times" style="color:#FF0004;"></span> 8 Characters Long<br>
                                                <span id="ucase" class="fas fa-times" style="color:#FF0004;"></span> One Uppercase Letter
                                              </div>
                                                <div class="col-sm-6">
                                                  <span id="lcase" class="fas fa-times" style="color:#FF0004;"></span> One Lowercase Letter<br>
                                                  <span id="num" class="fas fa-times" style="color:#FF0004;"></span> One Number
                                                </div>
                                              </div>
                                                <input type="password" class="input-lg form-control" name="password2" id="password2" placeholder="Repeat Password" autocomplete="off">
                                            <div class="row">
                                              <div class="col-sm-12">
                                                <span id="pwmatch" class="fas fa-times" style="color:#FF0004;"></span> Passwords Match
                                              </div>
                                            </div>
                                            <input type="submit" class="btn btn-danger mt-2" data-loading-text="Changing Password..." value="Change Password">
                                        </form>
                                    </div>
                                </div>
                          </div>
                </div>
            </div>     
        </div>
      </section>
      <!-- Footer-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>