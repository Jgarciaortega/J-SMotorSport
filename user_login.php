
<?php

    include("db.php");

    if(isset($_POST['login'])){

        $email = $_POST['email'];
        $pass = $_POST['password'];

        $query = "SELECT * FROM usuario where email like '$email' and password='$pass'";
        $result = mysqli_query($conn, $query);

        if ($result->num_rows > 0){

            $_SESSION['message'] =  'Bienvenido';
            header("Location: index.php");

        }else{

            $_SESSION['message'] = 'Email o contraseña inválidos';
            header("Location: login.php");
        }

        mysqli_close($conn);

        
       
    }

    if(isset($_POST['sign_in'])){

        echo 'registro';
    }



?>