<?php
$segundos = readline ("Ingresa el tiempo en segundos: ");
define ("DIA",60*60*24);
define ("HORA",60*60);
define ("MINUTO",60);
echo "$segundos Segundos equivalen a ";
if ($segundos > DIA) {
    $dia = (int)($segundos / DIA);
    $segundos = $segundos % DIA;
    echo "$dia días ";
  }
  if ($segundos > HORA) {
    $hora = (int)($segundos / HORA);
    $segundos = $segundos % HORA;
    echo "$hora horas ";
  } 
  if ($segundos > MINUTO) {
    $minuto = (int)($segundos / MINUTO);
    $segundos = $segundos % MINUTO;
    echo "$minuto minutos ";
  } 
  echo "$segundos segundos \n";