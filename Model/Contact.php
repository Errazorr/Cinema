<?php
class contact { // classe contact reprenant les informations du manager, formulaire, model//
  private $_nom;
  private $_mail;
  private $_message;

  public function __construct($nom, $mail, $message){

      $this->setnom($nom);
      $this->setmail($mail);
      $this->setmessage($message);
}

public function setnom($nom){
  if(empty($nom)){ // si la valeur saisie est vide afficher une erreur //
    trigger_error('la variable doit etre un caractere');
    return; // retourne le résultat //
  }
  $this->_nom = $nom;
}
public function setmail($mail){
  if(empty($mail)){ // si la valeur saisie est vide afficher une erreur //
    trigger_error('la variable doit etre un caractere');
    return; // retourne le résultat //
  }
  $this->_mail = $mail;
}
public function setmessage($message){
  if(empty($message)){ // si la valeur saisie est vide afficher une erreur //
    trigger_error('la variable doit etre un caractere');
    return; // retourne le résultat //
  }
  $this->_message = $message;
}
public function getnom(){
  return $this->_nom;
}
public function getmail(){
  return $this->_mail;
}
public function getmessage(){
  return $this->_message;

}
}

?>
