<?php
include("persos.php");


class Salle1 extends Game
{
    const PERSONNAGE_TUE = 1;
    const PERSONNAGE_FRAPPE = 2;

    public function attaquer(Salle1 $perso)
    {

        return $perso->recevoirDegats();
    }


    public function recevoirDegats()
    {
        $this->degats += 5;

        if ($this->degats >= 100)
        {
            return self::PERSONNAGE_TUE;
        }

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