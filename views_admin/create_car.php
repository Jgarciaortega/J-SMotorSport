<?php
include("../includes/header.php");
include("../includes/header_admin.php");
?>


<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div id="title">
        <div id="company-name">
            <span class="badge badge-secondary">S&M MotorSport</span><span></span>
        </div>
        <p><i class="fas fa-tools"></i> Zona administrador</p>
    </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Añadir</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Stock</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Usuarios</a>
                </li>
            </ul>
        </div>
    </nav>
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



