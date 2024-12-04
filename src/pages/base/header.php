<?php
require_once "./src/db/base/cx_database.php";
enableErrorLog();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header</title>
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/src/styles/header.css">
</head>

<body>
  <section>
    Espacio para el alert
  </section>

  <header class="header_container">
    <a href="/index.php" class="logo_sagaseta_container"><img src="<?php echo BASE_URL; ?>/src/img/logo_sagaseta.svg" alt="logo" class="logo_sagaseta"></a>
    <h1 class="header_title">Concurso día de Canarias</h1>
  </header>

  <div class="nav">
    <a href="/src/pages/participate.php">Participar</a>
    <a href="/src/pages/results.php">Resultados</a>
    <a href="/src/pages/gallery.php">Galería de carteles</a>
  </div>

</body>

</html>