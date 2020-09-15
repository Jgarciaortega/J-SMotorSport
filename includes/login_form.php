<form method="post" action="./controllers/user_login.php"">
    <h4>Inicia sesión</h4>
    <div class="input-group mb-3">
        <input type="text" name="email" class="form-control" aria-describedby="basic-addon3" placeholder="Email">
    </div>
    <div class="input-group mb-3">
        <input type="password" name="password" class="form-control" aria-describedby="basic-addon3"
            placeholder="Contraseña">
    </div>
    <button type="submit" class="btn btn-danger" name="login">Inicio sesión</button>
    <a href="./sign_in.php" id="registro" class="btn btn-secondary" >Regístrate</a>
    <div id="rememberData" class="mb-3">
        <input type="checkbox" aria-label="Checkbox for following text input">
        <span>Recordar datos</span>
    </div>
    <a href="">¿Has olvidado tu contraseña?</a>
</form>