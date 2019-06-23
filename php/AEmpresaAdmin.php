<?php

 include ("conexion.php");

 if(isset($_POST['submit'])){
    $estadoEmpresa=$mysqli->real_escape_string($_POST['estado']);
    $idE=$mysqli->real_escape_string($_POST['id']);
    
    $query= 'UPDATE empresasuscrita SET estadoEmpresa="'.$estadoEmpresa.'" WHERE idEmpresaSuscrita="'.$idE.'"';

  $resultado=mysqli_query($mysqli, $query);

    if(!$resultado){
        echo "la wea mala";
    }else{
        $id_insert= $mysqli->insert_id;
        header('Location: /mod/modAdmin/Empresas/');
    }
    

 }
?>