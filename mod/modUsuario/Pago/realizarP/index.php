<?php
 include('../../../../php/conexion.php');
 session_start();
  if(empty($_SESSION['nombre'])){
  header('Location: /');
}
//datos Empresa
$dtsEmpresa='SELECT idEmpresaSuscrita, NombreEmpresa, RubroEmpresa, InformacionEmpresa, NTelefonoEmpresa, CorreoEmpresa FROM empresasuscrita WHERE Usuario_idUsuario="'.$_SESSION['id'].'"';
$resultado=mysqli_query($mysqli, $dtsEmpresa);
$row=mysqli_fetch_assoc($resultado);

//datos usuario
$datosUsuario='SELECT UsuarioEmail, UsuarioNombre, UsuarioApellido, UsuarioTelefono FROM usuario WHERE idUsuario="'.$_SESSION["id"].'"';
$resultUs=mysqli_query($mysqli, $datosUsuario);
$rew=mysqli_fetch_assoc($resultUs);
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
    <link rel="stylesheet" type="text/css" href="/css/pago.css">
    <link rel="stylesheet" type="text/css" href="/css/fontello.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Inicio</title>
  </head>
  <body>
      <section>
        <div class="login-page">
                <div class="form">
                <img src="\images\LogoBanco.gif">
                <img src="/images/logowp2.gif" alt="">
                    <form class="register-form mt-2">
                    <input type="text" placeholder="name"/>
                    <input type="password" placeholder="password"/>
                    <input type="text" placeholder="email address"/>
                    <button>create</button>
                    <p class="message">Already registered? <a href="#">Sign In</a></p>
                    </form>
                    <form class="login-form">
                    <input type="text" placeholder="RUT" required/>
                    <input type="password" placeholder="Contraseña" required/>
                    <a href="pagoRealizado/" class="btn btn-warning btn-block">Login</a>
                    </form>
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
