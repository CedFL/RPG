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

    <button class="btn btn-primary" style="height:100px; width:300px; margin-left:500px; margin-top:100px;">
        <a style="color:white; font-size:26px;" href="choix_perso.php"> Commencer le jeu </a>
    </button>
</body>
</html>

