<?php 
session_start();
//$timerCookie = time() + ( 60 * 60); //3600

setcookie('connexion', 'true', $timerCookie);
setcookie('test5', 'true', 5);
$_SESSION['test']; 

$_SESSION['test'] = " 4 ";
$test = $_COOKIE['connexion'];

var_dump($test);
/*session is started if you don't write this line can't use $_Session  global variable*/
$_SESSION["newsession"] = $value;
/*it is my new session*/
$_SESSION["newsession"] = $updatedvalue;
/*session updated*/

/** return $SESSION['ce que je recherche] */
?>
