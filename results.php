<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>La tua password è:</h1>
  <?php
  session_start();
  if (isset($_SESSION['password'])) {
    echo $_SESSION['password'];
  } else {
    echo "Nessuna password generata.";
  }
  ?>

</body>

</html>