<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Servidor</title>
</head>
<body>
  <h1>Entendimento de como o servidor interpreta o arquivo php</h1>
  <?php
    date_default_timezone_set("America/Sao_Paulo"); //  GMT -3
    echo "Hoje é dia ". date("D/M/Y");
    echo " e a hora atual é ". date("G:i:s T");

  ?>
  
</body>
</html>