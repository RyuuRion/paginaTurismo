<?php
  session_start();
  if(empty($_SESSION['nombre'])){
    header('Location: /');
  }
  
  include ("../../../../php/conexion.php");


  $idusuario= $_GET['id'];

  $sql='SELECT * FROM usuario Where idUsuario="'.$idusuario.'"';
  $resultado= mysqli_query($mysqli, $sql);
  if(!$resultado){
      echo ("no Entro la wea");
  }
  $col = mysqli_fetch_assoc($resultado);

  $id_insert= $mysqli->insert_id;
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
                <div class="offset-lg-3">
                </div>
                <div class="col-lg-6 mt-5">
                    <div class="mt-5 nani1">
                        <h2 class="" > Actualizar Usuario</h2>
                        <form method="POST" action="/php/actualizarUsuario.php">
                            <div class="form-group">
                                <input type="hidden" id="idusuariosuscrito" name="idusuariosuscrito" value="<?php echo $col['idUsuario']; ?>">
                                <label for="exampleFormControlInput1"> <strong>Nombre</strong>  </label>
                                <input type="text" disabled name="nombre" class="form-control" id="exampleFormControlInput1" value="<?php echo $col['UsuarioNombre'] ?>" placeholder="Nombre" >
                                <label for="exampleFormControlInput1"> <strong>Apellido</strong>  </label>
                                <input type="text"name="apellido" disabled class="form-control" value="<?php echo $col['UsuarioApellido']; ?>" id="exampleFormControlInput1" placeholder="apellido">
                                <label for="exampleFormControlInput1">  <strong>Email address</strong>  </label>
                                <input type="email"name="email" disabled class="form-control" value="<?php echo $col['UsuarioEmail'] ?>" id="exampleFormControlInput1" placeholder="name@example.com">
                                <label for="exampleFormControlInput1"><strong>Numero de Telefóno</strong></label>
                                <input type="text" name="telefono" disabled class="form-control" value="<?php echo $col['UsuarioTelefono'] ?>" id="exampleFormControlInput1" placeholder="+569xxxxxxxx">
                                <div class="form-group">
                                  <label for="exampleFormControlSelect1"><strong>Estado</strong></label>
                                  <select name="Tipo" autofocus class="form-control" id="exampleFormControlSelect1">
                                      <option value="1">Administrador</option>
                                      <option value="2">No Suscrito</option>
                                      <option value="3">Suscrito</option>
                                  </select>
                                </div>
                            </div>
                            <button type="submit" name="case" value="Actualizar Usuario" class="btn btn-block btn-1 mb-2">Enviar</button>
                          </form>
                    </div>
                </div>
                <div class="col-lg-3">
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