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