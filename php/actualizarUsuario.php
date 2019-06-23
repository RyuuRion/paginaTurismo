<?php
     include ("conexion.php");
     session_start();

     if(isset($_POST['case'])){

     if(!$mysqli){
        die("murio la db WEEEEEEYYY". mysqli_connect_error() . PHP_EOL);
        }

      $i=$mysqli->real_escape_string($_POST['case']);
      $idUsuario=$mysqli->real_escape_string($_SESSION['id']);
    
     switch($i){
      case 'Actualizar':     

      $nombre=$mysqli->real_escape_string($_POST['nombre']);
      $apellido=$mysqli->real_escape_string($_POST['apellido']);
      $telefono=$mysqli->real_escape_string($_POST['Ntelefono']);

      $query='UPDATE usuario SET UsuarioNombre="'.$nombre.'", UsuarioApellido="'.$apellido.'", UsuarioTelefono="'.$telefono.'" WHERE idUsuario="'.$idUsuario.'"';

      $resultado=mysqli_query($mysqli, $query);
      $id_insert= $mysqli->insert_id;
      if(!$resultado){
         echo ("no Entro la wea");
     }

     header('Location: ../mod/modUsuario/Perfil/');
      break;
      case 'Cambiar Password':

      $askpass= $mysqli->real_escape_string($_POST['passwordA']);
      $P1=$mysqli->real_escape_string($_POST['password1']);
      $P2=password_hash($_POST['pass2'], PASSWORD_DEFAULT);
      $idU= $mysqli->real_escape_string($_SESSION['id']);

     $query='SELECT UsuarioPassword FROM usuario WHERE idUsuario="'.$idU.'"';
     $resultado=mysqli_query($mysqli,$query);
     $recogida=mysqli_fetch_assoc($resultado);
     $compropass= password_verify($askpass, $recogida['UsuarioPassword']);
     if($compropass){

      $compropass2= password_verify($P1, $P2);
       if($compropass2){
        $query='UPDATE usuario SET UsuarioPassword="'.$P2.'" WHERE idUsuario="'.$idU.'"';
        $resultado=mysqli_query($mysqli, $query);
        $id_insert= $mysqli->insert_id;
        header('Location: ../mod/modUsuario/perfil');
        print('<p>password cambiada correctamente</p>');
       }else{
        echo('mecagoendios la wea de password esta mala');
       }
     }else{
       echo('aweonao no estas recogiendo el id');
     }
      

      break;
      case "Actualizar Usuario":
        $idusurioS=$mysqli->real_escape_string($_POST['idusuariosuscrito']);
        $tipoU=$mysqli->real_escape_string($_POST['Tipo']);
        $query='UPDATE usuario SET usuarioTipo="'.$tipoU.'" WHERE idUsuario="'.$idusurioS.'"';
        $resultado=mysqli_query($mysqli, $query);
        if(!$resultado){
          echo "esta malaaaaaa";
        }else{
          $id_insert= $mysqli->insert_id;
          header('Location: /mod/modAdmin/usuarios/');
        }
      break;
     }
    }
?>