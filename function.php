<?php
if (!empty($_GET['lunghezza']) && $_GET['lunghezza'] > 5) {
  $lunghezza = (int)$_GET['lunghezza'];
  function genera($lunghezza)
  {
    $caratteri = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()-_=+';
    return substr(str_shuffle($caratteri), 0, $lunghezza);
  }
  echo genera($lunghezza);
}
// else {
//   echo "inserisci un numero";
// }
