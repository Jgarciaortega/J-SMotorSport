<?php include("db.php")?>
<?php include("includes/header.php")?>



<body>
   
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

    <!-- SECCIONES -->

    <section id="coverPage">
        <div class="container">
            <div id="main-msg" class="content-center">
                <h1>Vehículos de ocasión</h1>
                <p>En J&S MotorSport tenemos una amplia gama de vehículos de ocasión, te invitamos a verlos.</p>
                <a href="#cars" class="btn btn-light topmargin-xs">Descubre nuestros coches <i
                        class="fas fa-arrow-circle-down"></i></a>
            </div>
        </div>
    </section>

    <section class="aboutUs topmargin-lg">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3080.550353166982!2d-0.3915876846330471!3d39.45689387948827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMznCsDI3JzI0LjgiTiAwwrAyMycyMS44Ilc!5e0!3m2!1ses!2ses!4v1599499874733!5m2!1ses!2ses"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-sm content-center datos-taller">
                    <h4>DATOS TALLER</h4>
                    <p>Calle de Juan Aguiló, 2-º4, 46007 Valencia</p>
                    <p>Lunes a Sabado de 9:00 a 18:00</p>
                    <p>96 12345678</p>
                </div>
            </div>
        </div>
    </section>


    <section id="cars">
            <div class="content-center">
                <h2>Vehículos de segunda mano</h2>
            </div>
            <div class="data-cars">
                <div class="content-car">
                    <a href="">
                    <img src="./assets/img/cars3.jpg" alt="">
                    <div class="carInfo">
                        <header> 19.500€ </header>
                        <p> Volkswagen Passat</p>
                    </div>
                    </a>
                </div>
                <div class="content-car">
                    <a href="">
                    <img src="./assets/img/cars3.jpg" alt="">
                    <div class="carInfo">
                        <header> 19.500€ </header>
                        <p> Volkswagen Passat</p>
                    </div>
                    </a>
                </div>
                <div class="content-car">
                    <a href="">
                    <img src="./assets/img/cars3.jpg" alt="">
                    <div class="carInfo">
                        <header> 19.500€ </header>
                        <p> Volkswagen Passat</p>
                    </div>
                    </a>
                </div>
                <div class="content-car">
                    <a href="">
                    <img src="./assets/img/cars3.jpg" alt="">
                    <div class="carInfo">
                        <header> 19.500€ </header>
                        <p> Volkswagen Passat</p>
                    </div>
                    </a>
                </div>
                <div class="content-car">
                    <a href="">
                    <img src="./assets/img/cars3.jpg" alt="">
                    <div class="carInfo">
                        <header> 19.500€ </header>
                        <p> Volkswagen Passat</p>
                    </div>
                    </a>
                </div>
                <div class="content-car">
                    <a href="">
                    <img src="./assets/img/cars3.jpg" alt="">
                    <div class="carInfo">
                        <header> 19.500€ </header>
                        <p> Volkswagen Passat</p>
                    </div>
                    </a>
                </div>
          
            </div>  
    </section>

   

</body>
<?php include("includes/footer.php")?>
</html>