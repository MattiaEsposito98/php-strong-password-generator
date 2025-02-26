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
    <label for="lunghezza">Quanto deve essere lunga la password (minimo 5 e massimo 20)</label>
    <input type="number" id="lunghezza" name="lunghezza" min="5" max="20">

    <label for="">Seleziona i filtri</label>
    <div>
      <label for="">Lettere</label>
      <input type="checkbox" name="lettere" id="lettere">
    </div>

    <div>
      <label for="">Numeri</label>
      <input type="checkbox" name="numeri" id="numeri">
    </div>

    <div>
      <label for="">Simboli</label>
      <input type="checkbox" name="simboli" id="simboli">
    </div>

    <button type="submit">Invia</button>
    <button type="reset">Resetta</button>
  </form>

  <?php
  session_start();
  include "./function.php";

  if (isset($_GET['lunghezza']) && $_GET['lunghezza'] >= 5 && $_GET['lunghezza'] <= 20) {
    $lunghezza = (int)$_GET['lunghezza'];
    $lettere = $_GET['lettere'];
    $numeri = $_GET['numeri'];
    $simboli = $_GET['simboli'];

    $_SESSION['password'] = genera($lunghezza, $lettere, $numeri, $simboli);
    header('Location: ./results.php');
  }

  ?>

</body>

</html>