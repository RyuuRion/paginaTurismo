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
              <li class="form-inline  my-2 my-lg-0">
                      <a href="/modU/contacto" class="nav-link mx-2 my-2 btn btn-outline-light my-sm-0"> Contacto</a>
                      <a href="/mod/" class="nav-link mx-2 btn btn-outline-light my-2 my-sm-0">Iniciar Sesión</a>
                </li>   
            </div>
          </nav>
    </header>

      <!-- Formulario Contacto-->
        <div class="container">
            <div class="row">
                <div class="offset-lg-3 col-lg-6 mt-5">
                    <div class="mt-5 nani1">
                        <h2 class="" >Registro</h2>
                        <p></p>
                        <form method="POST" action="/php/registrar" enctype="multipart/form-data">
                            <div class="form-group">
                              <label for="exampleFormControlInput1"> <strong>Email / correo</strong>  </label>
                              <input type="email" name="email" class="form-control" id="exampleFormControlInput1" required placeholder="correo@example.com">
                              <label for="exampleFormControlInput1"><strong>Password</strong></label>
                              <input type="password" name="pass" class="form-control" id="exampleFormControlInput1"required placeholder="Contraseña">
                              <label for="exampleFormControlInput1"><strong>Nombre</strong></label>
                              <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1" required placeholder="Nombre">
                              <label for="exampleFormControlInput1"><strong>Apellido</strong></label>
                              <input type="text" name="apellido" class="form-control" id="exampleFormControlInput1" required placeholder="Apellido">
                              <label for="exampleFormControlInput1"><strong>Numero de Telefóno</strong></label>
                              <input type="text" name="telefono" class="form-control" id="exampleFormControlInput1" required placeholder="+569xxxxxxxx">
                            </div>
                            <button type="submit" class="btn btn-block btn-1 mb-2">Enviar</button>
                          </form>
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