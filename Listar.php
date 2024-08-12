<?php
include 'conexionFinal.php';
$sentencia="SELECT * FROM personas";
$resultado=$mysqli->query($sentencia) or die (mysqli_error($mysqli));
while ($fila=$resultado->fetch_assoc()){
    echo"<tr>";
    echo"<td>".$fila['cc']."</td>";
    echo"<td>".$fila['nombre']."</td>";
    echo"<td>".$fila['direccion']."</td>";
    echo"<td>".$fila['telefono']."</td>";
    echo "<td><a href=''>Edit</a></td>";
    echo "<td><a href=''>Delte</a></td>";

}


?>