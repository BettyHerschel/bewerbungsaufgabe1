<?php

/**
 * Created by PhpStorm.
 * User: Lisa
 * Date: 29.12.2016
 * Time: 16:24
 */

function zahlenEinsBisZweihundert()
{

    return "mein erster test";
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
    if (($eingabe % 2) == 0 && ($eingabe % 7) == 0 ){
        $bearbeiteterWert = "ZweiSieben";
    }
    return $bearbeiteterWert;
}

echo tauscheZahlZuWort(7);