<?php

class Arme {
public  $_name;
public $_pointsAttaque;
public $_pointsMagie;

public function name() {
return $this->_name;
}
public function pointsAttaque() {
return $this->_pointsAttaque;
}
public function pointsMagie() {
return $this->_pointsMagie;
}
}

class Epée extends Arme {
    public  $_name = "Epée";
    public $_pointsAttaque = 30;
    public $_pointsMagie = 0;
}

class Joyau extends Arme {
    public  $_name = "Joyau";
    public $_pointsAttaque = 0;
    public $_pointsMagie = 30;
}

class Tome extends Arme {
    public  $_name = "Tome";
    public $_pointsAttaque = 0;
    public $_pointsMagie = 40;
}

class Arc extends Arme {
    public  $_name = "Arc";
    public $_pointsAttaque = 25;
    public $_pointsMagie = 0;
}
?>

