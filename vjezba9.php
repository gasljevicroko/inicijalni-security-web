<?php
function pozdrav($ime){
    return "Dobar dan, $ime!";
}

echo pozdrav("Ana");
$poruka = pozdrav("Marko");
echo "<br>";
echo strtoupper($poruka)

?>

<?php
echo "<br><br>";
function kvadrat($broj) {
    return $broj * $broj;
}

echo "Kvadrat broja 7 je: " . kvadrat(7);
echo "<br>";

echo "Kvadrat kvadrata broja 2 je: " . kvadrat(kvadrat(2));
echo "<br><br>";




function formatirajCijenu($iznos) {
    return number_format($iznos, 2, ',', '.') . " €";
}

echo "Formatirana cijena: " . formatirajCijenu(1234.5);


?>
<?php
echo "<br><br>";

function a($x) {
    echo $x * 2;
}

function b($x) {
    return $x * 2;
}

echo "<h2>A2 - echo ili return</h2>";

echo "1. Vrijednost izraza b(5) + 1: ";
echo b(5) + 1;
echo "<br>";

echo "2. Što ispisuje a(5): ";
a(5);
echo "<br>";

echo "3. Rezultat var_dump: ";
$r = a(5);
var_dump($r);
echo "<br>";

echo "4. Vrijednost izraza b(b(3)): ";
echo b(b(3));

?>