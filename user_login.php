
<?php

    include("db.php");

    if(isset($_POST['login'])){

        $email = $_POST['email'];
        $pass = $_POST['password'];

        $query = "SELECT * FROM usuario where email like '$email'";
        $result = mysqli_query($conn, $query);

        if ($result->rowCount() == 1){

        $_SESSION['message'] =  'Bienvenido';

            } else {
               
                $_SESSION['message'] = 'Email o contraseña inválidos';
               
            }
          
            mysqli_close($conn);

       
          header("Location: login.php");
       
        
 
    }

    if(isset($_POST['sign_in'])){

        echo 'registro';
    }



?>