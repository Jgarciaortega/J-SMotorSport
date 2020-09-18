<?php 

include("../model/db.php");
include("../model/encryptor.php");

if(isset($_POST['create_car'])){

    $id_car =  insertCar($conn);

    if($id_car != -1){

        if(isset($_FILES['image'])){

            uploadImage($id_car);

            //insertImage($id_car, $conn);
        
        }
    }

}


function insertCar($conn){

        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $anyo = $_POST['anyo'];
        $km = $_POST['km'];
        $cambio = $_POST['cambio'];
        $puertas = $_POST['puertas'];
        $cv = $_POST['cv'];
        $color = $_POST['color'];
        $combustible = $_POST['combustible'];
        $garantia = $_POST['garantia'];

        // realizamos insercion en bbdd ..
        $query = "INSERT INTO coche (id, marca, modelo, anyo, km, cambio, puertas, cv, color, combustible, garantia) 
        values (null,'$marca','$modelo','$anyo','$km','$cambio','$puertas','$cv','$color','$combustible','$garantia')";
        $result = mysqli_query($conn, $query);

        // .. y recogemos el id que se ha creado para esa entrada
        $id = mysqli_insert_id($conn);

        // devolvemos el id o si falla insercion -1
        if(!$result)   return -1;
        else return $id;

}

function uploadImage($id_car){

    $cantidad= count($_FILES["image"]["tmp_name"]);
    $size_limit = 1200000; // 1,2Mb

        for ($i=0; $i<$cantidad; $i++){

            $name_img = $_FILES['image']['name'][$i];
            $type_img = $_FILES['image']['type'][$i];
            $size_img = $_FILES['image']['size'][$i];

            $extension = getImageExtension($type_img);
            $new_name = $id_car .'_' .$i .$extension;

            // subimos foto si el peso de la imagen es menor a...
            if($size_img < $size_limit){
                     // y es una imagen   
                if($type_img == "image/jpeg" || $type_img == "image/jpg" || $type_img == "image/png" || $type_img == "image/gif"){
                         //Subimos el fichero al servidor
                         move_uploaded_file($_FILES["image"]["tmp_name"][$i], '../assets/cars_images/'.$new_name);
                }else{
                        echo ('no es una imagen');
                }

            }else{
                    echo ('excede del size permitido');
             }
        }               
}

function getImageExtension($type_img){

    $extension = '';

    switch($type_img){
        case 'image/jpeg': 
            $extension = '.jpeg';
            break; 
        case 'image/jpg': 
            $extension = '.jpg';
             break;  
        case 'image/png': 
            $extension = '.png';
            break;
        case 'image/gif': 
            $extension = '.gif';
            break; 

    }

    return $extension;
   
}


?>