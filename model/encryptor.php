
<?php 

function encripta($password){
    // cost => numero de veces que hashea la password, a mas coste, mayor seguridad pero mas ralentizara
    return password_hash($password, PASSWORD_DEFAULT, ['cost' => 15]);
}

function verify($password,$hash){
    
    return password_verify($password, $hash);
}


?>

