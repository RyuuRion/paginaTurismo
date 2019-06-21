<?php
     include ("conexion.php");

     if(isset($_POST['case'])){

     if(!$mysqli){
        die("murio la db WEEEEEEYYY". mysqli_connect_error() . PHP_EOL);
        }

      $i=$mysqli->real_escape_string($_POST['case']);
      $idUsuario=$mysqli->real_escape_string($_POST['id']);
    
     switch($i){
      case 'actualizarEstado':
        $estado=$mysqli->real_escape_string($_POST['tipoUsuario']);
        $query='UPDATE usuario SET usuarioTipo="'.$estado.'" WHERE idUsuario="'.$idUsuario.'"';
        $resultado=mysqli_query($mysqli, $query);
        $id_insert= $idUsuario;

        if(!$resultado){
            echo ("no Entro la wea");
        }

        

      break;
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
     }
    }
?>