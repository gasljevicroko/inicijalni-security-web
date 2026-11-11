
<?php
// TSD-4RT | RG | 11.11.2026.

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php#kontakt");
    exit;
}

$ime = trim($_POST["ime"] ?? "");
$email = trim($_POST["email"] ?? "");
$usluga = trim($_POST["usluga"] ?? "");
$poruka = trim($_POST["poruka"] ?? "");

if (
    $ime === "" ||
    $email === "" ||
    $usluga === "" ||
    $poruka === ""
) {
    header("Location: index.php?status=greska#kontakt");
    exit;
}

$dozvoljeneUsluge = [
    "Procjena rizika",
    "Analiza mreže",
    "Edukacija zaposlenika",
    "Testiranje lozinki"
];

if (!in_array($usluga, $dozvoljeneUsluge, true) ||
    !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: index.php?status=greska#kontakt");
    exit;
}

$putanja = __DIR__ . "/podaci/upiti.json";

$upiti = json_decode(file_get_contents($putanja), true);

if (!is_array($upiti)) {
    $upiti = [];
}

$noviUpit = [
    "ime" => $ime,
    "email" => $email,
    "usluga" => $usluga,
    "poruka" => $poruka,
    "datum" => date("j. n. Y. H:i")
];

$upiti[] = $noviUpit;

file_put_contents(
    $putanja,
    json_encode($upiti, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE),
    LOCK_EX
);

header("Location: index.php?status=uspjeh#kontakt");
exit;
