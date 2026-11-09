<?php
$usluge= ["Procjena rizika","Sigurnosna analiza","Edukacija zaposlenika"];

echo $usluge[0];
echo count($usluge);
$usluge[]= "Testiranje lozinki";
$usluge[1]= "Analiza mreže";

echo "<pre>";
print_r($usluge);
echo"</pre>";
?>

<?php

$dani = ["Ponedjeljak", "Utorak", "Srijeda", "Četvrtak", "Petak", "Subota", "Nedjelja"];

echo $dani[0];
echo "<br><br>";
echo $dani[count($dani) - 1];
echo "<br><br>";
for ($i = 0; $i < count($dani); $i++) {
    echo $dani[$i] . "<br>";
}


?>

<?php
echo "<br><br>";
foreach ($usluge as $usluga) {
    echo "<li>$usluga</li>";
}

foreach ($usluge as $indeks => $usluga) {
    echo ($indeks + 1) . ". " . $usluga . "<br>";
}
?>


<?php
$dani = ["Ponedjeljak", "Utorak", "Srijeda", "Četvrtak", "Petak", "Subota", "Nedjelja"];

echo "<ol>";

foreach ($dani as $dan) {
    echo "<li>$dan</li>";
}

echo "</ol>";
?>


<?php
$brojevi = [4, 8, 15, 16, 23];
$brojevi[] = 42;
$brojevi[1] = 9;
 echo (($brojevi)[6])
?>






<?php

$tvrtka = [
    "naziv" => "InfoSec",
    "grad" => "Zagreb",
    "godinaOsnutka" => 2026
];
echo $tvrtka["naziv"] . " iz grada " . $tvrtka["grad"] . " radi od " . $tvrtka["godinaOsnutka"] . ".";
echo "<br><br>";
$tvrtka["email"] = "kontakt@infosec-zastita.hr";

foreach ($tvrtka as $kljuc => $vrijednost) {
    echo "$kljuc: $vrijednost<br>";
}

?>


<?php
echo "<br><br>";
$usluge = [
    ["naziv" => "Procjena rizika", "cijena" => 450],
    ["naziv" => "Sigurnosna analiza", "cijena" => 1280],
    ["naziv" => "Edukacija zaposlenika", "cijena" => 300],
];

$zbroj = 0;

foreach ($usluge as $usluga) {
    $zbroj += $usluga["cijena"];
}

echo "Zbroj svih cijena je: " . $zbroj . " €";

?>

<?php
echo "<br><br>";
$najskuplja = $usluge[0];

foreach ($usluge as $usluga) {
    if ($usluga["cijena"] > $najskuplja["cijena"]) {
        $najskuplja = $usluga;
    }
}

echo "Najskuplja usluga je: " . $najskuplja["naziv"];
echo " - " . $najskuplja["cijena"] . " €";

?>

<?php
echo "<br><br>";
$brojac = 0;

foreach ($usluge as $usluga) {
    if ($usluga["cijena"] < 500) {
        $brojac++;
    }
}

echo "Broj usluga ispod 500 €: " . $brojac;

?>



<?php
echo "<br><br>";

$ocjene = [4, 5, 3, 5, 2];

$prosjek = array_sum($ocjene) / count($ocjene);

echo "Prosjek ocjena: " . number_format($prosjek, 2, ',', '.') . "<br>";


rsort($ocjene);

echo "Ocjene silazno: " . implode(", ", $ocjene) . "<br>";


$tekst = "HTML,CSS,PHP,SQL";

$jezici = explode(",", $tekst);

echo "<ul>";

foreach ($jezici as $jezik) {
    echo "<li>$jezik</li>";
}

echo "</ul>";

?>
