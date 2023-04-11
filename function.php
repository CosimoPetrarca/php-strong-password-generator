<?php
/* controllo se l'imput ha ricevuto un valore */
if (!empty($_GET['lunghezza_password'])) {
    $lunghezza = $_GET['lunghezza_password'];
}
/* funzione per generare password randomica */
function generatorePassword($lunghezza)
{
    $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789{}[]|\:;"<>,.?/!@#$%^&*';
    return substr(str_shuffle($caratteri), 0, $lunghezza);
}
