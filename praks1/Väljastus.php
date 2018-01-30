<?php
/**
 * Created by PhpStorm.
 * User: renar.saaremets
 * Date: 30.01.2018
 * Time: 10:24
 */
// Üherealine kommentaar
/*
 * mitme
 * realine
 * kommentaar
 */
// Väljastamine
echo 'Aine - veebiprogrameerimine'.'<br />'; // Käsu lõpp on semikoolon;
print 'valikaine<br />';
// Muutujate defineerimine
$eesNimi = 'Renar'; // Eesnimi, string
$pereNimi = 'Saaremets'; // Perekonnanimi, string
$bussiNumber = 4; // Bussi number 4, integer
$soiduKestvus = 0.5; // Sõidu kestvus, 0.5 tundi, float
// Konstantide defineerimine
define('NUMBER_PI', 3.14);
/*Kasutades eel defineeritud muutujad ja konstandid
väljasta ilusa teksti*/
echo 'Olen '.$eesNimi.' '.$pereNimi.'<br />';
echo 'Sõidan koolist kesklinne bussiga number' .$bussiNumber. '<br />';
echo 'Jõuan kesklinne ' .$soiduKestvus.' tunniga <br/>';
echo 'Midagi konstantset? PI = '.NUMBER_PI. '<br />';

