<?php 


function getCars($conn){

    $query = "SELECT * FROM coche";
    return mysqli_query($conn, $query);

}


function getNameImagePortada($conn, $id_car){

    $query = "SELECT nombre FROM imagen_coche WHERE id_coche = $id_car AND tipo = 'portada'";
    $result = mysqli_query($conn, $query);
    

    while ($row = mysqli_fetch_array($result)){

        $image = $row['nombre'];
    }

    return $image;

}

function getImagePortada($conn, $id_car){

    $query = "SELECT * FROM imagen_coche WHERE id_coche = $id_car AND tipo = 'portada'";
    $result = mysqli_query($conn, $query);

    return $result;

}

function getImagesSecundarias($conn, $id_car){

    $query = "SELECT * FROM imagen_coche WHERE id_coche = $id_car AND tipo = 'secundaria'";
    $result = mysqli_query($conn, $query);

    return $result;

}

function getCarById($conn, $id){

    $query = "SELECT * FROM coche WHERE id = $id";
    return mysqli_query($conn, $query);
    
}


?>