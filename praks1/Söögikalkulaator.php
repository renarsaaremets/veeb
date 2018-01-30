<?php
/**
 * Created by PhpStorm.
 * User: renar.saaremets
 * Date: 30.01.2018
 * Time: 11:28
 */
// Vajalikud muutujad
$soogiHind = 2.55; // Hind, EUR
$soodustuseProtsent = 0.15; // %
$opilaseToetus = 1.80; // EUR
//arvutused
if($soogiHind > 0 and $soodustuseProtsent > 0 and $opilaseToetus > 0){
    $soodusHind = $soogiHind * ((100 - $soodustuseProtsent) / 100);
    $hindOpilasele = $soodusHind - $opilaseToetus;
    echo 'Söögihind õpilasele = '.$hindOpilasele.'<br />';
} else {
    echo 'Andmed ei ole täielikud<br />';
}

