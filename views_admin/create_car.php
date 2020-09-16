<?php
include("../includes/header.php");
include("../includes/header_admin.php");
?>


<div class="container">
    <?php include("../includes/nav_admin.php")?>
</div>

<div class="container">
    <form>
        <div class="form-group">
            <input type="text" class="form-control mt-3" id="marca" placeholder="Marca">
            <input type="text" class="form-control mt-3" id="modelo" placeholder="Modelo">
            <input type="text" class="form-control mt-3" id="anyo" placeholder="Año">
            <input type="text" class="form-control mt-3" id="km" placeholder="Km">
            <input type="text" class="form-control mt-3" id="cambio" placeholder="Cambio">
            <input type="text" class="form-control mt-3" id="puertas" placeholder="Puertas">
            <input type="text" class="form-control mt-3" id="cv" placeholder="CV">
            <input type="text" class="form-control mt-3" id="color" placeholder="Color">
            <input type="text" class="form-control mt-3" id="combustible" placeholder="Combustible">
            <input type="text" class="form-control mt-3" id="garantia" placeholder="Garantía">
            <div id="carImages">
                <input type="file" class="form-control mt-3">
            </div>
            <div id="content-plus" class="mt-2">
                <a id="btn-addImage"><i class="fas fa-plus-circle text-secondary"></i></a>
            </div>
            <button id="btn-save-car" class="btn btn-primary mt-2">Guardar</button>
        </div>
    </form>
   
</div>



