<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>FECHA</title>
  </head>
  <body>
  <?php 
         date_default_timezone_set('America/Lima');

        $fechaActual = date("d-m-Y");
        $horaActual = date("h:i:s");

        echo "La fecha es: $fechaActual y la hora es $horaActual" . "<br> ";
        echo "ESNAYDER CASTILLEJOS TENAZOA";
  ?>
  </body>
</html>