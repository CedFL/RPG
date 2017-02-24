<?php

class Monstre
{

    public $_id;
    public $_name;
    public $_attaque;
    public $_magie;
    public $_vie;

    public function id()
    {
        return $this->_id;
    }

    public function name()
    {
        return $this->_name;
    }

    public function vie()
    {
        return $this->_vie;
    }

    public function attaque()
    {
        return $this->_attaque;
    }


    public function attaquer($cible)
    {
        $degats = $this->attaque() - $cible->defense();
        $cible->_vie -= $degats;
        echo 'Le ' . $this->nom() . ' frappe ' . $cible->classe();
    }

    public function mort()
    {
        if ($this->_vie == 0) {
            echo "Le monstre est mort";
        }
    }
}

class Gobelin extends Monstre
{
    public $_id = 1;
    public $_nom = 'Gobelin';
    public $_vie = 50;
    public	$_attaque = 20;
    public $_magie = 0;

}

class Dragon extends Monstre
{
    public $_id = 2;
    public $_nom = 'Dragon';
    public $_vie = 200;
    public	$_attaque = 50;
    public $_magie = 0;

}

class MagicienNoir extends Monstre
{
    public $_id = 3;
    public $_nom = 'Magicien Noir';
    public $_vie = 150;
    public	$_attaque = 50;
    public $_magie = 70;

}
?>