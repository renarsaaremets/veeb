<?php
/**
 * Created by PhpStorm.
 * User: renar.saaremets
 * Date: 22.02.2018
 * Time: 13:01
 */
// Võtame kasutusele andmebaasi töötluse
require_once 'ab_fnk.php';
echo '<pre>';
print_r($_POST);
echo '</pre>';
// Kui on soov kasutada muutujat samade nimedega nagu vormi elementide nimetused
// Siis kasuta sellist funktisooni nagu:
extract($_POST);
echo $eesnimi.'<br />';
echo $perenimi.'<br />';
echo $aasta.'<br />';
echo $kuu.'<br />';
echo $paev.'<br />';
// Ehitame ajaväärtus date formaati järgi
$aeg = $aasta.'-'.$kuu.'-'.$paev;
echo $aeg.'<br />';
// Tekitame ühenduse andmebaasiga
$yhendus = yhendus();