<?php
const VAT = 0.23;
$nazwa = "Mysz Razer";
$netto = 199.00;
$ilosc = 15;
$promocja = false;
$brutto = ($netto * (1 + VAT));
$wszystko = ($brutto * $ilosc);

$rabat = 0.15;
$cenarabatowa = ($brutto * (1 - $rabat));

$iloscrat = 10;
$rata = round($brutto / $iloscrat, 2);

$opis = "Procesor";
$opis .= " Ryzen 5";
echo "Produkt: $opis<br>";

//var_dump(5 == "5");

//var_dump((float) "12.50");
//var_dump(is_numeric("12,50"));
echo number_format($rata, 2, ',', ' ') . " zł";

include "cos.html";

?>