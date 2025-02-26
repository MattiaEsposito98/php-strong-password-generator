<?php
function genera($lunghezza, $lettere = "on", $numeri = "on", $simboli = "on")
{
  // Inizializza la stringa dei caratteri vuota
  $caratteri = '';

  // Aggiungi le lettere se richieste
  if ($lettere === "on") {
    $caratteri .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
  }

  // Aggiungi i numeri se richiesti
  if ($numeri === "on") {
    $caratteri .= '0123456789';
  }

  // Aggiungi i simboli se richiesti
  if ($simboli === "on") {
    $caratteri .= '!@#$%^&*()-_=+';
  }

  // Se non ci sono caratteri disponibili, restituisci una stringa vuota
  if (empty($caratteri)) {
    return 'Inserisci un filtro';
  }

  // Genera la password
  return substr(str_shuffle(str_repeat($caratteri, ceil($lunghezza / strlen($caratteri)))), 0, $lunghezza);
}
