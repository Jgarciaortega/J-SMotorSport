<?php
include("../includes/header_admin.php");
include("../model/db.php");
?>


<div class="container-fluid">
    <?php include("../includes/nav_admin.php")?>
</div>

<div class="container-fluid" id="stock">
    <div class="car-tab">
        <div class="info-car">
            <div class="row">
                <div class="col-sm">
                    Id
                </div>
                <div class="col-sm">
                    1
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    Marca
                </div>
                <div class="col-sm">
                    Seat
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    Modelo
                </div>
                <div class="col-sm">
                    Leon
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    Fecha registro
                </div>
                <div class="col-sm">
                    12/3/20
                </div>
            </div>
        </div>
        <div class="row picture-car">
            <img src="../assets/img/cars2.jpg" alt="Imagen coche">
        </div>
        <div class="row btns-edit-car">
            <form action="./edit_car.php" method="post">
                <input type="text" name="id_car" value=5>
                <button type="submit" class="edit-car"><i class="fas fa-edit"></i></button>
            </form>
            <button class="dlt-car" ><i class="far fa-trash-alt"></i></button>
        </div>
    </div>
  
    <div class="car-tab">
        <div class="info-car">
            <div class="row">
                <div class="col-sm">
                    Id
                </div>
                <div class="col-sm">
                    1
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    Marca
                </div>
                <div class="col-sm">
                    Seat
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    Modelo
                </div>
                <div class="col-sm">
                    Leon
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    Fecha registro
                </div>
                <div class="col-sm">
                    12/3/20
                </div>
            </div>
        </div>
        <div class="row picture-car">
            <img src="../assets/img/cars2.jpg" alt="Imagen coche">
        </div>
        <div class="row btns-edit-car" id='2'>
            <button class="edit-car"><i class="fas fa-edit"></i></button>
            <button class="dlt-car" ><i class="far fa-trash-alt"></i></button>
        </div>
    </div>
   

</div>