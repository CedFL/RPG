<?php
include("persos.php");


class Salle1 extends Game
{


    const PERSONNAGE_TUE = 1; // Constante renvoyée par la méthode `frapper` si on a tué le personnage en le frappant.
    const PERSONNAGE_FRAPPE = 2; // Constante renvoyée par la méthode `frapper` si on a bien frappé le personnage.



    public function attaquer(Salle1 $perso)
    {

        return $perso->recevoirDegats();
    }
    

    public function recevoirDegats()
    {
        $this->degats += 5;

        // Si on a 100 de dégâts ou plus, on dit que le personnage a été tué.
        if ($this->degats >= 100)
        {
            return self::PERSONNAGE_TUE;
        }

        // Sinon, on se contente de dire que le personnage a bien été frappé.
        return self::PERSONNAGE_FRAPPE;
    }


    // get //


    public function degats()
    {
        return $this->degats;
    }

   // Set //

    public function setDegats($degats)
    {
        $degats = (int) $degats;

        if ($degats >= 0 && $degats <= 100)
        {
            $this->degats = $degats;
        }
    }

}

?>