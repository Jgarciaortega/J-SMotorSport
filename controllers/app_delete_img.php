<?php

include("../model/db.php");

if(!empty($_GET['id'])){
    
    $id_img = $_GET['id'];
    $query = "DELETE FROM imagen_coche WHERE id = $id_img";
    $result = mysqli_query($conn, $query);
    $result = json_encode($result);
   
}else{

    die('No se pudo recoger el id de la imagen');
}

echo $result;

?>