<?php
include 'conexionFinal.php';

$recibodatos = $_REQUEST['cc'];
echo $recibodatos;
$respuesta = array();
$respuesta ["frutas"] = array();

$sql="SELECT * FROM persona WHERE cc = '$recibodatos'";
$result=mysqli_query($mysqli ,$sql);
while($row = mysqli_fetch_array($result)){

    $tmp=array();
    $tmp["cc"] = $row["cc"];
    $tmp["nombre"] = $row["nombre"];

array_push($respuesta["frutas"],$tmp);
}
header('Content-Type: application/json');

echo json_encode($respuesta);

?>

