<?php
class  mot_de_passe_oublie{ // classe contact reprenant les informations du manager, formulaire, model//
  private $_mdp;
  private $_mail;

  public function __construct($mdp, $mail){

      $this->setmessage($mdp);
      $this->setmail($mail);

}

public function setmessage($mdp){
  if(empty($mdp)){ // si la valeur saisie est vide afficher une erreur //
    trigger_error('Erreur le mot de passe ne peut pas être vide');
    return; // retourne le résultat //
  }
  $this->_mdp = $mdp;
}

public function setmail($mail){
  if(empty($mail)){ // si la valeur saisie est vide afficher une erreur //
    trigger_error('Erreur le mail ne peut pas être vide');
    return; // retourne le résultat //
  }
  $this->_mail = $mail;
}

public function getmdp(){
  return $this->_mdp;
}

public function getmail(){
  return $this->_mail;
}
}

?>
