<?php

    include("../model/db.php");
    include("../model/encryptor.php");

    if(isset($_POST['sign_in'])){

        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $hash = encripta($password);

        $query = "INSERT INTO usuario (id, nombre, email, password) VALUES(null,'$nombre','$email','$hash')";
        $result = mysqli_query($conn,$query);

        if(!$result){

            die("Query Failed");

        }
        
        echo 'saved';

    }

?>