<?php 


function getCars($conn){

    $query = "SELECT * FROM coche";
    return mysqli_query($conn, $query);

}


function getImage($conn, $id_car){

    $query = "SELECT nombre FROM imagen_coche WHERE id_coche = $id_car";
    $result = mysqli_query($conn, $query);
    

    while ($row = mysqli_fetch_array($result)){

        $image = $row['nombre'];
    }

    return $image;

}

function getCarById($conn, $id){

    $query = "SELECT * FROM coche WHERE id = $id";
    return mysqli_query($conn, $query);
    
}


?>