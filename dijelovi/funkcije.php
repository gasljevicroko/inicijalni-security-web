<?php

// TSD-4RT | RG | 11.11.2026.


const PDV = 0.25;


function cijenaSPdv($cijena) {
    return $cijena * (1 + PDV);
}


function formatirajCijenu($iznos) {
    return number_format($iznos, 2, ',', '.') . " €";
}


function zvjezdice($ocjena) {
    $rezultat = "";

    for ($i = 1; $i <= 5; $i++) {
        if ($i <= $ocjena) {
            $rezultat .= "★";
        } else {
            $rezultat .= "☆";
        }
    }

    return $rezultat;
}


function jeOtvoreno($dan, $sat) {

  
    if ($dan >= 1 && $dan <= 5) {
        return $sat >= 8 && $sat < 16;
    }


    if ($dan == 6) {
        return $sat >= 9 && $sat < 13;
    }

   
    return false;
}
?>

<?php

/*
echo formatirajCijenu(1600);
echo "<br>";

echo formatirajCijenu(cijenaSPdv(450));
echo "<br>";

echo zvjezdice(3);
echo "<br>";

var_dump(jeOtvoreno(6, 13));
echo "<br>";

var_dump(jeOtvoreno(5, 15));
*/
?>
<?php
function pozdravPremaSatu($sat) {
    if ($sat < 12) {
        return "Dobro jutro";
    } elseif ($sat < 18) {
        return "Dobar dan";
    } else {
        return "Dobra večer";
    }
}
?>