<?php
include("../includes/header_admin.php");
?>


<div class="container">

    <?php include("../includes/nav_admin.php")?>
   
</div>

<div class="container">
    <form method="post" action="../controllers/admin_change_pass.php">
        <div class="form-group">
            <input type="password" class="form-control mt-3" id="pass_actual" name="pass_actual" placeholder="Password actual">
            <input type="password" class="form-control mt-3" id="new_pass" name="new_pass" placeholder="Nueva password">
            <input type="password" class="form-control mt-3" id="confirm_new" name="confirm_new" placeholder="Confirma password">
            <button id="btn-change-pass" class="btn btn-primary mt-2" name="change_admin_pass">Guardar</button>
        </div>
    </form>
   
</div>

