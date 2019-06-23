<?php 

include 'conexionM.php';

$consulta = "SELECT NombreEmpresa, RubroEmpresa, InformacionEmpresa, DireccionEmpresa, Dlat, Dlong FROM empresasuscrita";
$resultado = mysqli_query($mysqli, $consulta);

while ($fila=$resultado -> fetch_array()){
	$locales[] = array_map('utf8_encode', $fila);
}

echo json_encode($locales);
$resultado -> close();

?>