<?php
$cijena=450;
echo $cijena;
echo "<br>";
var_dump($cijena);
var_dump("450");
echo "<br>";
var_dump(7 / 2);
echo "<br>";
var_dump(8 / 2);
echo "<br>";
var_dump("5" + 3);
echo "<br>";
var_dump("5" . 3);
echo "<br>";
var_dump(17 % 5);
echo "<br>";

$ukupnoMinuta = 135;

$sati = intdiv($ukupnoMinuta, 60);
$minuta = $ukupnoMinuta % 60;

echo $sati . " h " . $minuta . " min";
?>

<?php
$nazivTvrte="SecurityWebŠ d.o.o";
echo "<br>";
echo str_replace("d.o.o", "j.d.o.o",$nazivTvrte);
?>
<?php
$nazivTvrte = "Kvačica d.o.o.";
echo mb_substr($nazivTvrte,0,7);
echo "<br>";
echo strlen($nazivTvrte);
echo "<br>";
echo mb_strlen($nazivTvrte);
echo "<br>";
echo strtoupper($nazivTvrte);
echo "<br>";
echo mb_strtoupper($nazivTvrte);
?>

<?php
echo "<br>";
echo number_format(1234.5,2);
echo "<br>";
echo round(318.75);
echo date("j. n. Y.");
?>