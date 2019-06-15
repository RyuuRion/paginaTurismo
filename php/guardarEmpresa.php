<?php

 include ("conexion.php");

    $nombreEmpresa=$_POST['nombre'];
    $rub=$_POST['rubro'];
    $inf=$_POST['infomacion'];
    $direc=$_POST['direccion'];
    $face=$_POST['facebook'];
    $twtt=$_POST['twitter'];
    $insta=$_POST['instagram'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];
    $usuario=$_POST['iduser'];
    
    $query= 'INSERT into empresasuscrita (NombreEmpresa , RubroEmpresa , InformacionEmpresa , DireccionEmpresa , facebook , twitter , instagram , NtelefonoEmpresa , CorreoEmpresa , estadoEmpresa , Usuario_idUsuario) Values ("'.$nombreEmpresa.'","'.$rub.'","'.$inf.'","'.$direc.'","'.$face.'","'.$twtt.'","'.$insta.'","'.$telefono.'","'.$correo.'", "1" ,"'.$usuario.'")';

  $resultado=mysqli_query($mysqli, $query);
  $id_insert= $mysqli->insert_id;

  if($_FILES['archivo']['error']>0){
    echo "error al cargar archivo";
    exit();
  }else{
    $permitidos= array("image/jpeg","image/png","image/jpg");
    $limite_mb= 5000;

    if (in_array($_FILES['archivo']["type"], $permitidos) && $_FILES['archivo']["size"] <= $limite_mb *1024){
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
   



?>