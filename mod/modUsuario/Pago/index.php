<?php
  include('../../../php/conexion.php');
  session_start();
  if(empty($_SESSION['nombre'])){
    header('Location: /');
  }
  
  $query = 'SELECT idEmpresaSuscrita, NombreEmpresa FROM empresasuscrita WHERE Usuario_idUsuario ="'.$_SESSION['id'].'"';
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

      <!--Botones-->
      <section>
        <div class="container">
                <div class="row" style="margin-top:15%;">
                      <a class=" btn-block btn btn-danger active" >
                        <h3>Portal de Pago</h3>
                      </a>
                </div>
                <div class="row mt-2">
                        <div class="col-4">
                            <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item btn-block nav-item btn btn-warning list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                <h2 style="text-align:center;">Datos de mi Empresa</h2>
                                    <hr>
                                      <ul class="list-group" class="text-left">
                                        <li class="list-group-item">Expiración de Suscripción: XX/XX/XXXX</li>
                                        <li class="list-group-item">Nombre Empresa: <strong><?php echo $row['NombreEmpresa'] ?> </strong> </li>
                                      </ul>
                                      <div style="text-align:center;" class="mt-3">
                                      <a class="btn-block btn btn-danger nav-item btn btn-warning" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Pagar Suscripción</a>
                                      </div>
                                </div>
                                <div class="tab-pane fade dx" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                    <h2 style="text-align:center;">Pago de Suscripción</h2>
                                    <hr>
                                    <label for=""><h3>Pagar Con webpay</h3> <img src="https://www.cosasnuestras.cl/wp-content/uploads/2016/05/webpay-logo.png" alt="webpay logo" width="400px"></label>
                                        <a href="realizarP/" class="btn-block nav-item btn btn-success mt-2">Proceder Al Pago</a>
                                        <a href="/mod/modUsuario/Pago/" class="btn-block nav-item btn btn-danger mt-2">Atras</a>
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