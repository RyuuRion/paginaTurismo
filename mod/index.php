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
          <div class="offset-lg-5"></div>
            <a class="nav-link col-lg-2" style="text-align:center;" href="/"><img src="" class="logonav" alt="">css</a>
          <div class="col-lg-5"></div>
          </nav>
    </header>

      <!-- Formulario Contacto-->
        <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12 mt-5">
                <div class="offset-lg-4 col-lg-4 mt-5">
                    <div class="nani1">
                        <img src="https://www.designevo.com/res/templates/thumb_small/double-hexagon-and-simple-name.png" width="150px" alt="LOGO">
                        <form method="POST" action="/php/ValidadLogin.php" enctype="multipart/form-data" >
                            <div class="form-group">
                              <label for="exampleFormControlInput1"> <strong>Email address</strong>  </label>
                              <input type="email" class="form-control" name="email" autofocus id="exampleFormControlInput1" placeholder="name@example.com">
                              <label for="exampleFormControlInput1"><strong>Contraseña</strong></label>
                              <input type="password" required name="pass" class="form-control" id="exampleFormControlInput1" placeholder="Contraseñas">
                            </div>
                            <a href="#" class="offset-lg-5 mt-1 holymolly ">Olvidaste tu Contraseña?</a>
                            <button type="submit" class="btn btn-block mt-2 btn-1 mb-2">Ingresar</button>
                            <hr><hr>
                            <strong><p>Quieres ser parte de esta página, registrate para publicitar tu empresa</p></strong>
                             <a href="/modU/contacto/suscripcion" class="btn btn-danger btn-block ">Registrar</a>
                          </form>
                    </div>
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