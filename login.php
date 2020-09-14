<?php
include("db.php");
?>
<?php
include("includes/header.php");
?>

<!-- NAVEGADOR -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="./index.php"><i class="fas fa-tools"></i> J&S MotorSport</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" id="taller">Taller</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="coches">Coches</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="nosotros">Nosotros</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="./login.php">Accede</a>
                        <a class="dropdown-item" href="#">Registro</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<section>
<div class="container">
    <div id="login">
        <div id="content-form">
      
            <?php if(isset($_SESSION['message'])) {?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   <?php  echo $_SESSION['message'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php session_unset(); } ?>
            <form method="post" action="user_login.php">
                <h4>Inicia sesión</h4>
                <div class="input-group mb-3">
                    <input type="text" name="email" class="form-control" aria-describedby="basic-addon3"
                        placeholder="Email">
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" aria-describedby="basic-addon3"
                        placeholder="Contraseña">
                </div>
                <button type="submit" class="btn btn-danger" name="login">Inicio sesión</button>
                <button type="submit" id="registro" class="btn btn-secondary" name="sign_in">Regístrate</button>
                <div id="rememberData"class="mb-3">
                    <input type="checkbox" aria-label="Checkbox for following text input">
                    <span>Recordar datos</span>
                </div>
                <a href="">¿Has olvidado tu contraseña?</a>
            </form>
        </div>
    </div>
</div>
</section>

<?php include("includes/footer.php")?>