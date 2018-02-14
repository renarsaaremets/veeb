<?php
/**
 * Created by PhpStorm.
 * User: renar.saaremets
 * Date: 14.02.2018
 * Time: 13:07
 */

$rand = rand(1,50);

$guess = $_POST('guess');
$submit = $_POST('submit');

if(isset($submit)) {

    if($guess<1 || $guess>10)  {
     echo "Number peab 1 ja 50 vahele jääma!";
    }
    else {
        if($guess!=$rand) {
            echo "Vale, õige vastus on ".$rand;
        } else {
            echo "Õige!!"
        }
    }
}  else  {
    header("Location: mang.php");
    exit();

}
else if ($_POST["guess"] > $_POST["guess"]) { // suurem kui
    $message = $_POST["guess"]." Liiga suur! Number on väiksem, proovi uuesti.";

