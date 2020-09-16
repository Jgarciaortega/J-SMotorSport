
<?php

    include("../model/db.php");
    include("../model/encryptor.php");

    if(isset($_POST['login'])){

         $email = $_POST['email'];
         $password = $_POST['password'];

         $hash = encripta($password);

        $query = "SELECT * FROM usuario where email like '$email'";
        $result = mysqli_query($conn, $query);

    //     // PASARELA DE PAGOS
    //     //https://www.jose-aguilar.com/blog/como-implementar-una-pasarela-de-pago-mediante-tarjeta-de-credito-con-php/

    if ($result->num_rows > 0){

    while($row = mysqli_fetch_array($result)){

        $hash = $row['password'];

        if(verify($password, $hash)){

            echo ('Password ok');

            if ($email == 'admin'){

                header("Location: ../views_admin/admin_index.php");
        
            }else{
        
                header("Location: ../index.php");
            }
        }
    }

    }else{
    
        $_SESSION['message'] = 'Email o contraseña inválidos';
        header("Location: ../login.php");
    }

        mysqli_close($conn);

     }

    // if(isset($_POST['sign_in'])){

    //     echo 'registro';
    // }



?>