// TSD-4RT | RG | 08.10.2026.

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

<?php
$godinaOsnutka = 2019;
$godina = date("Y");
$brojGodina = $godina - $godinaOsnutka;

$email = " Info@SigurnaMreza.HR ";
$email = strtolower(trim($email));
?>
<!-- PODNOŽJE -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
 </head>
 <body>
    
 </body>
 </html>
<footer>
    <div class="footer-grid">
        <div>
            <h4>InfoSec Zaštita</h4>
            <p>Vaš partner za informacijsku i mrežnu sigurnost.</p>
            <p>Na tržištu od <?php echo $godinaOsnutka; ?>. – već <?php echo $brojGodina; ?> godina</p>
        </div>

        <div>
            <h4>Kontakt podaci</h4>
            <p>Radno vrijeme: Pon - Pet (08:00 - 16:00)</p>
            <p>Telefon: +385 1 234 5678</p>
            <p>
                E-mail:
                <a href="mailto:<?php echo $email; ?>">
                    <?php echo $email; ?>
                </a>
            </p>
        </div>

        <div>
            <h4>Pratite nas</h4>
            <p>
                <a href="https://www.facebook.com" target="_blank">Facebook</a> |
                <a href="https://www.linkedin.com" target="_blank">LinkedIn</a>
            </p>
        </div>
    </div>

    <div class="footer-bottom">
        <p>
            &copy; <?php echo $godina; ?> InfoSec Zaštita.
            Sva prava pridržana. |
            <a href="ppuk.php">Politika privatnosti i uvjeti korištenja (PPUK)</a>
        </p>
    </div>
</footer>