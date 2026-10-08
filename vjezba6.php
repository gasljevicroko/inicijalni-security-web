// TSD-4RT | RG | 08.10.2026.
<?php
var_dump(5 == "5");
echo "<br>";
var_dump(5 === "5");
echo "<br>";
var_dump(0 == "");
echo "<br>";
var_dump("abc" == 0);
echo "<br>";
var_dump(null == false);
echo "<br>";
?>
<?php

$sat = 10;
$dan = 2;

$uvjet = ($sat >= 8 && $sat <= 15) && ($dan >= 1 && $dan <= 5);

echo "Sat: $sat, Dan: $dan → ";

var_dump($uvjet);


// 1. provjera
$sat = 10;
echo "<br>";
$dan = 2;
var_dump(($sat >= 8 && $sat <= 15) && ($dan >= 1 && $dan <= 5));
echo "<br>";
// 2. provjera
$sat = 16;
$dan = 2;
var_dump(($sat >= 8 && $sat <= 15) && ($dan >= 1 && $dan <= 5));
echo "<br>";
// 3. provjera
$sat = 12;
$dan = 6;
var_dump(($sat >= 8 && $sat <= 15) && ($dan >= 1 && $dan <= 5));

?>

<?php
echo "<br>";
$godina = 2023;
$cijena = 40;

if ($godina == 2022) {
    echo ($cijena * 7.53450) . " kn";
} elseif ($godina == 2023) {
    echo $cijena . " € (" . ($cijena * 7.53450) . " kn)";
} else {
    echo $cijena . " €";
}

?>

<?php
echo "<br>";
$dan = date("N");

$nazivDana = match ($dan) {
    1 => "ponedjeljak",
    2 => "utorak",
    3 => "srijeda",
    4 => "četvrtak",
    5 => "petak",
    6 => "subota",
    7 => "nedjelja",
    default => "nepoznat dan"
};

echo "Danas je $nazivDana.<br>";

$ime = "Karlo";

switch ($ime) {
    case "Karlo":
    case "Zdenko":
    case "Ana":
        echo "Ime počinje suglasnikom.";
        break;

    default:
        echo "Ime počinje samoglasnikom.";
}

?>


<style>
.otvoreno {
    color: green;
}

.zatvoreno {
    color: grey;
}
</style>

<?php
echo "<br>";
$dan = (int) date("6");
$sat = (int) date("8");

echo "Dan: $dan<br>";
echo "Sat: $sat:00<br><br>";

if ($dan >= 1 && $dan <= 5) {

    if ($sat >= 8 && $sat < 16) {
        $poruka = "Otvoreno – radimo do 16:00";
        $klasa = "otvoreno";
    } else {
        $poruka = "Zatvoreno";
        $klasa = "zatvoreno";
    }

} elseif ($dan == 6) {

    if ($sat >= 9 && $sat < 13) {
        $poruka = "Otvoreno – radimo do 13:00";
        $klasa = "otvoreno";
    } else {
        $poruka = "Zatvoreno";
        $klasa = "zatvoreno";
    }

} else {

    $poruka = "Zatvoreno";
    $klasa = "zatvoreno";
}

echo "<div class='$klasa'>$poruka</div>";

?>