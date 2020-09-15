
<?php 

//https://diego.com.es/encriptacion-y-contrasenas-en-php#:~:text=%20Encriptaci%C3%B3n%20y%20contrase%C3%B1as%20en%20PHP%20%201,de%20contrase%C3%B1as%20crea%20un%20password%20muy...%20More%20
        // // encripta password
        // password_hash($pass, PASSWORD_DEFAULT, ['cost' => 15]) );
        // // devuelve true si la pass introducido y la password encriptada en la base de datos coinciden
        // if(password_verify($pass,$hash)) => 

function encripta($password){

    return password_hash($password, PASSWORD_DEFAULT, ['cost' => 15]);
}

function verify($password,$hash){
    
    return password_verify($password, $hash);
}


?>

