<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        header{
            background-color: gray;
            padding: 2em;
        }
    </style>
</head>
<body>
<header>
    <h2>
        Vamos a Jugar al Ahorcado !!
    </h2>
</header>
<form action="indexAct6.php" method="POST">
    <label for="letter">Por favor indica una letra:</label><br>
    <input type="text" id="letter" name="letter" maxlength="1" minlength="0" required>
</form>
</body>
<form action="logout.php" method="post">
    <button>
        Log Out
    </button>
</form>

</html>