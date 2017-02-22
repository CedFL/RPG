<?php
session_start();
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

                <div class="panel-body">
                    <form method="POST" class="form-horizontal" action="persos.php">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="perso">Renseigner un personnage (guerrier, magicien, paladin)</label>
                            <div class="col-sm-10">
                                        <input type="text" name="persos" id="persos" class="form-control" placeholder="Personnage"/>
                                    </div>

                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Nom</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" id="persos" class="form-control" placeholder="Personnage"/>
                            </div>

                        </div>


                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-10">
                                <button type="submit" class="btn btn-primary">Envoyer</button>
                            </div>
                        </div>
                    </form>
            </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>