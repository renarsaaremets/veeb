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
//
// Kasutajad on massiivi tabelis, kus
// 1. real õpilase andmed
// 2. real õpetaja andmed
// 3. real külalise andemd
    $kasutajad = array(
     array(true, true),
     array(true, false),
     array(false, false)
    );
// vaatame $kasutajad massivi läbi
// for (tjm defineermine; tegevuse kontroll, suurendamine/vähendamine)
for($i = 0; $i < count($kasutajad); $i++)
{
    // Kutsume funktsiooni tööle
    $soogiHind = soogiHind(2.65, $kasutajad[$i][0], $kasutajad[$i][1]);
    echo 'Prae hind = '.round($soogiHind, 2).' €<br />';
}