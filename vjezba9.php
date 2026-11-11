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


<?php
echo " €<br><br>";

function cijenaSPopustom($cijena, $postotak = 10) {
    return $cijena * (1 - $postotak / 100);
}


echo "cijenaSPopustom(200): ";
echo cijenaSPopustom(200);
echo " €<br>";

echo "cijenaSPopustom(200, 25): ";
echo cijenaSPopustom(200, 25);
echo " €<br><br>";



function ukupnoSPdv($cijena, $stopa = 0.25) {
    return $cijena * (1 + $stopa);
}



echo "ukupnoSPdv(100): ";
echo ukupnoSPdv(100);
echo " €<br>";

echo "ukupnoSPdv(100, 0.13): ";
echo ukupnoSPdv(100, 0.13);
echo " €<br><br>";


function trajanje($minute) {
    $sati = floor($minute / 60);
    $preostaleMinute = $minute % 60;

    if ($sati == 0) {
        return $minute . " min";
    }

    if ($preostaleMinute == 0) {
        return $sati . " h";
    }

    return $sati . " h " . $preostaleMinute . " min";
}

echo "trajanje(135): ";
echo trajanje(135);
echo "<br>";

echo "trajanje(45): ";
echo trajanje(45);
?>

<?php
echo " <br><br>";
$pdv=0.25;
function sPDv($cijena){
    return $cijena * (1+$pdv);
}

$brojac = 5;

function povecaj($brojac) {
    $brojac++;
    return $brojac;
}
echo povecaj($brojac);
echo "<br>";

echo  $brojac;
echo "<br>";

echo ukupnoSPdv(100);
echo "<br>";                
echo ukupnoSPdv(100, 0.13);
echo "<br>";        
echo trajanje(135);
echo "<br>";        
echo trajanje(45);
echo "<br>";

?>