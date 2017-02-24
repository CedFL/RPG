<?php
class Game
{
    private $_niveau = 1;
    public function niveau()
    {
        return $this->_niveau;
    }
    public function securiteNiveau()
    {
        if ($this->_niveau  == 1) {
            return true;
        }
    }

    public function evolution()
    {
        $_roll = rand(0, 2);
        if ($_roll != 0 OR $this->securiteNiveau() == true) {
            $this->_niveau++;
        } else {
            $this->_niveau--;
        }
    }
    public function monstreApparition()
    {
        $_roll = rand(0, 1);
        if ($_roll != 0) {
            return true;
        }
    }

    public function coffreApparition()
    {
        $_roll = rand(0, 1);
        if ($_roll != 0) {
            return true;
        }
    }
    public function porteApparition()
    {
        $_roll = rand(2, 4);
        return $_roll;
    }
    public function monstreSelect($boss = 0)
    {
        if($boss != 1){
            $_roll= rand(0,1);
            return $_roll;
        }else{
            return 2;
        }
    }
    public function armeSelect()
    {
        $_roll= rand(0,5);
        return $_roll;
    }
}
$_SESSION['game'] = serialize(new Game());

?>