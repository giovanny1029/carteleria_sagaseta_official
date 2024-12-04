<?php
define('BASE_URL', '/Proyectos/carteleria_sagaseta_official');

require_once "./src/db/base/cx_database.php";
enableErrorLog();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cartelería - Home</title>
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/src/styles/base/normalize.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/src/styles/base/base.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/src/styles/index.css">
</head>

<body>

  <?php
    include_once './src/pages/base/header.php';
  ?>

  <main>
    Espacio para el main
  </main>

  <?php
    include_once './src/pages/base/footer.php';
  ?>

</body>

</html>
