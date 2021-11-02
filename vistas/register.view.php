<form method="POST" action="register.php" enctype="multipart/form-data">
    <div class="form-group">
        <label for="usuario">Nombre Usuario:</label><br>
        <input type="text" class="form-control" id="usuario" name="usuario" aria-describedby="nameHelp" placeholder="Enter name" required>

    </div>
    <div class="form-group">
        <label for="email">Email:</label><br>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
    </div>
    <div class="form-group">
        <label for="password">Contraseña</label><br>
        <input type="password" class="form-control" id="password"  name="password" placeholder="Password" required>
    </div>
    <div class="form-group">
        <label for="comprobarPassword">Repetir Contraseña: </label><br>
        <input type="password" class="form-control" id="comprobarPassword" name="comprobarPassword" placeholder="Repeat Password" required>
    </div><br>
    <button type="submit" class="btn btn-primary">Registrar</button>
</form>