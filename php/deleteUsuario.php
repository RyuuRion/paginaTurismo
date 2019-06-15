<?php
     include ("conexion.php");

     if(!$mysqli){
        die("murio la db WEEEEEEYYY". mysqli_connect_error() . PHP_EOL);
        }

    $idUsuario= $mysqli->real_escape_string($_GET['id']);
     $query= 'UPDATE usuarioTipo SET estadoUsuarioS="2" WHERE idusuarioSuscrito="'.$idUsuario.'"';
    
     $resultado=mysqli_query($mysqli, $query);
     if(!$resultado){
        echo ("no Entro la wea");
    }

    header('Location: ../mod/modAdmin/usuarios/');

?>