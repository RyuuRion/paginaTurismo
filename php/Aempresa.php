<?php
 if(isset($_POST['submit'])){
    include ("conexion.php");
    session_start();

    $nombreEmpresa=$mysqli->real_escape_string($_POST['nombre']);
    $rub=$mysqli->real_escape_string($_POST['rubro']);
    $inf=$mysqli->real_escape_string($_POST['infomacion']);
    $direc=$mysqli->real_escape_string($_POST['direccion']);
    $face=$mysqli->real_escape_string($_POST['facebook']);
    $twtt=$mysqli->real_escape_string($_POST['twitter']);
    $insta=$mysqli->real_escape_string($_POST['instagram']);
    $telefono=$mysqli->real_escape_string($_POST['telefono']);
    $correo=$mysqli->real_escape_string($_POST['correo']);
    $dlong= $mysqli->real_escape_string($_POST['longitud']);
    $dlat= $mysqli->real_escape_string($_POST['latitud']);
    $suscrita=$mysqli->real_escape_string($_POST['idempresa']);

    
    $query= 'UPDATE empresasuscrita SET NombreEmpresa="'.$nombreEmpresa.'" , RubroEmpresa="'.$rub.'", InformacionEmpresa="'.$inf.'" , DireccionEmpresa="'.$direc.'" , Dlong="'.$dlong.'", Dlat="'.$dlat.'", facebook="'.$face.'", twitter="'.$twtt.'" , instagram="'.$insta.'" , NtelefonoEmpresa="'.$telefono.'" , CorreoEmpresa="'.$correo.'" WHERE empresasuscrita.idEmpresaSuscrita = "'.$suscrita.'"';

    $resultado=mysqli_query($mysqli, $query);
    $id_insert= $suscrita;

  if($_FILES['archivo']['error']>0){
    echo "error al cargar archivo";
    exit();
  }else{
    $permitidos= array("image/jpeg","image/png","image/jpg","image/JPG","image/JPEG");
    $limite_mb= 80000000;

    if (in_array($_FILES['archivo']["type"], $permitidos) && $_FILES['archivo']["size"] <= $limite_mb ){
      $ruta='../img/'.$id_insert.'/';
      $archivo=$ruta.$_FILES['archivo']["name"];

      if(!file_exists($ruta)){
        mkdir($ruta);
      }
      if(!file_exists($archivo)){
        $resultado= @move_uploaded_file($_FILES['archivo']["tmp_name"], $archivo);
        if($resultado){
          echo "archivo guardado";
        }else{
          echo "archivo no guardado"; 
        }
      }else{
        echo "archivo ya existe";
      }

    }else{
      printf("mecagoendios");
    }
  }
  foreach($_FILES["crEmpresa1"]['tmp_name'] as $key => $tmp_name)
  {
      //Validamos que el archivo exista
      if($_FILES["crEmpresa1"]["name"][$key]) {
          $filename = $_FILES["crEmpresa1"]["name"][$key]; //Obtenemos el nombre original del archivo
          $source = $_FILES["crEmpresa1"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo
          
          $directorio = '../img/'.$id_insert.'/imagenC'; //Declaramos un  variable con la ruta donde guardaremos los archivos
          
          //Validamos si la ruta de destino existe, en caso de no existir la creamos
          if(!file_exists($directorio)){
              mkdir($directorio, 0777) or die("No se puede crear el directorio de extracci&oacute;n");	
          }
          
          $dir=opendir($directorio); //Abrimos el directorio de destino
          $target_path = $directorio.'/'.$filename; //Indicamos la ruta de destino, así como el nombre del archivo
          
          //Movemos y validamos que el archivo se haya cargado correctamente
          //El primer campo es el origen y el segundo el destino
          if(move_uploaded_file($source, $target_path)) {	
                $querye = 'SELECT idEmpresaSuscrita FROM empresasuscrita WHERE Usuario_idUsuario ="'.$_SESSION['id'].'"';
                $resultade=mysqli_query($mysqli, $querye);
                $rew=mysqli_fetch_assoc($resultade);
                
                $idEmpresaS=$rew['idEmpresaSuscrita'];
                $query='SELECT NombreEmpresa, RubroEmpresa, InformacionEmpresa, DireccionEmpresa, facebook, twitter, instagram, NTelefonoEmpresa, CorreoEmpresa, estadoEmpresa FROM empresasuscrita WHERE idEmpresaSuscrita= "'.$idEmpresaS.'"';
                $resultado=mysqli_query($mysqli, $query);

                $row=mysqli_fetch_assoc($resultado);

                $idEmpresaSus= $rew['idEmpresaSuscrita'];
              ?>
              <!doctype html>
              <html lang="es">
                <head>
                  <!-- Required meta tags -->
                  <meta charset="utf-8">
                  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
              
                  <!-- Bootstrap CSS -->
                  <link rel="stylesheet" href="/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                  <link rel="stylesheet" type="text/css" href="/css/style2.css">
                  <link rel="stylesheet" type="text/css" href="/css/style3.css">
                  <link rel="stylesheet" type="text/css" href="/css/fontello.css">
                  <script src="//cdn.ckeditor.com/4.11.4/basic/ckeditor.js"></script>
                  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
                                        <a class="nav-link" href="/mod/modUsuario/Empresa/Actualizar/index.php?id=<?php echo $rew['idEmpresaSuscrita']?>">Administrar Empresa</a>
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
                      <section>
                        <div class="container">
                                  <div class="row">
                                  <div class="col-lg-12 nani1">
                                    <h1>Empresa Actualizada Con Exito</h1><hr><br>
                                    <p>Los datos de la Empresa se han actualizado Exitosamente</p>
                                      <a href="/mod/modUsuario/Empresa/Actualizar/" class="btn btn-success ">Volver A Inicio</a>
                                  </div>
                                  </div>  
                          </div>
                      </section>
                    <!-- Footer-->
                    <footer class="fixed-bottom">
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
              
                  </form>
                </body>
                            </html>
              <?php
              } else {	
              echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
          }
          closedir($dir); //Cerramos el directorio de destino
      }
  }
 }else{
   echo "cuack";
   error_reporting( ~E_NOTICE ); 
 }


?>