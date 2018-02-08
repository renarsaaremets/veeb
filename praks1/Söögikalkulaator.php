<?php
/**
 * Created by PhpStorm.
 * User: renar.saaremets
 * Date: 30.01.2018
 * Time: 11:28
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

// Testimiseks paneme erinevad väärtused paika
// Kasutame selleks massivi kujul (sooduskaart, kasoledõpilane)
    $opilane = array(true, true); // Olemas soodus $opilane[0] ja oled õpilane $opilane[1]
    $opetaja = array(true, false); // Olemas soodus
    $kulaline = array(false, false); // Mitte kumbki
// Kutsume funktsiooni tööle
// Kui oled õpilane
$soogiHind = soogiHind(2.65, $opilane[0], $opilane[1]);
echo 'Prae hind Õpilasele = '.round($soogiHind, 2).' €<br />';
// Kui olemas kliendi kaart, aga pole õpilane
$soogiHind = soogiHind(2.65, $opetaja[0], $opetaja[1]);
echo 'Prae hind sooduskaardi omanikule  = '.round($soogiHind, 2).' €<br />';
// Kui ei ole kliendi kaarti
$soogiHind = soogiHind(2.65, $kulaline[0], $kulaline[1]); // "False" vaja kui reas 15, funktisoonis on see kirjas
echo 'Prae hind = '.round($soogiHind, 2).' €<br />';