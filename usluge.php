<?php

const PDV = 0.25;

$procjena_rizika = 450;
$sigurnosna_analiza = 1280;
$edukacija_zaposlenika = 300;

// Izračun cijena s PDV-om
$procjena_pdv = $procjena_rizika * PDV;
$procjena_ukupno = $procjena_rizika + $procjena_pdv;

$sigurnosna_pdv = $sigurnosna_analiza * PDV;
$sigurnosna_ukupno = $sigurnosna_analiza + $sigurnosna_pdv;

$edukacija_pdv = $edukacija_zaposlenika * PDV;
$edukacija_ukupno = $edukacija_zaposlenika + $edukacija_pdv;

?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Usluge</title>
</head>
<body>

<h1>Usluge</h1>

<table border="1">
    <tr>
        <th>Usluga</th>
        <th>Cijena bez PDV-a</th>
        <th>PDV</th>
        <th>Ukupno</th>
    </tr>

    <tr>
        <td>Procjena rizika</td>
        <td><?= number_format($procjena_rizika, 2, ',', '.') ?> €</td>
        <td><?= number_format($procjena_pdv, 2, ',', '.') ?> €</td>
        <td><?= number_format($procjena_ukupno, 2, ',', '.') ?> €</td>
    </tr>

    <tr>
        <td>Sigurnosna analiza</td>
        <td><?= number_format($sigurnosna_analiza, 2, ',', '.') ?> €</td>
        <td><?= number_format($sigurnosna_pdv, 2, ',', '.') ?> €</td>
        <td><?= number_format($sigurnosna_ukupno, 2, ',', '.') ?> €</td>
    </tr>

    <tr>
        <td>Edukacija zaposlenika</td>
        <td><?= number_format($edukacija_zaposlenika, 2, ',', '.') ?> €</td>
        <td><?= number_format($edukacija_pdv, 2, ',', '.') ?> €</td>
        <td><?= number_format($edukacija_ukupno, 2, ',', '.') ?> €</td>
    </tr>
</table>

<p>Cijene ažurirane: <?= date('d.m.Y.') ?></p>

</body>
</html>