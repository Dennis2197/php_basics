<?php

print_r($_GET);

$user = $_GET['name'];
$age = $_GET['age'];

if ($user == "Peter"){
    echo "hi peter";
} else {
    echo "du bist net peter";
}

?>

<p>Wie heißt du</p>
<form method=GET action="">
    <input name= "name" type="text"><br>
    <p>Wie alt bist du?</p>
    <input name="age" type="number"><br><br>
    <input type="submit">
</form>

print("kill me")
