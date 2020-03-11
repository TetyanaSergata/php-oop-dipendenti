<?php
class Dipendenti {
  public $_nome;
  public $_cognome;
  public $_ruolo;
  public $_reparto;
  public $_orario;
  public $_RAL;
  public $_livello;   

  function __construct($nome, $cognome, $ruolo){
    if(empty($nome)){
      die('Non hai inserito un nome');
    } elseif(empty($cognome)) {
      die('Non hai inserito un cognome');
    } elseif (empty($ruolo)) {
      die('Non hai inserito un ruolo');
    }

    $this->_nome = $nome;
    $this->_cognome = $cognome;
    $this->_ruolo = $ruolo;
  }
}?>
