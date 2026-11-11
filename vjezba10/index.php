
<?php
// TSD-4RT | RG | 11.11.2026.

$json = file_get_contents(__DIR__ . "/korisnici.json");
$korisnici = json_decode($json, true) ?? [];
// A2 greska
//echo json_last_error_msg();
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Korisnici</title>
</head>
<body>

<h1>Popis korisnika</h1>

<table border="1" cellpadding="8">
    <tr>
        <th>Ime</th>
        <th>Prezime</th>
        <th>Datum rođenja</th>
    </tr>

    <?php
    foreach ($korisnici as $korisnik) {

        $datum = $korisnik["datumRodjenja"] ?? "";

        echo "<tr>";
       echo "<td>" . htmlspecialchars($korisnik["ime"]) . "</td>";
       //echo "<td>" . $korisnik["ime"] . "</td>";
        echo "<td>" . htmlspecialchars($korisnik["prezime"]) . "</td>";
        echo "<td>" . htmlspecialchars($datum) . "</td>";
        echo "</tr>";
    }
    ?>

</table>
<?php
var_dump(count($korisnici));
echo "<br>";
var_dump($korisnici[1]["prezime"]);
echo "<br>";
var_dump($korisnici[2]["datumRodjenja"] ?? "nepoznat");
echo "<br>";
var_dump(json_decode("[1, 2,]", true));
?>

<h2>Dodaj novog korisnika</h2>

<form action="unos.php" method="post">
    <input type="text" name="ime" placeholder="Ime" required>
    <input type="text" name="prezime" placeholder="Prezime" required>
    <input type="date" name="datumRodjenja">
    <button type="submit">Spremi</button>
</form>

<br>
<?php
if (isset($_GET["greska"])) {
    echo "<p style='color:red;'>Ime i prezime su obavezni.</p>";
}
?>

</body>
</html>
