
<?php
// TSD-4RT | RG / GA | 11.11.2026.

require_once "dijelovi/funkcije.php";

$usluge = [
    [
        "naziv" => "Procjena rizika",
        "opis" => "Procjena sigurnosnih rizika",
        "cijena" => 450
    ],
    [
        "naziv" => "Sigurnosna analiza",
        "opis" => "Analiza sigurnosti sustava",
        "cijena" => 1280
    ],
    [
        "naziv" => "Edukacija zaposlenika",
        "opis" => "Edukacija o sigurnosti",
        "cijena" => 300
    ],
    [
        "naziv" => "Izrada sigurnosnog plana",
        "opis" => "Izrada plana zaštite sustava",
        "cijena" => 500
    ]
];

$trenutnaStranica = "usluge.php";
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usluge</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include "dijelovi/zaglavlje.php"; ?>

<h1>Usluge</h1>

<table border="1">
    <tr>
        <th>Usluga</th>
        <th>Opis</th>
        <th>Cijena bez PDV-a</th>
        <th>PDV</th>
        <th>Ukupno</th>
    </tr>

    <?php
    $zbroj = 0;

    foreach ($usluge as $usluga) {

        $cijena = $usluga["cijena"];

        $ukupno = cijenaSPdv($cijena);
        $pdv = $ukupno - $cijena;

        $zbroj += $ukupno;
    ?>

    <tr>
        <td><?= $usluga["naziv"] ?></td>
        <td><?= $usluga["opis"] ?></td>
        <td><?= formatirajCijenu($cijena) ?></td>
        <td><?= formatirajCijenu($pdv) ?></td>
        <td><?= formatirajCijenu($ukupno) ?></td>
    </tr>

    <?php } ?>

</table>

<p>
    Zbroj svih cijena s PDV-om:
    <?= formatirajCijenu($zbroj) ?>
</p>

<p>
    Broj usluga: <?= count($usluge) ?>
</p>

<p>
    Cijene ažurirane: <?= date('d.m.Y.') ?>
</p>

</body>
</html>
