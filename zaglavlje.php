<?php
$izbornik = [
    "index.php" => "Početna",
    "#o-nama"=>"O nama",
    "usluge.php" => "Usluge i cijene",
    "#tim"=>"Naš tim",
    "#Novosti"=>"Novosti",
    "#kontakt" => "Kontakt"
];
?>


<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="fav.ico">
    <title>InfoSec</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <div class="logo">InfoSec <span>Zaštita</span></div>

    <nav>
        <?php foreach ($izbornik as $datoteka => $tekst) { ?>

            <a href="<?= $datoteka ?>"
               class="<?= ($trenutnaStranica == $datoteka) ? 'aktivna' : '' ?>">
                <?= $tekst ?>
            </a>

        <?php } ?>
    </nav>
</header>
