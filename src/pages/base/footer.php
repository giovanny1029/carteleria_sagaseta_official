<?php
require_once "./src/db/base/cx_database.php";
enableErrorLog();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Footer</title>
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/src/styles/footer.css">
</head>

<body>

  <footer class="footer_container">
    <a href="/index.php" class="logo_sagaseta_container"><img src="<?php echo BASE_URL; ?>/src/img/logo_sagaseta.svg" alt="logo" class="logo_sagaseta"></a>
    <div class="nav">
      <a href="/src/pages/participate.php">Participar</a>
      <a href="/src/pages/results.php">Resultados</a>
      <a href="/src/pages/gallery.php">Galería de carteles</a>
    </div>
    <p>2ºDAW IES Fernando Sagaseta</p>
  </footer>

</body>

</html>
