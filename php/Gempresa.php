<?php

 include ("conexion.php");

 if(isset($_POST['submit'])){
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
    $usuario=$mysqli->real_escape_string($_POST['iduser']);
    
    $query= 'INSERT into empresasuscrita (NombreEmpresa , RubroEmpresa , InformacionEmpresa , DireccionEmpresa, dlong, dlat , facebook , twitter , instagram , NtelefonoEmpresa , CorreoEmpresa , estadoEmpresa , Usuario_idUsuario) Values ("'.$nombreEmpresa.'","'.$rub.'","'.$inf.'","'.$direc.'","'.$dlong.'", "'.$dlat.'" , "'.$face.'","'.$twtt.'","'.$insta.'","'.$telefono.'","'.$correo.'", "1" ,"'.$usuario.'")';

  $resultado=mysqli_query($mysqli, $query);
  $id_insert= $mysqli->insert_id;

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

  foreach($_FILES['crEmpresa1']['tmp_name'] as $key => $tmp_name)
	{
		//Validamos que el archivo exista
		if($_FILES['crEmpresa1']["name"][$key]) {
			$filename = $_FILES['crEmpresa1']["name"][$key]; //obtener nombre del archivo
			$source = $_FILES['crEmpresa1']["tmp_name"][$key]; //caputrar nombre temporal
			$directorio = '../img/'.$id_insert.'/imagenC'; //variable del directorio
			
			//comprobar si existe la ruta del directorio
			if(!file_exists($directorio)){
				mkdir($directorio, 0777) or die("No se puede crear el directorio de extracci&oacute;n");	
			}
			
			$dir=opendir($directorio); //Abrimos el directorio de destino
			$target_path = $directorio.'/'.$filename; //Indicamos la ruta de destino, así como el nombre del archivo
			
			//Movemos y validamos que el archivo se haya cargado correctamente
			//El primer campo es el origen y el segundo el destino
			if(move_uploaded_file($source, $target_path)) {	
				echo "El archivo $filename se ha almacenado en forma exitosa.<br>";
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