<?php
/**
 * Created by PhpStorm.
 * User: renarsaaremets
 * Date: 21.02.2018
 * Time: 15:02
 */
function paev(){
    $hetkePaev = date('j', time());
    $valik = '<select name="paev">';
    for($paev = 1; $paev < 32; $paev++){
        if($paev == $hetkePaev){
            $valik = $valik.'<option value="'.$paev.'" selected>'.$paev.'</option>';
        }
        $valik = $valik.'<option value="'.$paev.'">'.$paev.'</option>';
    }
    $valik = $valik.'</select>';
    return $valik;
}
function kuu(){
//    $kuud = array('Jaanuar', 'Veebruar', 'Märts', 'Aprill', 'Mai', 'Juuni', 'Juuli', 'August', 'September', 'Oktoober', 'November', 'Detsember');
    $kuud = array();
    for($i = 1; $i < 13; $i++){
        $kuuNimi = date('F', mktime(0, 0, 0, $i));
        $kuuNumber = date('m', mktime(0, 0, 0, $i));
        $kuud[$kuuNumber] = $kuuNimi;
    }
    $hetkeKuu = date('m', time());
    $valik = '<select name="kuu">';
    foreach($kuud as $kuuNumber => $kuuNimi){
        if($kuuNumber == $hetkeKuu){
            $valik = $valik.'<option value="'.$kuuNumber.'" selected>'.$kuuNimi.'</option>';
        }
        $valik = $valik.'<option value="'.$kuuNumber.'">'.$kuuNimi.'</option>';
    }
    $valik = $valik.'</select>';
    return $valik;
}
function aasta(){
    $hetkeAasta = date('Y', time());
    $valik = '<select name="aasta">';
    for($aasta = 1920; $aasta < 2040; $aasta++){
        if($aasta == $hetkeAasta){
            $valik = $valik.'<option value="'.$aasta.'" selected>'.$aasta.'</option>';
        }
        $valik = $valik.'<option value="'.$aasta.'">'.$aasta.'</option>';
    }
    $valik = $valik.'</select>';
    return $valik;
}
function registreerimisVorm(){
    echo '
    <form action="Andmetöötlus.php" method="post">
        <table>
            <tr>
                <td>Eesnimi</td>
                <td colspan="2"><input type="text" name="eesnimi"></td>
            </tr>
            <tr>
                <td>Perenimi</td>
                <td colspan="2"><input type="text" name="perenimi"></td>
            </tr>
            <tr>
                <td>Aasta</td>
                <td>Kuu</td>
                <td>Päev</td>
            </tr>
            <tr>
                <td>'.aasta().'</td>
                <td>'.kuu().'</td>
                <td>'.paev().'</td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" value="Registreeri">
                </td>
            </tr>
        </table>
    </form>
    ';
}
registreerimisVorm();