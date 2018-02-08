<?php
/**
 * Created by PhpStorm.
 * User: renar.saaremets
 * Date: 30.01.2018
 * Time: 11:28
 */
require_once 'funktsioonid.php'; // Sellega nõuame ligipääsu failile, kus on kõik väärtused oleamas
// Testimiseks paneme erinevad väärtused paika
// Kasutame selleks massivi kujul (sooduskaart, kasoledõpilane)
//
// Kasutajad on massiivi tabelis, kus
// 1. real õpilase andmed
// 2. real õpetaja andmed
// 3. real külalise andemd
    $kasutajad = array(
     array(
         'roll' => 'õpilasele',
         'soodus' => true,
         'opilaskaart' => true
     ),
     array(
              'roll' => 'õpetajale',
              'soodus' => true,
              'opilaskaart' => false
     ),
     array(
         'roll' => 'külalisele',
         'soodus' => false,
         'opilaskaart' => false
     )
    );
// Erinevad söögid
      $praed = array(
          array(
              'nimetus' =>  'Snitsel',
              'kirjeldus' =>  'Snitsel sealihast, lisand, kaste, salat, leib',
              'hind' =>   2.68 // EUR
          ),
          array(
              'nimetus' =>  'Snitsel',
              'kirjeldus' =>  'Snitsel sealihast, lisand, kaste, salat, leib',
              'hind' =>   2.68 // EUR
          ),
      );
// vaatame $kasutajad massivi läbi
// for (tjm defineermine; tegevuse kontroll, suurendamine/vähendamine)
foreach ($praed as $praad) {
    echo '<h1>' . $praad['nimetus'] . '</h1>';
    echo '<code>'.$praad['kirjeldus'].'</code><br />';
    echo '<ul>';
foreach ($kasutajad as $kasutaja){
    $soogiHind = soogiHind($praad['hind'], $kasutajad['soodus'], $kasutaja['opilaskaart']);
    echo '<dd>Prae hind '.$kasutaja['roll']. ' = '.round($soogiHind, 2). '€</dd><br />';
    }
            echo '</ul>';
}