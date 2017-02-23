<?php
    session_start();
    require ("db.php");
class Personnage
{
        public $name = "";
        public $classe = "";
        public $attaque = "";
        public $magie = "";
        public $defense = "";
        public $vie = "";
        public $arme = "";
        public $degats = "";

    public function getClasse() {
        return $this->classe;
    }
    public function printClasse() {
        echo $this->getClasse();
    }

    public function getAttaque() {
        return $this->attaque;
    }
    public function printAttaque() {
        echo $this->getAttaque();
    }

    public function getName() {
        return $this->name;
    }
    public function printName() {
        echo $this->getName();
    }
}


class Game
{
    
    public function perso()
    {

        if (isset($_POST["persos"]) && isset($_POST["name"])) {

            $persos = htmlspecialchars($_POST["persos"]);
            $name = htmlspecialchars($_POST["name"]);

            if ($persos == "guerrier") {
                $perso = new Personnage();
                $perso->attaque = 60;
                $perso->magie = 0;
                $perso->defense = 40;
                $perso->vie = 100;
                $perso->arme = "épée";
                $perso->name = $name;
                $perso->classe = "Guerrier";
                $perso->degats = 0;


            } elseif ($persos == "magicien") {
                $perso = new Personnage();
                $perso->attaque = 0;
                $perso->magie = 60;
                $perso->defense = 40;
                $perso->vie = 100;
                $perso->arme = "Tome";
                $perso->name = $name;
                $perso->classe = "magicien";
                $perso->degats = 0;
            } elseif ($persos == "paladin") {
                $perso = new Personnage();
                $perso->attaque = 40;
                $perso->magie = 40;
                $perso->defense = 20;
                $perso->vie = 100;
                $perso->arme = "Tome et Épée";
                $perso->name = $name;
                $perso->classe = "paladin";
                $perso->degats = 0;
            } else {
                echo "Veuillez Renseigner un personnage existant";
            }
        } else {
            echo "Veuillez Renseigner les champs";
        }
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

                <?php
                        ?> Votre personnage est un <?php $persos->printClasse(); ?><br>
                            Votre personnage s'appelle <?php $persos->printName();


                ?>

            </div>
        </div>
    </div>
</div>
</body>
</html>
