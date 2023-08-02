<?php


// Tournoi
// soit un hero soit un monstre
// hero soit chevalier soit une princesse
// monstre soit un lutin soit un ogre
require_once "Personnage.php";
require_once "Iheros.php";

require_once "Heros.php";
require_once "Monstre.php";
require_once "Lutin.php";

require_once "Chevalier.php";

class App{

    public static function run(){
        echo "test";
        $c1=new Chevalier();
        $c2=new Chevalier();

        $m1=new Lutin();
        $m1->sePresenter();

        $c1->giffle($m1);

        var_dump($c1);
        var_dump($c2);
    }


}

