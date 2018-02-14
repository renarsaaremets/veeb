<?php
/**
 * Created by PhpStorm.
 * User: renar.saaremets
 * Date: 14.02.2018
 * Time: 13:24
 */
echo'
    <form method="post" action="'.$_SERVER['PHP_SELF'].'">
        Sisesta arv vahemikus 1-50: <input type="number"></form><br />
        <input type="submit" value="Kontrolli">
    </form>
';

    // Määrame arvu
    $serveriArv = 10;
    $kasutajaArv = $_POST['kasutajaArv'];
    // Kontrolllime
echo $kasutajaArv;
