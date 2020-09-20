<?php 

/* 
 * Función personalizada para comprimir y resizear imagen
 * subir una imagen mediante PHP
 */ 

function compressImage($source, $destination, $quality, $maxWidth) { 
    // Obtenemos la información de la imagen
    $imgInfo = getimagesize($source); 
    $mime = $imgInfo['mime']; 
       
    // Creamos una imagen
    switch($mime){ 
        case 'image/jpeg': 
            $image = imagecreatefromjpeg($source); 
            break; 
        case 'image/png': 
            $image = imagecreatefrompng($source); 
            break; 
        case 'image/gif': 
            $image = imagecreatefromgif($source); 
            break; 
        default: 
            $image = imagecreatefromjpeg($source); 
    } 

    // Retocamos sus medidas 
    $imgWidth = imagesx($image);
    $imgHeight = imagesy($image);

    if($imgWidth > $imgHeight){

        $newImgWidth = $maxWidth;
        $newImgHeight = ($maxWidth * $imgHeight) / $imgWidth;

    }else{

        $newImgHeight = $maxWidth;
        $newImgWidth = ($maxWidth * $imgWidth) / $imgHeight;

    }

    $newImage = imagecreatetruecolor($newImgWidth, $newImgHeight);
    imagecopyresized($newImage, $image, 0, 0, 0, 0, $newImgWidth, $newImgHeight, $imgWidth, $imgHeight );

    // Guardamos la imagen
    imagejpeg($newImage, $destination, $quality); 
     
    // Devolvemos la imagen comprimida
    return $destination; 
} 

?>