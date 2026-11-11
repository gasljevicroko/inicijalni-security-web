
<?php
// TSD-4RT | RG | 11.11.2026.

$putanja = __DIR__ . "/podaci/upiti.json";

$upiti = json_decode(file_get_contents($putanja), true) ?? [];

$upiti = array_reverse($upiti);

function siguranIspis($tekst) {
    return htmlspecialchars($tekst, ENT_QUOTES, "UTF-8");
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Zaprimljeni upiti</title>
</head>
<body>

<h1>Zaprimljeni upiti</h1>

<?php if (empty($upiti)): ?>

    <p>Trenutno nema zaprimljenih upita.</p>

<?php else: ?>

    <?php foreach ($upiti as $upit): ?>

        <div style="border:1px solid #ccc; padding:15px; margin-bottom:15px;">

            <h3><?= siguranIspis($upit["ime"] ?? "") ?></h3>

            <p>
                <strong>E-mail:</strong>
                <?= siguranIspis($upit["email"] ?? "") ?>
            </p>

            <p>
                <strong>Usluga:</strong>
                <?= siguranIspis($upit["usluga"] ?? "") ?>
            </p>

            <p>
                <strong>Poruka:</strong>
                <?= nl2br(siguranIspis($upit["poruka"] ?? "")) ?>
            </p>

            <p>
                <strong>Datum i vrijeme:</strong>
                <?= siguranIspis($upit["datum"] ?? "") ?>
            </p>

        </div>

    <?php endforeach; ?>

<?php endif; ?>

</body>
</html>
