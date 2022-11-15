<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Battle Ships</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Montserrat&display=swap" rel="stylesheet">
  </head>
  <style>
    body {
      
      background-color: orangered;
    }
  </style>
  <body>
    <div class="splash-container">
      <h2 class="splash-title">Batalla Naval</h2>
      <div>
        <a href="solo_jugador.html" class="btn splash-btn">Jugador VS Maquina</a>
        <a href="multijugador.html" class="btn splash-btn">Multijugador</a>
      </div>
    </div>
  </body>
</html>
<?php
  //Muestra la fecha y hora actual del servidor
   echo "<center>";
   echo "<br><br><br><br><br>";
   date_default_timezone_set('America/Mexico_City');
   echo "Fecha y hora actual: " . date("d-m-Y H:i:s");
  echo "</center>";

  //txt con las fechas y horas en que se inicia y termina la partida
  $fecha = date("d-m-Y H:i:s");
  $archivo = fopen("fechas.txt", "a");
  fwrite($archivo, $fecha);
  fwrite($archivo, "\n");
  fclose($archivo);

  //descarga de txt con un boton llamado "Descargar"
  echo "<center>";
  echo "<br><br>";
  echo "<a href='fechas.txt' download='fechas.txt'>Descargar Fechas de Inicio del Juego</a>";
  echo "</center>";

  //Muestra el nombre de dispositivo y navegador utliizado 
  echo "<center>";
  echo "<br>";
  echo "Nombre del dispositivo: " . $_SERVER['HTTP_USER_AGENT'];
  echo "</center>";
?>
