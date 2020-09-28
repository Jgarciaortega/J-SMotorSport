<?php
include("../includes/header.php");
include("../includes/header_admin.php");
include("../controllers/app_get_cars.php");
include("../model/db.php");
?>


<div class="container">
    <?php include("../includes/nav_admin.php")?>
</div>

<div class="container">

<?php 

    $id_car = $_POST["id_car"];
    $info_cars = getCarById($conn, $id_car);
    while($row = mysqli_fetch_array($info_cars)){
    
?>
<form method="post" action="../controllers/admin_create_car.php" enctype="multipart/form-data">
        <div class="form-group">
            <input type="text" class="form-control mt-3" id="marca" placeholder="Marca" name="marca" <?php print(' value="'.$row['marca'] .'"')?>>
            <input type="text" class="form-control mt-3" id="modelo" placeholder="Modelo" name="modelo" <?php print(' value="'.$row['modelo'] .'"')?>>
            <input type="text" class="form-control mt-3" id="anyo" placeholder="Año" name="anyo" <?php print(' value="'.$row['anyo'] .'"')?>>
            <input type="text" class="form-control mt-3" id="km" placeholder="km" name="km" <?php print(' value="'.$row['km'] .'"')?>>
            <input type="text" class="form-control mt-3" id="cambio" placeholder="cambio" name="cambio" <?php print(' value="'.$row['cambio'] .'"')?>>
            <input type="text" class="form-control mt-3" id="puertas" placeholder="puertas" name="puertas" <?php print(' value="'.$row['puertas'] .'"')?>>
            <input type="text" class="form-control mt-3" id="cv" placeholder="cv" name="cv" <?php print(' value="'.$row['cv'] .'"')?>>
            <input type="text" class="form-control mt-3" id="color" placeholder="color" name="color" <?php print(' value="'.$row['color'] .'"')?>>
            <input type="text" class="form-control mt-3" id="combustible" placeholder="combustible" name="combustible" <?php print(' value="'.$row['combustible'] .'"')?>>
            <input type="text" class="form-control mt-3" id="garantia" placeholder="garantia" name="garantia" <?php print(' value="'.$row['garantia'] .'"')?>>
            <div id="carImages" class="mt-2">
            <label for="">Imagen portada</label> <input type="file" name="main_image" value="">
            </div>
            <div id="carImages" class="mt-2">
            <label for="">Imagenes secundarias</label><input type="file" name="image[]" value="" multiple>
            </div>
            <button id="btn-save-car" class="btn btn-primary mt-2" name="create_car">Guardar</button>
            
        </div>
</form>

<?php 
} 
?>
   
</div>
    
</body>