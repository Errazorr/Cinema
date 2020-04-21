<?php
class  mot_de_passe_oublie{ // classe contact reprenant les information du manager, formulaire, model//
  private $_mail;
  private $_mdp;

  public function __construct($mail, $mdp){

      $this->setmail($mail);
      $this->setmessage($mdp);
}
public function setmail($mail){
  if(empty($mail)){ // si la valeur saisie est vide afficher une erreur //
    trigger_error('la variable doit etre un caractere');
    return; // retourne le résultat //
  }
  $this->_mail = $mail;
}
public function setmessage($mdp){
  if(empty($mdp)){ // si la valeur saisie est vide afficher une erreur //
    trigger_error('la variable doit etre un caractere');
    return; // retourne le résultat //
  }
  $this->_mdp = $mdp;
}

public function getmail(){
  return $this->_mail;
}
public function getmdp(){
  return $this->_mdp;
}
}

?>
