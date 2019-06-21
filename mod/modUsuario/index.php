<?php

  session_start();
  include ('../../php/conexion.php');
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

      <!--Botones-->
      <section>
        <div class="container">
                <div class="row" style="margin-top:10%;">
                        <a href="/mod/modUsuario/Perfil/" class="col-xl-6 btnadmin" style="background: url('https://image.flaticon.com/icons/svg/17/17004.svg'); background-repeat:no-repeat; background-position:center;  background-size:40%;"><h5>Perfil</h5></a>
                        <a href="/mod/modUsuario/Pago/" class="col-xl-6 btnadmin" style="background:url('https://previews.123rf.com/images/bjarts/bjarts1701/bjarts170100374/69878577-dollar-prosperity-symbol-logo-money-icon-sign-design-vector-illustration-isolated-on-white-backgroun.jpg') ; background-repeat:no-repeat; background-position:center; background-size:50%; background-color:#fff;" ><h5>Portal de Pago</h5></a>
                        <?php 
                        if(!$resultado){
                         ?>    
                         <a href="/mod/modUsuario/Empresa" class="col-xl-12 btnadmin" style="background:url('/images/employer-branding.png') ; background-repeat:no-repeat; background-position:center; background-size:100%;"><h5>Crear Empresa</h5></a>
                         <?php
                        }else{
                        ?>
                        <a href="/mod/modUsuario/Empresa/Actualizar/index.php?id=<?php echo $row['idEmpresaSuscrita'];?>" class="col-xl-12 btnadmin" style="background:url('/images/employer-branding.png') ; background-repeat:no-repeat; background-position:center; background-size:100%;"><h5>Actualizar Empresa</h5></a>
                        <?php
                        }
                        ?>
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