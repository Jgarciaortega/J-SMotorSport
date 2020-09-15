<?php
include("./model/db.php");
include("./includes/header.php");
include("./includes/header_login.php");
?>

<!-- NAVEGADOR -->
<?php include("./includes/nav.php")?>

<!-- SECCIONES -->

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
            <?php include("./includes/login_form.php")?>
        </div>
    </div>
</div>
</section>



<?php include("./includes/footer.php")?>