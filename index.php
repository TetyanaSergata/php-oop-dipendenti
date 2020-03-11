<?php
  require_once 'classes/Dipendenti.php';

  // Dipendente N1
  $impiegato = new Dipendenti('Marco', 'Rossi', 'Impiegato');
    echo $impiegato->_reparto = 'Amministrazione';
    $impiegato->_orario = '9-16';
    $impiegato->_RAL = 21.000 . ' ' . 'euro';
    $impiegato->_livello = 'Livello 5';
    var_dump($impiegato);

    // Dipendente N2
  $programmatore = new Dipendenti('Tania', 'Sergata', 'Programmatore');
    echo $programmatore->_reparto = 'Informatico';
    $programmatore->_orario = '9-18';
    $programmatore->_RAL = 26.000 . ' ' . 'euro';
    $programmatore->_livello = 'Livello 4';
    var_dump($programmatore);

    // Dipendente N3
  $segretaria = new Dipendenti('Anna', 'Bianchi', 'Segretaria');
    echo $segretaria->_reparto = 'Segreteria';
    $segretaria->_orario = '9-18';
    $segretaria->_RAL = '20.000 euro';
    $segretaria->_livello = 'Livello 5';
    var_dump($segretaria);


 ?>
