<form method="post" action="./controllers/user_sign_in.php">
    <h4>Registro</h4>
    <div class="input-group mb-3">
        <input type="text" name="nombre" class="form-control" aria-describedby="basic-addon3" placeholder="Nombre">
    </div>
    <div class="input-group mb-3">
        <input type="text" name="email" class="form-control" aria-describedby="basic-addon3" placeholder="Email">
    </div>
    <div class="input-group mb-3">
        <input type="password" name="password" class="form-control" aria-describedby="basic-addon3"
            placeholder="Contraseña">
    </div>
    <button type="submit" id="registro" class="btn btn-danger" name="sign_in">Crear cuenta</button>
    <a href="./login.php" id="registro" class="btn btn-secondary" >¿Ya tienes cuenta?</a>
</form>