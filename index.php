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
  ?>

</body>

</html>