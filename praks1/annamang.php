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


    // Kontrolllime, kas arv on edastatud
if(!empty($_POST['kasutajaarv'])) {
    // määrame arvu
    $serveriArv = 10;
    $kasutajaArv = $_POST['kasutajaArv'];
    if($kasutajaArv > $serveriArv) {
        echo 'Pakutud väärtus on suurem <br />';
    }
    if ($kasutajaArv < $serveriArv) {
        echo 'Pakutud väärtus on väiksem <br />';
    }
    if (abs($kasutajaArv-$serveriArv)<=5) {
        if($kasutajaArv == $serveriArv){
            echo 'Arvasid ära !!<br />';
            echo 'Arv on '.$serveriArv. '<br />';
            exit;
    }


    echo 'Oled juba lähedal <br />';
    }

} else {
    echo 'arv peab olema sisestatud';
}
    // Kontrolllime, kas arv on sobilik


//OK