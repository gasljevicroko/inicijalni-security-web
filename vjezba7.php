<?php

// 1. Brojevi od 1 do 10
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}

echo "<br><br>";


// 2. Parni brojevi od 2 do 20
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . " ";
}

echo "<br><br>";


// 3. Odbrojavanje od 10 do 1
for ($i = 10; $i >= 1; $i--) {
    echo $i . " ";
}

echo "Start!";

echo "<br><br>";


// 4. Zbroj brojeva od 1 do 100
$zbroj = 0;

for ($i = 1; $i <= 100; $i++) {
    $zbroj += $i;
}

echo "Zbroj brojeva od 1 do 100 je: " . $zbroj;

?>

<?php
echo "<br><br>";
$brojPokusaja = 1000 * 365 * 24 * 60 * 60;
$n = 1;
$kombinacije = 10 ** $n;

while ($kombinacije <= $brojPokusaja) {
    $n++;
    $kombinacije = 10 ** $n;
}

echo $n;
?>

<?php
echo "<br><br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 3 == 0) {
        continue;
    }

    if ($i > 7) {
        break;
    }

    echo $i . " ";
}
?>

<?php
// TSD-4RT | AB | 08.10.2026

$cijenaPoRacunalu = 12;
$popust = 0.10;
$trenutnaGodina = date("Y");

$misljenja = [
    ["Odlična usluga!", 5],
    ["Vrlo brzo i profesionalno.", 4],
    ["Sve je bilo kako treba.", 3]
];
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Moja stranica</title>

    <style>
        table {
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
        }

        .popust {
            background-color: lightgreen;
        }

        .misljenje {
            margin-bottom: 15px;
        }

        .ocjena {
            font-size: 20px;
        }
    </style>
</head>

<body>

<h1>Moja stranica</h1>

<!-- TABLICA CIJENA -->

<h2>Broj računala · Mjesečno</h2>

<table>
    <tr>
        <th>Broj računala</th>
        <th>Mjesečno</th>
    </tr>

    <?php
    for ($broj = 5; $broj <= 50; $broj += 5) {

        $ukupno = $broj * $cijenaPoRacunalu;
        $imaPopust = $broj >= 20;

        if ($imaPopust) {
            $ukupno = $ukupno * (1 - $popust);
        }
    ?>

        <tr class="<?= $imaPopust ? 'popust' : '' ?>">
            <td><?= $broj ?></td>
            <td><?= number_format($ukupno, 2, ',', '.') ?> €</td>
        </tr>

    <?php
    }
    ?>
</table>


<!-- KONTAKT / IZBORNICI -->

<h2>Kontakt</h2>

<form>

    <label for="zaposlenici">Broj zaposlenika:</label>

    <select id="zaposlenici" name="zaposlenici">

        <?php
        for ($i = 10; $i <= 200; $i += 10) {
            echo "<option value=\"$i\">$i</option>";
        }
        ?>

    </select>

    <br><br>

    <label for="godina">Godina osnutka vaše tvrtke:</label>

    <select id="godina" name="godina">

        <?php
        for ($godina = $trenutnaGodina; $godina >= 1990; $godina--) {
            echo "<option value=\"$godina\">$godina</option>";
        }
        ?>

    </select>

</form>


<!-- MIŠLJENJA KLIJENATA -->

<h2>Mišljenja klijenata</h2>

<?php
foreach ($misljenja as $misljenje) {

    $tekst = $misljenje[0];
    $ocjena = $misljenje[1];

    echo "<div class='misljenje'>";
    echo "<p>$tekst</p>";
    echo "<div class='ocjena'>";

    for ($i = 1; $i <= 5; $i++) {

        if ($i <= $ocjena) {
            echo "★";
        } else {
            echo "☆";
        }

    }

    echo "</div>";
    echo "</div>";
}
?>

</body>
</html>