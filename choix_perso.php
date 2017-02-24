<?php
@include "header.php"
?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Créer le personnage</div>

                <div class="panel-body">
                    <form method="POST" class="form-horizontal" action="persos.php">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="perso">Renseigner un personnage (guerrier, magicien, paladin)</label><br>
                            <div class="col-sm-10">
                                        <input type="text" name="persos" id="persos" class="form-control" placeholder="Personnage"/>
                                    </div>

                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Nom</label>
                            <br>
                            <div class="col-sm-10">
                                <input type="text" name="name" id="persos" class="form-control" placeholder="Nom"/>
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