
<?php 

include("../model/db.php");
include("../model/encryptor.php");

    if(isset($_POST['change_admin_pass'])){

        $pass_actual = $_POST['pass_actual'];
        $new_pass = $_POST['new_pass'];
        $confirm_new_pass = $_POST['confirm_new'];

        $query = "SELECT * FROM usuario where email like 'admin'";
        $result = mysqli_query($conn, $query);

        if ($result->num_rows > 0){

            while($row = mysqli_fetch_array($result)){
        
                $hash = $row['password'];

                if(verify($pass_actual, $hash) && $new_pass == $confirm_new_pass){
                       
                    changePassword($new_pass, $conn);
                   
                }
            }
    }
}

function changePassword($new_pass, $conn){

    $hash = encripta($new_pass);
    $query = "UPDATE usuario SET password= '$hash' where email like 'admin'";
    $result = mysqli_query($conn, $query);

    if(!$result){

        die('Error al cambiar password');

    }else{

        echo('Password modificada');
    }

}


?>