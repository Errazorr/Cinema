<?php

require 'User.php';

class reservation extends user{
  private $_date;
  private $_heure;
  private $_pers;

  public function setDate ($date){
    $this->_date = $date;
  }

  public function setHeure ($heure){
    $this->_heure = $heure;
  }

  public function setPers ($pers){
    $this->_pers = $pers;
  }

  public function getDate(){return $this->_date;}
  public function getHeure(){return $this->_heure;}
  public function getPers(){return $this->_pers;}
}

?>
