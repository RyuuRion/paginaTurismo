<?php
    session_start();
    if( isset($_POST['email']) and isset($_POST['pass'])){

        include('conexion.php');
        $usuario= mysqli_real_escape_string($mysqli,$_POST['email']);
        $pass= mysqli_real_escape_string($mysqli,$_POST['pass']);

        $query= 'SELECT idusuario, UsuarioEmail, UsuarioNombre,UsuarioApellido, UsuarioTipo  FROM usuario WHERE UsuarioEmail="'.$usuario.'"';
        $comprobacion= $mysqli->query($query);
        $row= mysqli_fetch_assoc($comprobacion);
        if(!$comprobacion){
            echo "usuario ql malo";
        }else{
            $query2='SELECT UsuarioPassword FROM usuario WHERE UsuarioEmail="'.$usuario.'"';
            $resultado=mysqli_query($mysqli,$query2);
            $recogida=mysqli_fetch_assoc($resultado);
            $compropass= password_verify($pass, $recogida['UsuarioPassword']);
            if($compropass){
                if($row['UsuarioTipo'] == '1'){
                    $_SESSION['nombre']= $row['UsuarioNombre']." ". $row['UsuarioApellido'];
                    $_SESSION['id']= $row['idusuario'];
                    header('Location: ../mod/modAdmin/');
                }else{
                    $_SESSION['nombre']= $row['UsuarioNombre']." ". $row['UsuarioApellido'];
                    $_SESSION['id']= $row['idusuario'];
                    header('Location: ../mod/modUsuario/');
                }
            }else{
                print 'los datos son incorrectos <br>
                <a href="../">volver al login </a>';
            }
        }

    }else{
        print 'los datos son incorrectos <br>
        <a href="/mod">volver al login </a>';
    }
  ?>