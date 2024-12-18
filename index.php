<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cartelería - Home</title>
  <link rel="stylesheet" href="src/styles/base/normalize.css">
  <link rel="stylesheet" href="src/styles/base/base.css">
  <link rel="stylesheet" href="src/styles/header.css">
  <link rel="stylesheet" href="src/styles/footer.css">
  <link rel="stylesheet" href="src/styles/index.css">
</head>

<body>
  <section class="alert">
    <p>Esto es una prueba del alert</p>
    <!-- Espacio para el alert  -->
  </section>

  <div>

    <header class="header_container">
      <a href="index.php" class="logo_sagaseta_container"><img src="src/img/logo_sagaseta.svg" alt="logo" class="logo_sagaseta"></a>
      <h1 class="header_title">Concurso día de Canarias</h1>
    </header>

    <div class="nav">
      <a href="src/pages/participate.php">Participar</a>
      <a href="src/pages/results.php">Resultados</a>
      <a href="src/pages/gallery.php">Galería de carteles</a>
    </div>
  </div>

  <main>
    <section class="section_date">
        <div class="fecha">
            <?php
            // Llamar a la función getDates() que fue incluida en el archivo cx_database.php
            require_once "src/db/cx_date.php";

            $result = getDates();  // Llamada a la función getDates

            // Verificar si tenemos resultados
            if ($result && count($result) > 0) {
                foreach ($result as $fecha) {
                    // Mostrar cada evento con su fecha y descripción al lado
                    echo "<div class='date-item'>";
                    echo "<span class='descripcion'>" . htmlspecialchars($fecha['descripcion']) . "</span> : ";
                    echo "<span class='fechas'>" . htmlspecialchars($fecha['fecha']) . "</span>";
                    echo "</div>";
                }
            } else {
                echo "<p>No hay fechas disponibles.</p>";
            }
            ?>
        </div>
    </section>

    <section class ="requirements">
      <h3>Requisitos para participar:</h3>
      <ul>
        <li>Los autores deben ser alumnos del centro.</li>
        <li>Los carteles deben reflejar elementos alusivos a la cultura, tradiciones, símbolos y patrimonio de Canarias.</li>
        <li>Se permite cualquier técnica, siempre que el diseño final esté en formato digital.</li>
        <li>El cartel debe presentarse en formato vertical y en tamaño DIN A3 (3508 x 4961 píxeles). Subido en formato PDF.</li>
        <li>Cualquier diseño que incluya contenido inapropiado o contrario a los valores de respeto y convivencia será descalificado.</li>
        <li>Al participar, los autores ceden los derechos de uso y reproducción de sus diseños al centro educativo para posibles exposiciones y publicaciones.</li>
      </ul>
    </section>
  </main>

  <footer class="footer_container">
    <div class="nav">
      <a href="src/pages/participate.php">Participar</a>
      <a href="src/pages/results.php">Resultados</a>
      <a href="src/pages/gallery.php">Galería de carteles</a>
    </div>
    <p>2ºDAW IES Fernando Sagaseta</p>
  </footer>

</body>

</html>
