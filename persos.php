<?php

    session_start();
class Personnage
{
        public $id;
        public $name;
        public $classe;
        public $attaque;
        public $magie;
        public $defense;
        public $vie;
        public $arme;
        public $degats;

    public function getClasse() {
        return $this->classe;
    }
    public function printClasse() {
        echo "Vous êtes un " . $this->getClasse(); ?> <br> <?php
    }


    public function getName() {
        return $this->name;
    }
    public function printName() {
        echo "Vous vous appelez " . $this->getName();?> <br> <?php
    }

    public function getAttaque() {
        return $this->attaque;
    }
    public function printAttaque() {
        echo "Votre attaque est de " . $this->getAttaque() . " points";?> <br> <?php
    }

    public function getMagie() {
        return $this->magie;
    }
    public function printMagie() {
        echo "Vous possédez " . $this->getMagie() . " points de magie";?> <br> <?php
    }

    public function getDefense() {
        return $this->defense;
    }
    public function printDefense() {
        echo "Votre défense est de " . $this->getDefense() . " points";?> <br> <?php
    }

    public function getVie() {
        return $this->vie;
    }
    public function printVie() {
        echo "Votre avez " . $this->getVie() . " points de vie";?> <br> <?php
    }

    public function getArme() {
        return $this->arme;
    }
    public function printArme() {
        echo "Votre arme est une " . $this->getArme();?> <br> <?php
    }

    public function getDegats() {
        return $this->degats;
    }
    public function printDegats() {
        echo "Vous avez " . $this->getDegats() . " points de dégats";?> <br> <?php
    }
}

?>


<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/blog-home.css" rel="stylesheet">

</head>

<body>
<div class="navbar">
    <nav role="navigation" class="navbar navbar-inverse">
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href=""> Profil </a></li>
                <li><a href=""> Panier d'achat </a></li>
                <li><a href=""> Bibliothèque </a></li>
            </ul>
        </div>
    </nav>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Créer le personnage</div>

                <?php   if (isset($_POST["persos"]) && isset($_POST["name"])) {

                    $persos = htmlspecialchars($_POST["persos"]);
                    $name = htmlspecialchars($_POST["name"]);

                    if ($persos == "guerrier") {
                        $perso = new Personnage();
                        $perso->id=1;
                        $perso->attaque = 60;
                        $perso->magie = 0;
                        $perso->defense = 40;
                        $perso->vie = 100;
                        $perso->arme = "épée";
                        $perso->name = $name;
                        $perso->classe = "Guerrier";
                        $perso->degats = 0;
                        $perso->printClasse();
                        $perso->printName();
                        $perso->printAttaque();
                        $perso->printMagie();
                        $perso->printDefense();
                        $perso->printVie();
                        $perso->printArme();
                        $perso->printDegats();
                        $_SESSION['personnage'] = serialize(new Personnage());

                    } elseif ($persos == "magicien") {
                        $perso = new Personnage();
                        $perso->id=2;
                        $perso->attaque = 0;
                        $perso->magie = 60;
                        $perso->defense = 40;
                        $perso->vie = 100;
                        $perso->arme = "Baguette";
                        $perso->name = $name;
                        $perso->classe = "magicien";
                        $perso->degats = 0;
                        $perso->printClasse();
                        $perso->printName();
                        $perso->printAttaque();
                        $perso->printMagie();
                        $perso->printDefense();
                        $perso->printVie();
                        $perso->printArme();
                        $perso->printDegats();
                        $_SESSION['personnage'] = serialize(new Personnage());

                    } elseif ($persos == "paladin") {
                        $perso = new Personnage();
                        $perso->id=3;
                        $perso->attaque = 40;
                        $perso->magie = 40;
                        $perso->defense = 20;
                        $perso->vie = 100;
                        $perso->arme = "Baguette et Épée";
                        $perso->name = $name;
                        $perso->classe = "paladin";
                        $perso->degats = 0;
                        $perso->printClasse();
                        $perso->printName();
                        $perso->printAttaque();
                        $perso->printMagie();
                        $perso->printDefense();
                        $perso->printVie();
                        $perso->printArme();
                        $perso->printDegats();
                        $_SESSION['personnage'] = serialize(new Personnage());

                    } else {
                        echo "Veuillez Renseigner un personnage existant";
                    }
                } else {
                    echo "Veuillez Renseigner les champs";
                }

                ?><button class="btn btn-primary" style="height:75px; width:200px; margin-left:50px; margin-top:100px;">
                    <a style="color:white; font-size:22px;" href="salle1.php"> Lancer la partie </a>
                </button>

            </div>
        </div>
    </div>
</div>
</body>
</html>
