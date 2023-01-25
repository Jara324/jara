<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
</head>
<body>
    <h1>List Hodnocení</h1><hr>
    <button><a href="index.php">Home</a></button>
    <button><a href="menu.php">Menu</a></button>
    <button><a href="form.php">Formulář hodnocení</a></button>
    <button><a href="list.php">List Hodnocení</a></button><hr>
    <div class="footer">Bozděch @ 2022</div>
    <?php
    if(isset($_GET["m"])){
        echo "<h1>Data byli Zapsána</h1>";
    }
    $fjmeno = "rating.txt";
    $myfile = fopen($fjmeno,"r");
    echo '<div class="blog">';
    echo fread($myfile,filesize($fjmeno));
    echo '</div>';
    fclose($myfile);
    ?>
</body>
</html>