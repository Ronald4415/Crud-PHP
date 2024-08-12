<?php
include 'conexionFinal.php';

if($_REQUEST['cc'] != ""){
    $dato=$_REQUEST['cc'];
    $funguarda="DELETE FROM persona WHERE cc = '$dato'";

    if($mysqli->query($funguarda)){
        echo "SUS DATOS FUERON ELIMINADOS";
    }else{
        echo "<br>";
        echo "SUS DATOS NO FUERON ELIMINADOS";
        echo "Error: " . $funguarda . "<br>" . $mysqli->error;
    }
}

    $mysqli->close();
?>