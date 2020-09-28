<?php

include("../model/db.php");

if(!empty($_GET['id'])){
    
    $id_car = $_GET['id'];
    $query = "DELETE FROM coche WHERE id = $id_car";
    $result = mysqli_query($conn, $query);
    $result = json_encode($result);
   
}else{

    die('No se pudo recoger el id del vehiculo');
}

echo $result;

?>