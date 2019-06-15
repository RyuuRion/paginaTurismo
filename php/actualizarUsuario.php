<?php
     include ("conexion.php");
     
     if(!$mysqli){
        die("murio la db WEEEEEEYYY". mysqli_connect_error() . PHP_EOL);
        }
      $idUsuario= $mysqli->real_escape_string($_POST['idusuariosuscrito']);
      $email=$mysqli->real_escape_string($_POST['email']);
      $nombre=$mysqli->real_escape_string($_POST['nombre']);
      $apellido=$mysqli->real_escape_string($_POST['apellido']);
      $telefono=$mysqli->real_escape_string($_POST['telefono']);
      $estado=$mysqli->real_escape_string($_POST['estado']);
      $admin=$mysqli->real_escape_string($_POST['admin']); 
      
     $query='UPDATE usuariosuscrito SET Nombre="'.$nombre.'", ApellidoUsuarioSus="'.$apellido.'", EmailUsuarioSus="'.$email.'", TelefonoUsuario="'.$telefono.'", estadoUsuarioS="'.$estado.'", UsuarioAdmin_idUsuarioAdmin="'.$admin.'" WHERE idusuarioSuscrito="'.$idUsuario.'"';

     $resultado=mysqli_query($mysqli, $query);
     if(!$resultado){
        echo ("no Entro la wea");
    }

    $id_insert= $idUsuario;

    header('Location: ../mod/modAdmin/usuarios/');
  
?>