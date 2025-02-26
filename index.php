<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Generatore di password</title>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <h1>Genera la password</h1>
  <form action="" method="get">
    <label for="lunghezza">Quanto deve essere lunga la password (minimo 5)</label>
    <input type="number" id="lunghezza" name="lunghezza" min="5">
    <button type="submit">Invia</button>
  </form>

  <?php

  include "./function.php"
  ?>

</body>

</html>