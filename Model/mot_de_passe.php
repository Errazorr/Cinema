<?php
class mot_de_passe { // classe contact reprenant les information du manager, formulaire, model//
  private $_mail;

  public function __construct($mail){

      $this->setmail($mail);
}
public function setmail($mail){
  if(empty($mail)){ // si la valeur saisie est vide afficher une erreur //
    trigger_error('la variable doit etre un caractere');
    return; // retourne le résultat //
  }
  $this->_mail = $mail;
}
public function getmail(){
  return $this->_mail;
}

}

?>
