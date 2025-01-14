<?php
    require_once "base/cx_database.php";
    enableErrorLog();

    // Función para obtener los datos de la tabla
    function obtenerFechas($conexion) {
        $consulta = "SELECT * FROM fecha ORDER BY fecha ASC";
        $stmt = $conexion->prepare($consulta);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Función para determinar si una fecha está dentro de un rango de fechas
    function estaEnRango($fechaActual, $inicio, $fin) {
        $fechaActual = strtotime($fechaActual);
        $inicio = strtotime($inicio);
        $fin = strtotime($fin);

        return $fechaActual >= $inicio && $fechaActual < $fin;
    }

    // Función para generar mensajes según los plazos
    function generarMensajes($conexion) {
        $fechas = obtenerFechas($conexion);
        $fechaActual = date('Y-m-d');
        $mensajes = [];

        for ($i = 0; $i < count($fechas) - 1; $i++) {
            $inicio = $fechas[$i]['fecha'];
            $fin = date('Y-m-d', strtotime($fechas[$i + 1]['fecha'] . ' -1 day'));

            if (estaEnRango($fechaActual, $inicio, $fin)) {
                $diasRestantes = (strtotime($fin) - strtotime($fechaActual)) / (60 * 60 * 24);
                $descripcion = $fechas[$i]['descripcion'];

                if ($descripcion === "Presentación de candidaturas") {
                    $mensajes[] = "<p>!ATENCIÓN! Quedan <strong>" . $diasRestantes . " días</strong> para que acabe la presentación de candidaturas.</p>";
                } elseif ($descripcion === "Cierre de candidaturas e inicio de periodo de votación") {
                    $mensajes[] = "<p>!ATENCIÓN! Quedan <strong>" . $diasRestantes . " días</strong> para que acabe el periodo de votación.</p>";
                }
            }
        }

        return $mensajes;
    }
?>