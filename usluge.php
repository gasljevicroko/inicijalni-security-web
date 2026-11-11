
<?php

const PDV = 0.25;

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

?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Usluge</title>
</head>
<body>
    <?php
$trenutnaStranica = "usluge.php";
include "dijelovi/zaglavlje.php";
?>
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
        $pdv = $cijena * PDV;
        $ukupno = $cijena + $pdv;

        $zbroj += $ukupno;

    ?>

    <tr>
        <td><?= $usluga["naziv"] ?></td>
        <td><?= $usluga["opis"] ?></td>
        <td><?= number_format($cijena, 2, ',', '.') ?> €</td>
        <td><?= number_format($pdv, 2, ',', '.') ?> €</td>
        <td><?= number_format($ukupno, 2, ',', '.') ?> €</td>
    </tr>

    <?php } ?>

</table>

<p>
    Zbroj svih cijena s PDV-om:
    <?= number_format($zbroj, 2, ',', '.') ?> €
</p>

<p>
    Broj usluga: <?= count($usluge) ?>
</p>

<p>Cijene ažurirane: <?= date('d.m.Y.') ?></p>

</body>
</html>
