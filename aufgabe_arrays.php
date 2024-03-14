<?php
$names = array("Peter", "Reiner", "Hans", "Murat", "Rick");

$person = $_GET["name"];

$age = $_GET["age"];

$max_age = 30;

for($i=0; $i < 5; $i++){
    if ($age < $max_age && $names[$i] == $person){
        echo "Moin " . $person . " Du bist alt genug und stehst auf der Liste :)";
        break;
    } else if ($age >= $max_age && $names[$i] == $person) {
        echo "Hallöchen, " . $person . " Du bist leider zu alt";
        break;
    } else {
        echo "";
    }
}

?>

<p>Wie heißt du</p>
<form method=GET action="">
    <input name= "name" type="text"><br>
    <p>Wie alt bist du?</p>
    <input name="age" type="number"><br><br>
    <input type="submit">
</form>

