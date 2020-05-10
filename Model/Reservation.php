<?php

require_once 'User.php';

class reservation extends user{
  private $_date;
  private $_pers;
  private $_film;
  private $_num_salle;
  private $_adulte;
  private $_ado;
  private $_enfant;
  private $_commentaire;
  private $_reservation;
  private $_description;
  private $_places;
  private $_dimension;

  public function __construct(array $donnees){
    $this->hydrate($donnees);
  }

  public function hydrate (array $donnees){
    foreach ($donnees as $key => $value) {
      $method='set'.ucfirst($key);
      if(method_exists($this, $method)){
        $this->$method($value);
      }
    }
  }

  public function setDate ($date){
    $this->_date = $date;
  }

  public function setPers ($pers){
    $this->_pers = $pers;
  }

  public function setFilm ($film){
    $this->_film = $film;
  }

  public function setNum_salle ($num_salle){
    $this->_num_salle = $num_salle;
  }

  public function setAdulte ($adulte){
    $this->_adulte = $adulte;
  }

  public function setAdo ($ado){
    $this->_ado = $ado;
  }

  public function setEnfant ($enfant){
    $this->_enfant = $enfant;
  }

  public function setCommentaire ($commentaire){
    $this->_commentaire = $commentaire;
  }

  public function setReservation ($reservation){
    $this->_reservation = $reservation;
  }

  public function setDescription ($description){
    $this->_description = $description;
  }

  public function setPlaces ($places){
    $this->_places = $places;
  }

  public function setDimension ($dimension){
    $this->_dimension = $dimension;
  }

  public function getDate(){return $this->_date;}
  public function getPers(){return $this->_pers;}
  public function getFilm(){return $this->_film;}
  public function getNum_salle(){return $this->_num_salle;}
  public function getAdulte(){return $this->_adulte;}
  public function getAdo(){return $this->_ado;}
  public function getEnfant(){return $this->_enfant;}
  public function getCommentaire(){return $this->_commentaire;}
  public function getReservation(){return $this->_reservation;}
  public function getDescription(){return $this->_description;}
  public function getPlaces(){return $this->_places;}
  public function getDimension(){return $this->_dimension;}
}

?>
