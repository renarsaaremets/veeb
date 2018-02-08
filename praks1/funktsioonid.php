<?php
/**
 * Created by PhpStorm.
 * User: renar.saaremets
 * Date: 8.02.2018
 * Time: 12:45
 */
// Funktsioon soodustuse määramiseks
/**
 * Kolm parameetrit:
 * @param $taisHind
 * @param $soodusKaart
 * @param $kasOledOpilane
 */
function soogiHind($taisHind, $soodusKaart = false, $kasOledOpilane = false){
    // Funktsiooni sisu
    $soodustuseProtsent = 15; // %
    $soodusHind = $taisHind ;
    $opilaseToetus = 1.80; // EURG
    if($soodusKaart) {
        $soodusHind = $taisHind * ((100 - $soodustuseProtsent) / 100);
    }
    if($kasOledOpilane){
        $soodusHind = $soodusHind - $opilaseToetus;
        // $soodusHind -= $opilaseToetus; // - Operaatori lühendatud kuju
    }
    return $soodusHind;
} // Funktsioon lõppeb

// Funktisoon vormi väljastamiseks
// Vormi hoiame vorm.html failis
// Vormi sisu loeme antud failist ja väljastame
function loeVormFailist($failinimi){
    // Siia salvestame sisu
    $sisu = '';
    // Kontrollime vajaliku faili olemasolu
    if (file_exists($failinimi) and is_file($failinimi) and is_readable($failinimi)){
        // Saab failist lugeda
        $fp = fopen($failinimi, 'r'); // Tekitame ühenduse failiga
        // Loeme failist täissisu
        $sisu = fread($fp, filesize($failinimi));
        fclose($fp); // Ühendus failiga kinni
    } else {
        echo 'Probleem '.$failinimi.' failiga <br/>';
        exit;
    }
    echo $sisu;
}