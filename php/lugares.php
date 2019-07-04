<?php 

include 'conexionM.php';
$idInformacionLugares=$_GET['idInformacionLugares'];

$consulta = "SELECT idInformacionLugares, InformacionLugares, DireccionLugares, nombreLugares, tipoLugar, DLlat, DLlong FROM informacionlugares WHERE idInformacionLugares = '$idInformacionLugares'";
$resultado = $conexion -> query($consulta);

while ($fila=$resultado -> fetch_array()){
	$lugares[] = array_map('utf8_encode', $fila);
}

echo json_encode($lugares);
$resultado -> close();

 ?>