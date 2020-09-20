<?php 

include("../model/db.php");
include("../model/encryptor.php");
include("../plugins/compressImage.php");
include("../plugins/resizeImage.php");

if(isset($_POST['create_car'])){

    // guarda los datos en la bbdd y devuelve el id generado
    $id_car =  insertCar($conn);

    // si $id_car = -1 ha habido error al guardar en la base de datos
    if($id_car != -1){
        // si existe imagen de portada ...
        if(isset($_FILES['main_image'])){

            $fileName = basename($_FILES['main_image']['name']);    
            $imageTempSource = $_FILES["main_image"]["tmp_name"];  
            $size_img = $_FILES['main_image']['size'];
            $succes = uploadImage($fileName, $size_img, $imageTempSource);
            // si la imagen se ha subido ok se insertan datos en la BBDD
            if($succes)  insertImage($fileName, 'portada', $id_car, $conn);
   
        }

        // ... si existen imagenes secundarias
        if(isset($_FILES['image'])){

            $cantidad= count($_FILES["image"]["tmp_name"]);

            for ($i=0; $i<$cantidad; $i++){

                $fileName = basename($_FILES['image']['name'][$i]);    
                $imageTempSource = $_FILES["image"]["tmp_name"][$i];  
                $size_img = $_FILES['image']['size'][$i];  
                $succes = uploadImage($fileName, $size_img, $imageTempSource);
                // si la imagen se ha subido ok se insertan datos en la BBDD
                if($succes) insertImage($fileName, 'secundaria', $id_car, $conn);

            }

        }

        //header("Location: ../views_admin/create_car.php");

    }

}

function insertImage($name_image, $tipo, $id_car, $conn){

    // realizamos insercion en bbdd ..
    $query = "INSERT INTO imagen_coche (id, nombre, tipo, id_coche )values (null,'$name_image','$tipo','$id_car')";
    $result = mysqli_query($conn, $query);

    if(!$result){

        die('Error al insertar datos imagen en BBDD');

    }else{
        echo('Exito');
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

function uploadImage($fileName, $size_img, $imageTempSource){

    // Ruta subida
    $uploadPath = "../assets/cars_images/"; 
    // Extensiones permitidas
    $allowTypes = array('jpg','png','jpeg','gif'); 
    // File info
    $imageUploadPath = $uploadPath . $fileName;
    $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION); 
    $succes = false;

    // Permitimos solo extensiones de imagenes
    if(in_array($fileType, $allowTypes)){ 

        // Comprimos y resizeamos imagen
        $compressedImage = compressImage($imageTempSource, $imageUploadPath, 100, 1020); 

        if($compressedImage){ 
            $succes = true;
        }
    }
        
    return $succes;
                 
}

?>