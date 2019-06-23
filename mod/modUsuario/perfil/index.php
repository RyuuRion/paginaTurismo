<?php
 include('../../../php/conexion.php');
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
    <link rel="stylesheet" type="text/css" href="/css/fontello.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
                      <a class=" btn-block btn btn-danger active" >
                        <h3>Opciones de Perfil</h3>
                      </a>
                </div>
                <div class="col-lg-12 mt-3">
                  <div class="row">
                      <div class="col-lg-4">
                          <div class="list-group nav nav-tabs" id="myTab" role="tablist">
                              <a href="#tab1" class="list-group-item btn-block nav-item btn btn-warning list-group-item-action active" data-toggle="tab">Mi Empresa</a>
                              <a href="#tab4" class="list-group-item btn-block nav-item btn btn-warning list-group-item-action" data-toggle="tab">Actualizar Datos</a>
                              <a href="#tab3" class="list-group-item btn-block nav-item btn btn-warning list-group-item-action" data-toggle="tab">Cambiar Contraseña</a>
                          </div>
                      </div>
                            <!--TAB DE DATOS EMPRESA-->
                            <div class="col-lg-8 ">
                              <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="home-tab">
                                  <h2 style="text-align:center;">Datos de mi Empresa</h2>
                                    <hr>
                                      <ul class="list-group" class="text-left">
                                        <li class="list-group-item">Nombre Empresa: <strong> <?php echo $row['NombreEmpresa']; ?></strong></li>
                                        <li class="list-group-item">Rubro Empresa: <strong><?php echo $row['RubroEmpresa']; ?> </strong></li>
                                        <li class="list-group-item">Información Empresa: <strong class=" text-justify"><?php echo substr($row['InformacionEmpresa'] ,0, 24); ?>...</strong></li>
                                        <li class="list-group-item">N° de Telefono: <strong><?php echo $row['NTelefonoEmpresa']; ?> </strong> </li>
                                        <li class="list-group-item">Correo de la Empresa: <strong><?php echo $row['CorreoEmpresa']; ?> </strong></li>
                                      </ul>
                                      <div style="text-align:center;" class="mt-3">
                                        <a href="/mod/modUsuario/Empresa/Actualizar/index.php?id=<?php echo $row['idEmpresaSuscrita'];?>" class="btn btn-danger"  >Administrar mi Empresa</a>
                                      </div>
                                </div>
                                <!--TAB DE DATOS usuario actualizar-->
                                    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="profile-tab" style="padding:50px;">
                                      <h2 style="text-align:center;">Actualizar Datos</h2><hr>
                                      <form method="POST" action="/php/actualizarUsuario.php">
                                        <div class="form-row">
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4"><strong>Nombre</strong></label>
                                            <input type="text" class="form-control" name="nombre" id="inputEmail4" value="<?php echo $rew['UsuarioNombre']; ?>" placeholder="Nombre">
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputPassword4"><strong>Apellido</strong></label>
                                            <input type="text" class="form-control" id="inputPassword4" name="apellido" value="<?php echo $rew['UsuarioApellido']; ?>" placeholder="Apellido">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label for="inputAddress"><strong>Número de telefono</strong> </label>
                                          <input type="text" class="form-control" id="inputAddress" name="Ntelefono" value="<?php echo $rew['UsuarioTelefono']; ?>" placeholder="+569xxxxxxxxx">
                                        </div>
                                        <div style="text-align:center;" >
                                        <input type="hidden" name="id" value="<?php echo $_SESSION['id']?>">
                                          <button type="submit" name="case" value="Actualizar" class="btn btn-danger">Actualizar</button>
                                        </div>
                                      </form>
                                    </div>
                                    <!--TAB DE DATOS USUARIO-->
                                    <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="profile-tab">
                                        <h2 style="text-align:center;">Mis Datos</h2>
                                          <ul class="list-group" class="text-left">
                                            <li class="list-group-item">Nombre: <strong> <?php echo $rew['UsuarioNombre']; ?> </strong ></li>
                                            <li class="list-group-item">apellido: <strong><?php echo $rew['UsuarioApellido']; ?> </strong ></li>
                                            <li class="list-group-item">Telefono: <strong><?php echo $rew['UsuarioTelefono']; ?> </strong ></li>
                                            <li class="list-group-item">Correo: <strong><?php echo $rew['UsuarioEmail']; ?> </strong ></li>
                                          </ul>
                                          <div style="text-align:center;" class="mt-3">
                                            <a href="#tab2" class="btn btn-danger" data-toggle="tab" >Actualizar Mis datos</a>
                                          </div>
                                    </div>
                                    <!--TAB DE CAMBIAR CONTRASEÑA-->
                                    <div class="tab-pane fade offset-lg-1 col-lg-10" id="tab3" role="tabpanel" aria-labelledby="contact-tab">
                                      <h2 style="text-align:center;">Cambiar Contraseña</h2><hr>
                                        <form method="POST"  action="/php/actualizarUsuario.php"  style="text-align:center;">
                                          <input type="password" id="passwordA" name="passwordA" class="input-lg form-control" placeholder="Contraseña Actual">
                                          <hr>
                                            <input type="password" class="input-lg mt-2 form-control" name="password1" id="password1" placeholder="New Password" autocomplete="off">
                                            <div class="row">
                                              <div class="col-sm-6">
                                                <span id="8char" class="fas fa-times" style="color:#FF0004;"></span> 8 Characters Long<br>
                                                <span id="upercase" class="fas fa-times" style="color:#FF0004;"></span> One Uppercase Letter
                                              </div>
                                                <div class="col-sm-6">
                                                  <span id="lcase" class="fas fa-times" style="color:#FF0004;"></span> One Lowercase Letter<br>
                                                  <span id="num" class="fas fa-times" style="color:#FF0004;"></span> One Number
                                                </div>
                                              </div>
                                                <input type="password" class="input-lg form-control" name="pass2" id="pass2" placeholder="Repeat Password" autocomplete="off">
                                            <div class="row">
                                              <div class="col-sm-12">
                                                <span id="passmatch" class="fas fa-times" style="color:#FF0004;"></span> Passwords Match
                                              </div>
                                            </div>
                                            <input type="submit" value="Cambiar Password" name="case" class="btn btn-danger mt-2" data-loading-text="Changing Password...">
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
    <script>
  
  $(document).ready(function(){
    var pass1= document.getElementById("password1");
    var pass2= document.getElementById("pass2");
    
      var charComp=document.getElementById("8char");
      var upperCasteo=document.getElementById("upercase");
      var lowercasteo=document.getElementById("lcase");
      var numcast=document.getElementById("num");
  
    $(pass1).keyup(function(){
      var ucase = new RegExp("[A-Z]+");
      var lcase = new RegExp("[a-z]+");
      var num = new RegExp("[0-9]+");
      var pwmatch=document.getElementById("passmatch");
      if($(pass1).val().length >= 8){
        $(charComp).removeClass("fa-times");
        $(charComp).addClass("fa-check");
        $(charComp).css("color","#00A41E");
      }else{
        $(charComp).removeClass("fa-check");
        $(charComp).addClass("fa-times");
        $(charComp).css("color","#FF0004");
      }
      
      if(ucase.test($(pass1).val())){
        $(upperCasteo).removeClass("fa-times");
        $(upperCasteo).addClass("fa-check");
        $(upperCasteo).css("color","#00A41E");
      }else{
        $(upperCasteo).removeClass("fa-check");
        $(upperCasteo).addClass("fa-times");
        $(upperCasteo).css("color","#FF0004");
      }
      
      if(lcase.test($(pass1).val())){
        $(lowercasteo).removeClass("fa-times");
        $(lowercasteo).addClass("fa-check");
        $(lowercasteo).css("color","#00A41E");
      }else{
        $(lowercasteo).removeClass("fa-check");
        $(lowercasteo).addClass("fa-times");
        $(lowercasteo).css("color","#FF0004");
      }
      
      if(num.test($(pass1).val())){
        $(numcast).removeClass("fa-times");
        $(numcast).addClass("fa-check");
        $(numcast).css("color","#00A41E");
      }else{
        $(numcast).removeClass("fa-check");
        $(numcast).addClass("fa-times");
        $(numcast).css("color","#FF0004");
      }
      if($(pass1).val() == $(pass2).val()){
          $(pwmatch).removeClass("fa-times");
          $(pwmatch).addClass("fa-check");
          $(pwmatch).css("color","#00A41E");
        }else{
          $(pwmatch).removeClass("fa-check");
          $(pwmatch).addClass("fa-times");
          $(pwmatch).css("color","#FF0004");
        }
    });
    $(pass2).keyup(function(){
      var pwmatch=document.getElementById("passmatch");
      if($(pass1).val() == $(pass2).val()){
          $(pwmatch).removeClass("fa-times");
          $(pwmatch).addClass("fa-check");
          $(pwmatch).css("color","#00A41E");
        }else{
          $(pwmatch).removeClass("fa-check");
          $(pwmatch).addClass("fa-times");
          $(pwmatch).css("color","#FF0004");

        }
    });
  });
  </script>
  </body>
</html>
