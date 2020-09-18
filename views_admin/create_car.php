<?php
include("../includes/header.php");
include("../includes/header_admin.php");
?>


<div class="container">
    <?php include("../includes/nav_admin.php")?>
</div>

<div class="container">
<form method="post" action="../controllers/admin_create_car.php" enctype="multipart/form-data">
        <div class="form-group">
            <input type="text" class="form-control mt-3" id="marca" placeholder="Marca" name="marca">
            <input type="text" class="form-control mt-3" id="modelo" placeholder="Modelo" name="modelo">
            <input type="text" class="form-control mt-3" id="anyo" placeholder="Año" name="anyo">
            <input type="text" class="form-control mt-3" id="km" placeholder="Km" name="km">
            <input type="text" class="form-control mt-3" id="cambio" placeholder="Cambio" name="cambio">
            <input type="text" class="form-control mt-3" id="puertas" placeholder="Puertas" name="puertas">
            <input type="text" class="form-control mt-3" id="cv" placeholder="CV" name="cv">
            <input type="text" class="form-control mt-3" id="color" placeholder="Color" name="color">
            <input type="text" class="form-control mt-3" id="combustible" placeholder="Combustible" name="combustible">
            <input type="text" class="form-control mt-3" id="garantia" placeholder="Garantía" name="garantia">
            <div id="carImages" class="mt-2">
            <input type="file" name="image[]" value="" multiple>
            </div>
            <button id="btn-save-car" class="btn btn-primary mt-2" name="create_car">Guardar</button>
        </div>
    </form>
   
</div>



