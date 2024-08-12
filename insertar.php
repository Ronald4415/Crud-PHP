<?php
include 'conexionFinal.php';
$recibodatos0=$_REQUEST['cc'];
$recibodatos1=$_REQUEST['nombre'];
$recibodatos2=$_REQUEST['direccion'];
$recibodatos3=$_REQUEST['telefono'];

echo $recibodatos0;
echo $recibodatos1;
echo $recibodatos2;
echo $recibodatos3;

$funguarda="INSERT INTO persona (cc, nombre, direccion, telefono)
VALUES ('$recibodatos0','$recibodatos1','$recibodatos2','$recibodatos3')";

if($mysqli->query($funguarda)){
    echo "Datos almacenados correctamente :)";
}else{
    echo "error carga de datos :( ";
    echo "Error: " . $funguarda . "<br>" . $mysqli->errpr;
}

$mysqli->close();


?>