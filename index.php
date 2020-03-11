<?php
  require_once 'classes/Dipendenti.php';

  // Dipendente N1
  $impiegato = new Dipendenti('Marco', 'Rossi', 'Impiegato');
    $impiegato->_reparto = 'Amministrazione';
    $impiegato->_orario = '9-16';
    $impiegato->_RAL = 21000;
    $impiegato->_livello = 'Livello 5';
    echo $impiegato->_reparto;
    var_dump($impiegato);

    // Dipendente N2
  $programmatore = new Dipendenti('Tania', 'Sergata', 'Programmatore');
    $programmatore->_reparto = 'Informatico';
    $programmatore->_orario = '9-18';
    $programmatore->_RAL = 26000;
    $programmatore->_livello = 'Livello 4';
    echo $programmatore->_reparto;
    var_dump($programmatore);

    // Dipendente N3
  $segretaria = new Dipendenti('Anna', 'Bianchi', 'Segretaria');
    $segretaria->_reparto = 'Segreteria';
    $segretaria->_orario = '9-18';
    $segretaria->_RAL = 20000;
    $segretaria->_livello = 'Livello 5';
    echo $segretaria->_reparto;
    var_dump($segretaria);


 ?>
