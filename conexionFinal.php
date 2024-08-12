<?php
$mysqli = new mysqli("localhost", "root","", "almacen");
if ($mysqli->connect_errno) {
  echo "fallo al conectar a MySQL: (". $mysqli->connect_errno;
}
  echo $mysqli->host_info . "Conexion exitosa\n";
?>  