<?php 

$conexion = mysqli_connect("localhost","root","","intelcost_bienes");

$select = mysqli_query($conexion, "SELECT * FROM bienes");

while ($data = mysqli_fetch_assoc($select)) {
    $array[] = $data;
}
echo json_decode($array);


?>