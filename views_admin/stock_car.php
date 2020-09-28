<?php
include("../includes/header_admin.php");
include("../controllers/app_get_cars.php");
include("../model/db.php");
?>


<div class="container-fluid">
    <?php include("../includes/nav_admin.php")?>
</div>

<div class="container-fluid" id="stock">
    <div id="modal-dlt-car" class="modal" tabindex="-1" role="dialog">'
        <div class="modal-dialog" role="document">'
            <div class="modal-content">
             <div class="modal-header">
                  <h5 class="modal-title">Confirme la eliminación del coche de la base de datos</h5>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-primary" id="btn-ok-delete">Si</button>
                 <button type="button" class="btn btn-secondary" id="btn-no-delete" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
<?php 

$info_cars = getCars($conn);

    while($row = mysqli_fetch_array($info_cars)){
    
?>
<?php print('<div class="car-tab" id="' .$row['id'] .'">')?>
        <div class="info-car">
            <div class="row">
                <div class="col-sm">
                    Id
                </div>
                <div class="col-sm">
                    <?php 
                        echo $row['id'];
                        $image_car = getImage($conn, $row['id']);
                     ?>
                </div>
                <div class="col-sm">
                    Marca
                </div>
                <div class="col-sm">
                    <?php echo $row['marca'] ?>
                </div>
                <div class="col-sm">
                    Modelo
                </div>
                <div class="col-sm">
                    <?php echo $row['modelo'] ?>
                </div>
                <div class="col-sm">
                    Fecha de registro
                </div>
                <div class="col-sm">
                    5-5-20
                </div>
            </div>
        </div>
        <div class="row picture-car">
                <?php print('<img src="../assets/cars_images/'. $image_car .'" alt="Imagen coche">') ?>
            </div>
            <div class="row btns-edit-car">
                <form action="./edit_car.php" method="post">
                    <?php print('<input type="text" name="id_car" value='. $row['id'] .'>')?>
                    <button type="submit" class="edit-car"><i class="fas fa-edit"></i></button>
                </form>
                <button class="dlt-car" ><i class="far fa-trash-alt"></i></button>
            </div>
    </div>

<?php
    }
?>

</div>
   
</body>