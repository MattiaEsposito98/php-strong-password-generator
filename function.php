<?php
function genera($lunghezza)
{
  $caratteri = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()-_=+';
  return  substr(str_shuffle(str_repeat($caratteri, ceil($lunghezza / strlen($caratteri)))), 0, $lunghezza);
}
