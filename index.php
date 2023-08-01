<?php

// Tournoi
// soit un hero soit un monstre
// hero soit chevalier soit une princesse
// monstre soit un lutin soit un ogre
require_once "Chevalier.php";
$c1=new Chevalier();
$c2=new Chevalier();

 $c1->giffle($c2);

var_dump($c1);
var_dump($c2);

