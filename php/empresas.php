<?php 

include 'conexionM.php';
$idEmpresaSuscrita = $_GET['idEmpresaSuscrita'];


$consulta = "SELECT idEmpresaSuscrita, NombreEmpresa, RubroEmpresa, InformacionEmpresa, DireccionEmpresa, Dlat, Dlong FROM empresasuscrita WHERE idEmpresaSuscrita = '$idEmpresaSuscrita'";
$resultado = $conexion -> query($consulta);

while ($fila=$resultado -> fetch_array()){
	$locales[] = array_map('utf8_encode', $fila);
}

echo json_encode($locales);
$resultado -> close();

 ?>