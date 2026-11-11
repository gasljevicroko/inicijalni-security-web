
<?php
// TSD-4RT | RG | 11.11.2026.

$putanja = __DIR__ . "/korisnici.json";

$korisnici = json_decode(file_get_contents($putanja), true) ?? [];

$ime = trim($_POST["ime"] ?? "");
$prezime = trim($_POST["prezime"] ?? "");
$datum = $_POST["datumRodjenja"] ?? "";

if ($ime === "" || $prezime === "") {
    header("Location: index.php?greska=1");
    exit;
}

$korisnici[] = [
    "ime" => $ime,
    "prezime" => $prezime,
    "datumRodjenja" => $datum
];

file_put_contents(
    $putanja,
    json_encode($korisnici, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
);

header("Location: index.php");
exit;
