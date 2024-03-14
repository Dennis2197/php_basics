<?php
$zahl1 = 29;
$zahl2 = 26;

if (is_integer($zahl2/2)){
    echo "Die Zahl ist grade";
} else {
    echo "Die Zahl ist ungerade";
}

if ($zahl1 % 2 == 1){
    echo "Die Zahl ist ungerade";
} else {
    echo "Die Zahl ist grade";
}
