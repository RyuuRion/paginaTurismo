<?php

 include ('conexion.php');

 $email= $mysqli->real_escape_string($_POST['email']);
 $pass=password_hash($_POST['pass'], PASSWORD_DEFAULT);
 $nombre= $mysqli->real_escape_string($_POST['nombre']);
 $apellido= $mysqli->real_escape_string($_POST['apellido']);
 $teleffono= $mysqli->real_escape_string($_POST['telefono']);
 $estado= "2";

 $query= 'INSERT into usuario (UsuarioEmail, UsuarioPassword, UsuarioNombre, UsuarioApellido, UsuarioTelefono, UsuarioTipo) Values ("'.$email.'","'.$pass.'","'.$nombre.'","'.$apellido.'","'.$teleffono.'","'.$estado.'")';

 $resultado=mysqli_query($mysqli, $query);
 $id_insert= $mysqli->insert_id;

 if(!$resultado){
    echo 'wea mala no entro en la db';
 }
 header('Location: /mod');
 
?>