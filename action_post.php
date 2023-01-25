<?php
$jmeno = $_POST["Jméno Webu"];
$email = $_POST["Email"];
$zprava = $_POST["Zpráva"];

$myfile = fopen("rating.txt","a") or die("Otevření se nezdařilo");


function validata($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$jmeno = validata($jmeno);
$email = validata($email);
$zprava = validata($zprava); 

$jmeno = str_replace("\n","<br>",$jmeno); 
$fulljmeno = "<h2> $jmeno </h2> <p> $jmeno <hr> </p>";

$email = str_replace("\n","<br>",$email); 
$fullemail = "<h5> $email </h5> <p> $email <hr> </p>";

fwrite($myfile, $fulljmeno);
fclose($myfile);

fwrite($myfile, $fullemail);
fclose($myfile);


header("Location: /list.php?m=true");
