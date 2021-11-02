<?php
if (!empty($errors)){
    foreach ($errors as $error):?>
        <p><?=$error?></p>
    <?php endforeach;?>
<?php }?>

<form method="POST" action="login.php" enctype="multipart/form-data">
    <div class="form-group">
        <label for="email">Email</label><br>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label><br>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
    </div><br>
    <button type="submit" class="btn btn-primary">Logear</button>
</form>
<form action="register.php">
    <button type="submit" class="btn btn-primary">Registrar</button>
</form>