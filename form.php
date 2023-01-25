<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Formulář hodnocení webů</h1><hr>
    <button><a href="index.php">Home</a></button>
    <button><a href="menu.php">Menu</a></button>
    <button><a href="form.php">Formulář hodnocení webů</a></button>
    <button><a href="list.php">List Hodnocení</a></button><hr>

    <form action="action_post.php" method="post">

    <label for="text"></label>
    <input type="text" placeholder="Jméno Webu"><br>

    <label for="email"></label>
    <input type="email" placeholder="Email hodnotícího"><br>

    <textarea name="Zpráva" id="" cols="30" rows="10" placeholder="Zpráva"></textarea><br>

    <label for="range">Hodnocení</label>
    <input type="range"><br>

    <label for="submit"></label>
    <input type="submit" value="Odeslat Hodnocení">

    <hr><div class="footer">Jelínek @ 2022</div>
</form>
</body>
</html>