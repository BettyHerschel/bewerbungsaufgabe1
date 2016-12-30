<?php

function zahlenEinsBisZweihundert()
{
    for ($i = 1; $i <= 200; $i++) {
        $tauscheZahlZuWort = tauscheZahlZuWort($i);
        echo $tauscheZahlZuWort . "\n";
    }
}

function tauscheZahlZuWort($eingabe)
{
    $bearbeiteterWert = $eingabe;
    if (($eingabe % 2) == 0) {
        $bearbeiteterWert = "Zwei";
    }
    if (($eingabe % 7) == 0) {
        $bearbeiteterWert = "Sieben";
    }
    if (($eingabe % 2) == 0 && ($eingabe % 7) == 0) {
        $bearbeiteterWert = "ZweiSieben";
    }
    return $bearbeiteterWert;
}

zahlenEinsBisZweihundert();