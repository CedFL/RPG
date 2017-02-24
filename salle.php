<?php
require_once('persos.php');
require_once('jeu.php');
require_once('monstres.php');
require_once('armes.php');

session_start();
if ( isset( $_SESSION['perso'] ) )
{
    $perso = unserialize($_SESSION['perso']);
};
if ( isset( $_SESSION['game'] ) )
{
    $jeu = unserialize($_SESSION['game']);
}else{
    $jeu = new Game();
};
if (!isset($_POST['step'])){
    $step=0;
}else{
    $step=$_POST['step'];
}
?>

