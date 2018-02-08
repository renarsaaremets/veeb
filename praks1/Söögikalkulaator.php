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
function soogiHind($taisHind, $soodusKaart, $kasOledOpilane){
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
// Kutsume funktsiooni tööle
// Kui oled õpilane
$soogiHind = soogiHind(2.65, true, true);
echo 'Prae hind Õpilasele = '.round($soogiHind, 2).' €<br />';
// Kui olemas kliendi kaart, aga pole õpilane
$soogiHind = soogiHind(2.65, true, false);
echo 'Prae hind sooduskaardi omanikule  = '.round($soogiHind, 2).' €<br />';
// Kui ei ole kliendi kaarti
$soogiHind = soogiHind(2.65, false, false);
echo 'Prae hind = '.round($soogiHind, 2).' €<br />';