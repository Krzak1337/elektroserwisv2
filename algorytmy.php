<?php
require "dane-start.php";

$suma = 0;
$brakuje = 0;
$najdrozszy = null; // null ma zadanie poprostu istniec a 0 to jest liczba

foreach ($produkty as $p){
    $suma += $p["cena"] * $p["ilosc"];
    if ($p["ilosc"] === 0) {
        $brakuje++;
    }
    if ($najdrozszy === null || $p["cena"] > $najdrozszy["cena"]) {
        $najdrozszy = $p;
    }
}



$szukany = "Kabel HDMI 2"; // gdy zmienia sie wartosc ktora nie istnieje wyswietla sie error o tym ze dana wartosc jest null czyli nie istnieje
$znaleziony = null;

foreach ($produkty as $p) {
    if ($p["nazwa"] === $szukany) {
        $znaleziony = $p;
        break;
    }
}

echo $najdrozszy["nazwa"];

echo "<br><br>";
echo $znaleziony["nazwa"];

?>